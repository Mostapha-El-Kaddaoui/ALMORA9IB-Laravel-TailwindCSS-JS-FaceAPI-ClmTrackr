<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Cairo:wght@500&display=swap">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Exam Platform</title>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    spacing: {
                        '110': '600px',
                    },
                    colors: {
                        scaleGray: '#000000db',
                        colorOne: '#EEEEEE',
                        colorSecond: '#686D76',
                        colorThird: '#373A40',
                        colorFourth: '#DC5F00',
                        colorFivth:'#26355D'
                    },
                    fontFamily: {
                        'cairo': ['Cairo', 'sans-serif'],
                    },
                }
            }
        }
    </script>
</head>
<body>
    <div class="absolute dir-rtl top-0 left-0 w-full h-full grid grid-cols-3">
        <div class="bg-slate-900">
            <div class="px-10 py-20">
                <div class="flex items-center font-cairo font-bold text-white text-3xl">
                    <svg xmlns="http://www.w3.org/2000/svg" class="fill-white w-14 ml-5" viewBox="0 0 640 512">
                        <path d="M320 32c-8.1 0-16.1 1.4-23.7 4.1L15.8 137.4C6.3 140.9 0 149.9 0 160s6.3 19.1 15.8 22.6l57.9 20.9C57.3 229.3 48 259.8 48 291.9v28.1c0 28.4-10.8 57.7-22.3 80.8c-6.5 13-13.9 25.8-22.5 37.6C0 442.7-.9 448.3 .9 453.4s6 8.9 11.2 10.2l64 16c4.2 1.1 8.7 .3 12.4-2s6.3-6.1 7.1-10.4c8.6-42.8 4.3-81.2-2.1-108.7C90.3 344.3 86 329.8 80 316.5V291.9c0-30.2 10.2-58.7 27.9-81.5c12.9-15.5 29.6-28 49.2-35.7l157-61.7c8.2-3.2 17.5 .8 20.7 9s-.8 17.5-9 20.7l-157 61.7c-12.4 4.9-23.3 12.4-32.2 21.6l159.6 57.6c7.6 2.7 15.6 4.1 23.7 4.1s16.1-1.4 23.7-4.1L624.2 182.6c9.5-3.4 15.8-12.5 15.8-22.6s-6.3-19.1-15.8-22.6L343.7 36.1C336.1 33.4 328.1 32 320 32zM128 408c0 35.3 86 72 192 72s192-36.7 192-72L496.7 262.6 354.5 314c-11.1 4-22.8 6-34.5 6s-23.5-2-34.5-6L143.3 262.6 128 408z"/>
                    </svg>
                    <span>منصة المراقب</span>
                </div>
                <div class="py-20">
                    <h4 class="font-cairo font-bold text-2xl text-white">إنشاء امتحان يضمن تكافؤ الفرص لجميع الطلاب</h4>
                    <p class="font-cairo text-base text-slate-200 mt-4">لضمان تكافؤ الفرص لجميع الطلاب عند إعداد الامتحانات، يجب أن يتضمن الاختبار أسئلة متنوعة ومتوازنة تعكس محتوى المنهج وتعطي فرصة عادلة لجميع الطلاب لإظهار مهاراتهم. كما يتعين توفير ظروف امتحانية متساوية للجميع، بما في ذلك التسهيلات اللازمة للطلاب ذوي الاحتياجات الخاصة</p>
                </div>
                <div class="">
                    <a href="/" class="text-white text-base font-cairo underline">العودة للصفحة الرئيسية</a>
                </div>
            </div>
        </div>
        <div class="col-span-2 py-20 px-32">
            <div class="relative">
                <div class="font-cairo">
                    <h2 class="font-bold text-3xl/[60px]">إنشاء إمتحان :</h2>
                    <p class="text-base/[30px] text-slate-600">تصميم اختبار لتقييم الطلاب بشكل عادل ومنهجي</p>
                </div>
                <div class="font-cairo mt-6">
                    <form method="POST" action="/createexam">
                        @csrf
                        <div class="grid grid-cols-1 gap-y-8">
                            <div class="w-full flex flex-col">
                                <label for="teacher-name" class="font-bold text-xl text-slate-800">إسم المدرس :</label>
                                <input type="text" name="teacher_name" class="text-slate-800 border border-slate-400 bg-gray-200 outline-0 rounded py-3 px-4 mt-3" id="teacher-name" aria-label="Teacher's Name">
                            </div>
                            <div class="grid grid-cols-2 gap-x-4">
                                <div class="w-full flex flex-col">
                                    <label for="password" class="font-bold text-xl text-slate-800">كلمة السر :</label>
                                    <input type="password" name="password" class="text-slate-800 border border-slate-400 bg-gray-200 outline-0 rounded py-3 px-4 mt-3" id="password" aria-label="Password">
                                </div>
                                <div class="w-full flex flex-col">
                                    <label for="exam-title" class="font-bold text-xl text-slate-800">عنوان الإمتحان :</label>
                                    <input type="text" name="exam_title" class="text-slate-800 border border-slate-400 bg-gray-200 outline-0 rounded py-3 px-4 mt-3" id="exam-title" aria-label="Exam Title">
                                </div>
                            </div>
                            <div class="grid grid-cols-2 gap-x-4">
                                <div class="w-full flex flex-col">
                                    <label for="class-name" class="font-bold text-xl text-slate-800">إسم الشعبة :</label>
                                    <input type="text" name="class_name" class="text-slate-800 border border-slate-400 bg-gray-200 outline-0 rounded py-3 px-4 mt-3" id="class-name" aria-label="Class Name">
                                </div>
                                <div class="w-full flex flex-col">
                                    <label for="exam-link" class="font-bold text-xl text-slate-800">رابط الإمتحان :</label>
                                    <input type="url" name="exam_link" class="text-slate-800 border border-slate-400 bg-gray-200 outline-0 rounded py-3 px-4 mt-3" id="exam-link" aria-label="Exam Link">
                                </div>
                            </div>
                            <div>
                                <button type="submit" class="bg-slate-800 py-3 px-4 rounded text-white font-bold text-lg">إطلاق الإمتحان</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            @if(session('exam_created') === true)
                <div class="relative w-full text-center h-80 mt-20">
                    <div class="font-cairo w-full">
                        <h2 class="font-bold text-3xl/[60px]">أنسخ رابط الإمتحان :</h2>
                        <p class="text-base/[30px] text-slate-600"> قم بنسخ الرابط لمشاركة اختبار مع الطلاب بسهولة</p>
                        <div class="my-8 flex mx-auto w-4/5">
                            <input readonly type="text" name="code_name" value="{{ session('exam_encode') }}" class="text-slate-800 w-full border border-slate-400 bg-gray-200 outline-0 rounded py-3 px-4 mx-1" id="codeInput">
                            <button onclick="copy()" class="bg-slate-800 mx-1 py-3 border-0 px-4 rounded text-white font-bold text-lg">نسخ</button>
                        </div>
                        <a class="w-32 p-2 font-cairo text-white rounded bg-blue-700" href="/statistics/{{ session('prof_id') }}/{{ session('exam_encode') }}">المراقبة</a>
                    </div>
                </div>
            @endif
        </div>
    </div>
    <script>
        function copy(){
            var copyText = document.getElementById("codeInput");
            copyText.select();
            navigator.clipboard.writeText(copyText.value);
        }
    </script>
</body>
</html>
