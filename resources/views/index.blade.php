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
    <div class="absolute dir-rtl top-0 left-0 w-full h-full">
        <div class="relative w-full overflow-hidden h-full bg-slate-950">
            <svg xmlns="http://www.w3.org/2000/svg" class="absolute w-3/4 -top-40 z-0" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev/svgjs" viewBox="0 0 800 800" opacity="0.79"><defs><filter id="bbblurry-filter" x="-100%" y="-100%" width="400%" height="400%" filterUnits="objectBoundingBox" primitiveUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                <feGaussianBlur stdDeviation="68" x="0%" y="0%" width="100%" height="100%" in="SourceGraphic" edgeMode="none" result="blur"></feGaussianBlur></filter></defs><g filter="url(#bbblurry-filter)"><ellipse rx="101" ry="102.5" cx="285.95719081068967" cy="358.5428563652985" fill="hsl(37, 99%, 67%)"></ellipse><ellipse rx="101" ry="102.5" cx="479.1362331815619" cy="278.2338229707817" fill="hsl(316, 73%, 52%)"></ellipse><ellipse rx="101" ry="102.5" cx="451.317841828239" cy="490.8370396803359" fill="hsl(185, 100%, 57%)"></ellipse></g>
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
            <div class="relative top-0 z-10 w-10/12 mx-auto text-center font-cairo mt-10  text-white">
                <h3 class="text-base font-bold">عند الإمتحان يعز المرء أو يهان</h3>
                <h1 class="text-5xl/[60px] mt-8 font-bold"><span class="text-colorFourth">المراقب : </span>منصة الاختبارات الذكية</h1>
                <h1 class="text-5xl/[60px] font-bold">لضمان النزاهة الأكاديمية والتميز العلمي</h1>
                <p class="text-base/[30px] mt-10">المراقب هي منصة متكاملة تتيح للأساتذة إنشاء الاختبارات ومراقبة أداء الطلاب لضمان النزاهة الأكاديمية. توفر أدوات متطورة لمتابعة سلوك الطلاب أثناء الاختبارات والكشف عن أي محاولات للغش، مما يعزز الثقة بين الطلاب والمؤسسات التعليمية ويضمن الأداء الأمثل في بيئة تعليمية نزيهة</p>
                <div class="flex mx-auto w-max mt-10">
                    <a href="/createexam">
                        <button class="rounded-full ml-1 py-3 px-8 border-2 bg-white border-colorFivth font-bold text-colorFivth">إنشاء إمتحان</button>
                    </a>
                    <a href="/passeexam">
                        <button class="rounded-full mr-1 py-3 px-8 border-2 bg-colorFivth border-colorFivth font-bold text-white">إجتياز إمتحان</button>
                    </a>
                </div>
            </div>
        </div>
        <div class="relative w-full grid grid-cols-2 ">
            <div class=" bg-amber-500 py-24 px-10 text-white font-cairo">
                <h3 class="text-base font-bold">حول منصة المراقب</h3>
                <h1 class="text-4xl/[50px] mt-8 font-bold">منصة الاختبارات الذكية</h1>
                <p class="text-lg/[30px] mt-8">منصة "المراقب" توفر حلاً متكاملاً لإدارة الاختبارات وضمان النزاهة الأكاديمية. تتيح للأساتذة إنشاء اختبارات ومراقبة سلوك الطلاب، مع أدوات متقدمة للكشف عن محاولات الغش. تعزز "المراقب" الثقة بين الطلاب والمؤسسات التعليمية وتضمن أداءً أكاديمياً نزيهاً.</p>
                <button class="group flex items-center mt-8">
                    <span class="rounded-full bg-orange-500 p-4"><svg class=" group-hover:animate-pulse fill-white w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><path d="M73 39c-14.8-9.1-33.4-9.4-48.5-.9S0 62.6 0 80V432c0 17.4 9.4 33.4 24.5 41.9s33.7 8.1 48.5-.9L361 297c14.3-8.7 23-24.2 23-41s-8.7-32.2-23-41L73 39z"/></svg></span>
                <span class="text-lg font-cairo text-white font-bold mr-3">اكتشف التميّز</span>
                </button>
            </div>
            <div class="">
                <img class="h-full grayscale-[20%]" src="https://images.unsplash.com/photo-1644055066046-054ac0fc7213?q=80&w=1471&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
            </div>
            <div class="">
                <img class="h-full grayscale-[20%]" src="https://images.unsplash.com/photo-1498243691581-b145c3f54a5a?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
            </div>
            <div class="bg-slate-800 py-24 px-10 text-white font-cairo">
                <h3 class="text-base font-bold">حول منصة المراقب</h3>
                <h1 class="text-4xl/[50px] mt-8 font-bold">منصة الاختبارات الذكية</h1>
                <p class="text-lg/[30px] mt-8">منصة "المراقب" توفر حلاً متكاملاً لإدارة الاختبارات وضمان النزاهة الأكاديمية. تتيح للأساتذة إنشاء اختبارات ومراقبة سلوك الطلاب، مع أدوات متقدمة للكشف عن محاولات الغش. تعزز "المراقب" الثقة بين الطلاب والمؤسسات التعليمية وتضمن أداءً أكاديمياً نزيهاً.</p>
                <button class="group flex items-center mt-8">
                    <span class="rounded-full bg-orange-500 p-4"><svg class=" group-hover:animate-pulse fill-white w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><path d="M73 39c-14.8-9.1-33.4-9.4-48.5-.9S0 62.6 0 80V432c0 17.4 9.4 33.4 24.5 41.9s33.7 8.1 48.5-.9L361 297c14.3-8.7 23-24.2 23-41s-8.7-32.2-23-41L73 39z"/></svg></span>
                <span class="text-lg font-cairo text-white font-bold mr-3">اكتشف التميّز</span>
                </button>
            </div>
        </div>
        <div class="h-96 bg-slate-950">
            <div class="w-full h-4/5 flex items-center text-white">
                <div class="w-11/12 mx-auto text-center ">
                    <h3 class="font-cairo w-full text-2xl sm:text-3xl font-bold">المراقب : منصة الاختبارات الذكية</h3>
                    <h3 class="font-cairo text-base sm:text-lg mt-6 w-11/12 md:w-3/5 mx-auto">
                        اكتشفوا وجودنا على منصات التواصل الاجتماعي المتنوعة، حيث نقدم محتوى مميز على قناتنا في يوتيوب. كما يُسعدنا التواصل معكم والاستماع إلى استفساراتكم عبر خدمة الواتساب
                    </h3>
                    <div class="w-max flex mx-auto mt-5">
                        <img src="img/facebook.png" class="w-6 mx-2" alt="" />
                        <img src="img/twitter.png" class="w-6 mx-2" alt="" />
                        <img src="img/linkedin.png" class="w-6 mx-2" alt="" />
                        <img src="img/whatsapp.png" class="w-6 mx-2" alt="" />
                        <img src="img/youtube.png" class="w-6 mx-2" alt="" />
                    </div>
                </div>
            </div>
            <div class="w-11/12 text-white mx-auto h-1/5 flex items-center border-t border-gray-600">
                <h5 class="font-cairo font-bold mx-auto text-xs sm:text-sm text-center">
                © 2024 - كل الحقوق محفوظة <a class="underline" href="https://www.linkedin.com/in/mostapha-el-kaddaoui/">لمطور الموقع </a>
                </h5>
            </div>
        </div>
    </div>
</body>
</html>
