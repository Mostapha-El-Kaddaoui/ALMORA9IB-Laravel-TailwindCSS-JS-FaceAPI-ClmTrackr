<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Cairo:wght@500&family=Righteous&family=ABeeZee:ital@0;1&&display=swap">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <title>Statistics</title>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    spacing: {
                        '101':'500px',
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
                        'Righteous':['Righteous', 'sans-serif'],
                        'abeezee':['ABeeZee', 'sans-serif']
                    },
                }
            }
        }
    </script>
</head>
<body>
    <div class="absolute w-full dir-rtl">
        <div class="relative w-full h-101 bg-slate-950">
            <svg xmlns="http://www.w3.org/2000/svg" class="absolute h-full left-0 z-0"  version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev/svgjs" viewBox="0 0 800 800" opacity="0.58"><defs>
                <filter id="bbblurry-filter" x="-100%" y="-100%" width="400%" height="400%" filterUnits="objectBoundingBox" primitiveUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                <feGaussianBlur stdDeviation="85" x="0%" y="0%" width="100%" height="100%" in="SourceGraphic" edgeMode="none" result="blur"></feGaussianBlur></filter></defs><g filter="url(#bbblurry-filter)"><ellipse rx="144.5" ry="143.5" cx="267.40531697953475" cy="593.3019188339346" fill="hsla(273, 87%, 47%, 1.00)"></ellipse><ellipse rx="144.5" ry="143.5" cx="437.5056284675095" cy="422.25039359834796" fill="hsla(212, 81%, 60%, 1.00)"></ellipse><ellipse rx="144.5" ry="143.5" cx="188.60709181594245" cy="178.51871821306878" fill="hsla(144, 100%, 36%, 1.00)"></ellipse></g>
            </svg>
            <div class="relative top-0 z-10 w-10/12 mx-auto h-40 flex justify-between items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="fill-colorFourth w-16" viewBox="0 0 640 512"><path d="M320 32c-8.1 0-16.1 1.4-23.7 4.1L15.8 137.4C6.3 140.9 0 149.9 0 160s6.3 19.1 15.8 22.6l57.9 20.9C57.3 229.3 48 259.8 48 291.9v28.1c0 28.4-10.8 57.7-22.3 80.8c-6.5 13-13.9 25.8-22.5 37.6C0 442.7-.9 448.3 .9 453.4s6 8.9 11.2 10.2l64 16c4.2 1.1 8.7 .3 12.4-2s6.3-6.1 7.1-10.4c8.6-42.8 4.3-81.2-2.1-108.7C90.3 344.3 86 329.8 80 316.5V291.9c0-30.2 10.2-58.7 27.9-81.5c12.9-15.5 29.6-28 49.2-35.7l157-61.7c8.2-3.2 17.5 .8 20.7 9s-.8 17.5-9 20.7l-157 61.7c-12.4 4.9-23.3 12.4-32.2 21.6l159.6 57.6c7.6 2.7 15.6 4.1 23.7 4.1s16.1-1.4 23.7-4.1L624.2 182.6c9.5-3.4 15.8-12.5 15.8-22.6s-6.3-19.1-15.8-22.6L343.7 36.1C336.1 33.4 328.1 32 320 32zM128 408c0 35.3 86 72 192 72s192-36.7 192-72L496.7 262.6 354.5 314c-11.1 4-22.8 6-34.5 6s-23.5-2-34.5-6L143.3 262.6 128 408z"/></svg>
                <ul class="flex font-cairo text-base font-bold text-white">
                    <li class="mx-4">الرئيسية</li>
                    <li class="mx-4">المتجر</li>
                    <li class="mx-4">تجدون عندنا</li>
                    <li class="mx-4">من نحن</li>
                    <li class="mx-4">اكتشف التميّز</li>
                </ul>
            </div>
            <div class="relative z-10 w-10/12 mx-auto mt-4 flex justify-between items-end">
                <div>
                    <h4 class="font-cairo font-bold text-white text-4xl/[70px]">لوحة التحكم</h4>
                    <p class="font-cairo text-gray-50 text-base">المراقب هي منصة متكاملة تتيح للأساتذة إنشاء الاختبارات</p>
                </div>   
                <div class="flex">
                    <a href="/finishExam/{{$examcode}}" class="bg-amber-500 py-3 border-0 px-4 rounded text-white font-cairo font-bold text-lg">إنهاء الإمتحان </a>
                </div> 
            </div>
        </div>
        <div class="relative -top-40 w-10/12 mx-auto">
            <div class="relative overflow-x-auto sm:rounded-lg shadow-xl">
                <table class="w-full text-base text-right text-gray-500 dark:text-gray-400">
                    <thead class="text-lg dir-rtl text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400 font-cairo">
                        <tr>
                            <th scope="col" class="px-6 py-3">الإسم الكامل</th>
                            <th scope="col" class="px-6 py-3">رقم القسم</th>
                            <th scope="col" class="px-6 py-3">المادة</th>
                            <th scope="col" class="px-6 py-3">تاريخ التسجيل</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($students as $student)
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                <td scope="row" class="flex items-center px-6 py-4 text-gray-900 whitespace-nowrap dark:text-white">
                                    <img class="w-10 h-10 rounded-full" src="https://img.freepik.com/free-photo/3d-cartoon-back-school_23-2151676616.jpg?t=st=1721312202~exp=1721315802~hmac=faa6705260908fb921886ba5b8f877772ac023249efaee9bceb54f0d2d0c5019&w=740" alt="Jese image">
                                    <div class="ps-3">
                                        <div class="text-base font-semibold">{{ $student->first_name }} {{ $student->last_name }}</div>
                                        <div class="font-normal text-gray-500">{{ $student->class_name }}</div>
                                    </div>  
                                </td>
                                <td class="px-6 py-4">
                                    {{ $student->class_number }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $exam->exam_title }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $student->created_at }}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div id="charts_container" class="relative p-8 -top-20 mx-auto w-10/12 shadow-xl bg-slate-950 rounded-lg grid grid-cols-2 gap-6">
        </div>
        
        <div class="bg-slate-950 h-20 flex justify-center items-center">
            <h5 class="font-cairo font-bold text-white mx-auto text-xs sm:text-sm text-center">
            © 2024 - كل الحقوق محفوظة <a class="underline" href="https://www.linkedin.com/in/mostapha-el-kaddaoui/">لمطور الموقع </a>
            </h5>
        </div>
    </div>
    
</body>
<script>
const container = document.getElementById('charts_container');
let charts = [];
function appendchart(index,studentName,studentBranch,score,duration){
    const newDiv = document.createElement('div');
    newDiv.className = 'h-98 bg-white rounded p-5';

    const canvas = document.createElement('canvas');
    canvas.id = `Chart${index}`;
    newDiv.appendChild(canvas);
   
    const innerDiv = document.createElement('div');
    innerDiv.className = 'flex justify-between mt-5 items-center px-4';
    newDiv.appendChild(innerDiv);
    
    const infoDiv = document.createElement('div');
    infoDiv.className = 'flex-col';
    innerDiv.appendChild(infoDiv);

    const heading = document.createElement('h4');
    heading.className = 'font-cairo font-bold text-slate-950 text-2xl';
    heading.textContent = studentName;
    infoDiv.appendChild(heading);

    const para = document.createElement('p');
    para.className = 'font-cairo font-bold text-slate-500 text-lg';
    para.textContent = studentBranch;
    infoDiv.appendChild(para);

    const scoreDiv = document.createElement('div');
    scoreDiv.className = 'flex items-center';
    innerDiv.appendChild(scoreDiv);

    const scoreHeading = document.createElement('h4');
    scoreHeading.className = 'font-Righteous font-bold text-3xl text-amber-500';
    scoreHeading.textContent = score+' %' ;
    scoreHeading.id=`score${index}`;
    scoreDiv.appendChild(scoreHeading);

    const totalDuration = document.createElement('h3');
    totalDuration.className = 'font-Righteous mr-4 font-bold text-3xl text-slate-500';
    totalDuration.textContent = duration;
    totalDuration.id=`dur${index}`;
    scoreDiv.appendChild(totalDuration);
    
    container.appendChild(newDiv);

}
function updatechart(index,data,score,duration){
    const chartInstance = Chart.getChart(document.getElementById('Chart' + index));
    const scoreHeading = document.getElementById('score' + index);
    scoreHeading.textContent = score+' %' ;
    const totalDuration= document.getElementById('dur' + index);
    totalDuration.textContent = duration;
    chartInstance.data.labels = data.labels;
    chartInstance.data.datasets = data.datasets;
    chartInstance.options.animation = false;
    chartInstance.update();
}
function getreq() {
    $.ajax({
        type: "GET",
        url: '/getreq/{{$examcode}}',
        success: function (data) {
            data.forEach((item, index) => {
                if(!charts.includes(index)){
                    appendchart(index,item.datasets[0].Name,item.datasets[0].Branch,item.datasets[0].Score,item.datasets[0].durationOutExam);
                    const ctx = document.getElementById('Chart' + index).getContext('2d');
                    charts.push(index);
                    new Chart(ctx, {
                        type: 'bar',
                        data: {
                            labels: item.labels,
                            datasets: item.datasets
                        },
                        options: {}
                    });
                }else{
                    updatechart(index,item,item.datasets[0].Score,item.datasets[0].durationOutExam);
                }
                
            });
        },
        error: function (error) {
            console.error('Error:', error);
        }
    });
}

setInterval(getreq, 3000);



    
</script>

</html>