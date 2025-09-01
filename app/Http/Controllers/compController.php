<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Exam;
use App\Models\Profs;
use App\Models\Student;
use App\Models\Changes;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;


function exam_encoded(){
    return Str::random(10);
}
class compController extends Controller{
    public function index(){
        return view('index');
    }

    public function createexam(){
        return view('createexam');
    }

    public function store(Request $request) {
        $validated = $request->validate([
            'teacher_name' => 'required|string|max:255',
            'password' => 'required|string|max:255',
            'exam_title' => 'required|string|max:255',
            'class_name' => 'required|string|max:255',
            'exam_link' => 'required|url|max:255',
        ]);
    
        // Check if there is a professor with the same name and code
        $profExists = Profs::where('name', $validated['teacher_name'])
                           ->where('code', $validated['password'])
                           ->exists();
    
        // Create a new exam if professor exists
        if ($profExists) {
            // Create a new exam
            $exam = new Exam();
            $exam->teacher_name = $validated['teacher_name'];
            $exam->exam_title = $validated['exam_title'];
            $exam->class_name = $validated['class_name'];
            $exam->exam_link = $validated['exam_link'];
            $exam_encode = exam_encoded();
            $exam->exam_encode = $exam_encode;
            $exam->OnOff="On";
            $exam->save();
            
            $prof = Profs::where('name', $validated['teacher_name'])
                    ->where('code', $validated['password'])
                    ->first();


            return redirect('/createexam')->with([
                'exam_created' => true,
                'exam_encode' => $exam_encode,
                'prof_id' => $prof->id,
            ]);
        } else {
            return redirect('/createexam')->with('exam_created', false);
        }
    }
    
    public function storestudent(Request $request) {
        // Validate request data
        $validated = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'class_number' => 'required|integer',
            'class_name' => 'required|string|max:255',
            'exam_code' => 'required|string|max:255',
        ]);
    
        // Create a new student
        $student = new Student();
        $student->first_name = $validated['first_name'];
        $student->last_name = $validated['last_name'];
        $student->class_number = $validated['class_number'];
        $student->class_name = $validated['class_name'];
        $student->exam_code = $validated['exam_code'];
    
        $student->save();
    
        return redirect('/passeexam'.'/'.$student->id.'/'.$student->exam_code)->with(['exam_created'=>true,'codeexam'=>$student->exam_code]);
    }
    

    public function indexpasseexam(){
        return view('passeexam');
    }
    public function passeexam($codestudent,$codeexam){
        $exam = Exam::where('exam_encode', $codeexam)->first();
        $student = Student::where('id',$codestudent)->first();
        if($exam->OnOff=="On"){
            if ($exam && $student) {
                return view('exam', [
                    'exam_title' => $exam->exam_title,
                    'exam_link' => $exam->exam_link,
                    'class_name' => $exam->class_name,
                    'date_cr' => $exam->created_at,
                    'first_name' => $student->first_name,
                    'last_name'=>$student->last_name,
                    'class_num' => $student->class_number,
                    'id_student'=>$student->id,
                    'exam_code'=>$codeexam
                ]);
            }
            return redirect('/passeexam');
        }else{
            return redirect('/');
        }
    }
    public function examclm($codestudent,$codeexam){
        $exam = Exam::where('exam_encode', $codeexam)->first();
        $student = Student::where('id',$codestudent)->first();
        if($exam->OnOff=="On"){
            if ($exam && $student) {
            return view('examclm', [
                'exam_title' => $exam->exam_title,
                'exam_link' => $exam->exam_link,
                'class_name' => $exam->class_name,
                'date_cr' => $exam->created_at,
                'first_name' => $student->first_name,
                'last_name'=>$student->last_name,
                'class_num' => $student->class_number,
                'id_student'=>$student->id,
                'exam_code'=>$codeexam
            ]);
            }
            return redirect('/passeexam');
        }else{
            return redirect('/');
        }
    }

    public function storechange(Request $request){
        $validated = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'student_id'=>'required|integer',
            'student_number'=>'required|integer',
            'exam_code'=>'required|string|max:255',
            'exam_title'=>'required|string|max:255',
            'action'=>'required|string|max:255',
            'duration'=>'required|integer',
        ]);
        $tableName=$validated['exam_code'].'_'.$validated['first_name'].'_'.$validated['last_name'];
        if (!Schema::hasTable($tableName)) {
            $this->createStudentBeh($tableName,$validated['duration']);
        } 
        
        $this->storeAction($tableName,$validated['first_name'].'_'.$validated['last_name'],$validated['action'],$validated['duration']);
        return "success";
    }
    public function createStudentBeh($student_name, $duration){
        Schema::create($student_name, function (Blueprint $table) {
            $table->increments('id');
            $table->string('action');
            $table->integer('duration'); // Changed to integer to store duration in minutes, seconds, etc.
            $table->timestamps();
        });
    }    
    public function storeAction($tableName,$name,$action,$duration){
        DB::table($tableName)->insert([
            'action' => $action,
            'duration' => $duration,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
    public function statistics($codeprof, $codeexam){
        $students = Student::where('exam_code' ,  $codeexam)->get();
        $exam = Exam::where('exam_encode', $codeexam)->first();        
        return view('statistics')->with([
            'students' => $students,
            'exam' => $exam,
            'examcode'=>$codeexam
        ]);
    }
    public function clearName($name){
        $arr_name=explode("_",$name);
        $c_name=$arr_name[1].' '.$arr_name[2];
        return $c_name;
    }
    public function calcScore($countsarray){
        $score_sus=0;
        $score_sus=$score_sus+($countsarray[7]*2);
        $score_sus=$score_sus+($countsarray[1]*0.005);
        $score_sus=$score_sus+($countsarray[2]*0.005);
        $score_sus=$score_sus+($countsarray[3]*0.005);
        $score_sus=$score_sus+($countsarray[5]*0.005);
        $score_sus=$score_sus+($countsarray[6]*0.005);
        return round(100-$score_sus,2);
    }
    public function getStatistics($examcode) {
        $tables = DB::select("SHOW TABLES LIKE '$examcode%'");
        $tableNames = array_map(function($table) {
            return array_values((array)$table)[0];
        }, $tables);
    
        $data = [];
    
        foreach ($tableNames as $tableName) {
            $totalDuration = DB::table($tableName)->sum('duration');
            $dataFromTable = DB::table($tableName)
                        ->select('action', DB::raw('count(*) as count'))
                        ->groupBy('action')
                        ->get();
            $dataPoints = [
                'face face' => 0,
                'face bottom' => 0,
                'left bottom' => 0,
                'face bottom' => 0,
                'right bottom' => 0,
                'face top' => 0,
                'left top' => 0,
                'right top' => 0,
                'Leave the exam page to another page or another program' => 0,
                'Quite FScreen' => 0
            ];
            foreach ($dataFromTable as $row) {
                if (array_key_exists($row->action, $dataPoints)) {
                    $dataPoints[$row->action] = $row->count;
                }
            }
            
            $data[] = [
                'labels' => [
                    'Face Center',
                    'Face Bottom',
                    'Left Bottom',
                    'Right Bottom',
                    'Face Top',
                    'Left Top',
                    'Right Top',
                    'Leave Exam',
                    'Quite Full Screen'
                ],
                
                'datasets' => [
                    [
                        'Name' => $this->clearName($tableName),
                        'Branch' => 'GLSID',
                        'Score' => $this->calcScore(array_values($dataPoints)),
                        'label' => 'Number Of',
                        'durationOutExam' => floor($totalDuration / (1000 * 60)) . ':' . floor(($totalDuration / 1000) % 60),
                        'data' => array_values($dataPoints),
                        'borderColor' => [
                        'rgba(44, 62, 80, 1)',
                        'rgba(52, 73, 94, 1)',
                        'rgba(39, 55, 70, 1)',
                        'rgba(41, 128, 185, 1)',
                        'rgba(22, 160, 133, 1)',
                        'rgba(243, 156, 18, 1)',
                        'rgba(211, 84, 0, 1)',
                        'rgba(192, 57, 43, 1)',
                        'rgba(127, 140, 141, 1)'
                    ],
                    'backgroundColor' => [
                        'rgba(44, 62, 80, 0.8)',
                        'rgba(52, 73, 94, 0.8)',
                        'rgba(39, 55, 70, 0.8)',
                        'rgba(41, 128, 185, 0.8)',
                        'rgba(22, 160, 133, 0.8)',
                        'rgba(243, 156, 18, 0.8)',
                        'rgba(211, 84, 0, 0.8)',
                        'rgba(192, 57, 43, 0.8)',
                        'rgba(127, 140, 141, 0.8)'
                    ],
                        'fill' => false
                    ]
                ]
            ];
        }
    
        return response()->json($data);
    }
    public function finishExam($codeexam){
        $exam = Exam::where('exam_encode', $codeexam)->first();
        $exam->OnOff="Off";
        $exam->save();
        return redirect("/");
    }

    
}

