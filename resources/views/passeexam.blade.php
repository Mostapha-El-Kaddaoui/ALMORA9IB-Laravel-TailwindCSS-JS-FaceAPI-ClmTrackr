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
        <div class="col-span-2 py-24 px-32">
            <div class="font-cairo">
                <h2 class="font-bold text-3xl/[60px]">إجتياز إمتحان :</h2>
                <p class="text-base/[30px] text-slate-600">إجتياز امتحان بنزاهة: استراتيجيات لضمان الشفافية والعدالة في تقييم الطلاب</p>
            </div>
            <div class="font-cairo mt-6">
                <form method="POST"  action="/passeexam">
                    @csrf
                    <div class="grid grid-cols-1 gap-4">
                        <div class="w-full flex flex-col">
                            <label for="first-name" class="font-bold text-xl text-slate-800">الإسم الأول :</label>
                            <input type="text" name="first_name" class="text-slate-800 border border-slate-400 bg-gray-200 outline-0 rounded py-3 px-4 mt-3" id="first-name" aria-label="First Name">
                        </div>
                        <div class="w-full flex flex-col">
                            <label for="last-name" class="font-bold text-xl text-slate-800">الإسم الثاني :</label>
                            <input type="text" name="last_name" class="text-slate-800 border border-slate-400 bg-gray-200 outline-0 rounded py-3 px-4 mt-3" id="last-name" aria-label="Last Name">
                        </div>
                        <div class="grid grid-cols-3 gap-x-4">
                            <div class="w-full flex flex-col">
                                <label for="class-number" class="font-bold text-xl text-slate-800">رقم القسم :</label>
                                <input type="text" name="class_number" class="text-slate-800 border border-slate-400 bg-gray-200 outline-0 rounded py-3 px-4 mt-3" id="class-number" aria-label="Class Number">
                            </div>
                            <div class="w-full flex flex-col">
                                <label for="class-name" class="font-bold text-xl text-slate-800">إسم الشعبة :</label>
                                <input type="text" name="class_name" class="text-slate-800 border border-slate-400 bg-gray-200 outline-0 rounded py-3 px-4 mt-3" id="class-name" aria-label="Class Name">
                            </div>
                            <div class="w-full flex flex-col">
                                <label for="exam-link" class="font-bold text-xl text-slate-800">رمز الإمتحان :</label>
                                <input type="text" name="exam_code" class="text-slate-800 border border-slate-400 bg-gray-200 outline-0 rounded py-3 px-4 mt-3" id="exam-link" aria-label="Exam Link">
                            </div>
                        </div>
                        <div>
                            <button type="submit" class="bg-slate-800 py-3 px-4 rounded text-white font-bold text-lg mt-3">إجتياز الإمتحان</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="bg-slate-900">
            <div class="px-10 py-20">
                <div class="flex items-center font-cairo font-bold text-white text-3xl">
                    <svg xmlns="http://www.w3.org/2000/svg" class="fill-white w-14 ml-5" viewBox="0 0 640 512">
                        <path d="M320 32c-8.1 0-16.1 1.4-23.7 4.1L15.8 137.4C6.3 140.9 0 149.9 0 160s6.3 19.1 15.8 22.6l57.9 20.9C57.3 229.3 48 259.8 48 291.9v28.1c0 28.4-10.8 57.7-22.3 80.8c-6.5 13-13.9 25.8-22.5 37.6C0 442.7-.9 448.3 .9 453.4s6 8.9 11.2 10.2l64 16c4.2 1.1 8.7 .3 12.4-2s6.3-6.1 7.1-10.4c8.6-42.8 4.3-81.2-2.1-108.7C90.3 344.3 86 329.8 80 316.5V291.9c0-30.2 10.2-58.7 27.9-81.5c12.9-15.5 29.6-28 49.2-35.7l157-61.7c8.2-3.2 17.5 .8 20.7 9s-.8 17.5-9 20.7l-157 61.7c-12.4 4.9-23.3 12.4-32.2 21.6l159.6 57.6c7.6 2.7 15.6 4.1 23.7 4.1s16.1-1.4 23.7-4.1L624.2 182.6c9.5-3.4 15.8-12.5 15.8-22.6s-6.3-19.1-15.8-22.6L343.7 36.1C336.1 33.4 328.1 32 320 32zM128 408c0 35.3 86 72 192 72s192-36.7 192-72L496.7 262.6 354.5 314c-11.1 4-22.8 6-34.5 6s-23.5-2-34.5-6L143.3 262.6 128 408z"/>
                    </svg>
                    <span>منصة المراقب</span>
                </div>
                <div class="py-20">
                    <h4 class="font-cairo font-bold text-2xl/[40px] text-white">إجتياز امتحان بنزاهة: استراتيجيات لضمان الشفافية والعدالة في تقييم الطلاب</h4>
                    <p class="font-cairo text-base text-slate-200 mt-4">لإجتياز امتحان بنزاهة، يجب اتباع استراتيجيات تضمن تحقيق الشفافية والعدالة. يتطلب ذلك إعداد امتحانات متنوعة وشاملة تغطي جميع جوانب المنهج، وضمان وضوح الأسئلة وتجنب التحيز. كما يجب تطبيق معايير تقييم موحدة وتوفير بيئة امتحانية آمنة.</p>
                </div>
                <div class="">
                    <a href="/" class="text-white text-base font-cairo underline">العودة للصفحة الرئيسية</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
