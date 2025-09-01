<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Cairo:wght@500&display=swap">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="https://cdn.jsdelivr.net/npm/clmtrackr@1.1.2/build/clmtrackr.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="{{ asset('js/face-geometry-calculs.js') }}"></script>
    <title>Exam clm Platform</title>
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
    <style>
        .mod {
            margin: 0;
            padding: 0;
            width: 100vw;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            display
        }

        canvas {
            position: absolute;
        }
    </style>
</head>
<body>
    <div class="absolute bg-slate-950 min-h-full dir-rtl top-0 left-0 w-full">
        <div class="relative text-white z-10 w-10/12 mx-auto h-40 flex justify-between items-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="fill-colorFourth w-16" viewBox="0 0 640 512">
                <path d="M320 32c-8.1 0-16.1 1.4-23.7 4.1L15.8 137.4C6.3 140.9 0 149.9 0 160s6.3 19.1 15.8 22.6l57.9 20.9C57.3 229.3 48 259.8 48 291.9v28.1c0 28.4-10.8 57.7-22.3 80.8c-6.5 13-13.9 25.8-22.5 37.6C0 442.7-.9 448.3 .9 453.4s6 8.9 11.2 10.2l64 16c4.2 1.1 8.7 .3 12.4-2s6.3-6.1 7.1-10.4c8.6-42.8 4.3-81.2-2.1-108.7C90.3 344.3 86 329.8 80 316.5V291.9c0-30.2 10.2-58.7 27.9-81.5c12.9-15.5 29.6-28 49.2-35.7l157-61.7c8.2-3.2 17.5 .8 20.7 9s-.8 17.5-9 20.7l-157 61.7c-12.4 4.9-23.3 12.4-32.2 21.6l159.6 57.6c7.6 2.7 15.6 4.1 23.7 4.1s16.1-1.4 23.7-4.1L624.2 182.6c9.5-3.4 15.8-12.5 15.8-22.6s-6.3-19.1-15.8-22.6L343.7 36.1C336.1 33.4 328.1 32 320 32zM128 408c0 35.3 86 72 192 72s192-36.7 192-72L496.7 262.6 354.5 314c-11.1 4-22.8 6-34.5 6s-23.5-2-34.5-6L143.3 262.6 128 408z"/>
            </svg>
            <ul class="flex font-cairo text-base font-bold">
                <li class="mx-4">الرئيسية</li>
                <li class="mx-4">المتجر</li>
                <li class="mx-4">تجدون عندنا</li>
                <li class="mx-4">من نحن</li>
                <li class="mx-4">اكتشف التميّز</li>
            </ul>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" class="absolute w-3/4 -top-40 -left-40 z-0" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev/svgjs" viewBox="0 0 800 800" opacity="0.79">
            <defs>
                <filter id="bbblurry-filter" x="-100%" y="-100%" width="400%" height="400%" filterUnits="objectBoundingBox" primitiveUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                    <feGaussianBlur stdDeviation="68" x="0%" y="0%" width="100%" height="100%" in="SourceGraphic" edgeMode="none" result="blur"></feGaussianBlur>
                </filter>
            </defs>
            <g filter="url(#bbblurry-filter)">
                <ellipse rx="101" ry="102.5" cx="285.95719081068967" cy="358.5428563652985" fill="hsl(37, 99%, 67%)"></ellipse>
                <ellipse rx="101" ry="102.5" cx="479.1362331815619" cy="278.2338229707817" fill="hsl(316, 73%, 52%)"></ellipse>
                <ellipse rx="101" ry="102.5" cx="451.317841828239" cy="490.8370396803359" fill="hsl(185, 100%, 57%)"></ellipse>
            </g>
        </svg>
        <div id="iframe-container" class="relative z-10 w-full pt-10 pb-20">
            <div class="w-10/12 mx-auto mb-8 flex-col">
                <div class="flex">
                    <span class="font-cairo text-xl flex ml-10 py-4">
                        <h4 class="text-white font-bold ml-2">الإسم الكامل : </h4>
                        <h4 class="text-slate-100">{{$first_name}} {{$last_name}}</h4>
                    </span>
                    <span class="font-cairo text-xl flex ml-10 py-4">
                        <h4 class="text-white font-bold ml-2">إسم المادة : </h4>
                        <h4 class="text-slate-100">{{$exam_title}}</h4>
                    </span>
                    <span class="font-cairo text-xl flex ml-10 py-4">
                        <h4 class="text-white font-bold ml-2">القسم : </h4>
                        <h4 class="text-slate-100">{{$class_name}}</h4>
                    </span>
                </div>
                <div class="flex">
                    <span class="font-cairo text-xl flex ml-10 py-4">
                        <h4 class="text-white font-bold ml-2">رقم القسم : </h4>
                        <h4 class="text-slate-100">{{$class_num}}</h4>
                    </span>
                    <span class="font-cairo text-xl flex ml-10 py-4">
                        <h4 class="text-white font-bold ml-2">تاريخ بدء الإمتحان : </h4>
                        <h4 class="text-slate-100">{{$date_cr}}</h4>
                    </span>
                </div>
            </div>
            <div class="w-10/12 mx-auto">
                <button id="fullscreen_button" class="bg-slate-800 mx-1 mb-6 py-3 border-0 px-4 rounded text-white font-cairo font-bold text-lg">شاشة كبيرة</button>
                <button id="finishButton" class="bg-slate-800 mx-1 mb-6 py-3 border-0 px-4 rounded text-white font-cairo font-bold text-lg">إنهاء </button>
                <iframe id="exam_iframe" src={{$exam_link}} title="" class="z-30 h-110 w-full rounded-lg border border-slate-600"></iframe>
            </div>
        </div>
        <div class="mod">
            <video id="video" width="640" height="480" autoplay muted></video>
            <canvas id="canvas" width="640" height="480"></canvas>
        </div>
        <div class="bg-slate-950 h-20 flex justify-center items-center">
            <h5 class="font-cairo font-bold text-white mx-auto text-xs sm:text-sm text-center">
            © 2024 - كل الحقوق محفوظة <a class="underline" href="https://www.linkedin.com/in/mostapha-el-kaddaoui/">لمطور الموقع </a>
            </h5>
        </div>
    </div>

    
    <script>
    
    document.addEventListener('DOMContentLoaded', function() {
        const iframe = document.getElementById('exam_iframe');
        const iframecontainer = document.getElementById('iframe-container');
        let exam=true;
        document.getElementById('finishButton').addEventListener('click', function() {
            exam=false;
        });
        document.getElementById('fullscreen_button').addEventListener('click', function() {
            const isFullscreen = document.fullscreenElement || 
                                document.mozFullScreenElement || 
                                document.webkitFullscreenElement || 
                                document.msFullscreenElement;

            if (!isFullscreen) {
                comp_memory = "Is not in Fullscreen";
                sendreq(comp_memory);
                
                if (document.documentElement.requestFullscreen) {
                    document.documentElement.requestFullscreen();
                } else if (document.documentElement.mozRequestFullScreen) {
                    document.documentElement.mozRequestFullScreen();
                } else if (document.documentElement.webkitRequestFullscreen) {
                    document.documentElement.webkitRequestFullscreen();
                } else if (document.documentElement.msRequestFullscreen) {
                    document.documentElement.msRequestFullscreen();
                }

                // Add fullscreen styles
                iframe.classList.add('fullscreenstyle');
                iframe.classList.remove('h-110');
                iframe.classList.add('h-full');
                iframecontainer.classList.remove('relative');
            }
        });

        // Handle fullscreen change events to adjust iframe styles
        function handleFullscreenChange() {
            const isFullscreen = document.fullscreenElement || 
                                document.mozFullScreenElement || 
                                document.webkitFullscreenElement || 
                                document.msFullscreenElement;

            if (isFullscreen) {
                comp_memory = "Is in Fullscreen";
                sendreq(comp_memory);
                iframe.classList.add('fullscreenstyle');
                iframe.classList.remove('h-110');
                iframe.classList.add('h-full');
                iframecontainer.classList.remove('relative');
            } else {
                comp_memory = "Exited Fullscreen";
                sendreq(comp_memory);
                iframe.classList.remove('fullscreenstyle');
                iframe.classList.add('h-110');
                iframe.classList.remove('h-full');
                iframecontainer.classList.add('relative');
            }
        }

        document.addEventListener('fullscreenchange', handleFullscreenChange);
        document.addEventListener('mozfullscreenchange', handleFullscreenChange);
        document.addEventListener('webkitfullscreenchange', handleFullscreenChange);
        document.addEventListener('msfullscreenchange', handleFullscreenChange);

   

    let comp_memory;
    window.addEventListener('blur', function() {
        comp_memory = "Leave the exam page to another page or another program";
        sendreq(comp_memory);
    });

    window.addEventListener('focus', function() {
        comp_memory = "Return to exam";
        sendreq(comp_memory);
    });



    const video = document.getElementById('video');
    const faceGeometry = new FaceGeometryCalculs();
    function startVideo() {
    navigator.mediaDevices.getUserMedia(
        { video: {} }
    ).then(stream => video.srcObject = stream)
    .catch(err => console.error(err));
    }

    startVideo();

    var ctracker = new clm.tracker();
    ctracker.init();
    ctracker.start(video);
    let reducer=0;
    function positionLoop() {
        requestAnimationFrame(positionLoop);
        var positions = ctracker.getCurrentPosition();
        if (Array.isArray(positions)) {
            if (Array.isArray(positions[27]) && Array.isArray(positions[32]) && Array.isArray(positions[33])) {

                let Eyexcenter = ((positions[27][0] + positions[32][0]) / 2);
                let Eyeycenter = ((positions[27][1] + positions[32][1]) / 2);

                let nosePositionX = positions[33][0];
                let nosePositionY = positions[33][1];

                let horizontalDirection = faceGeometry.getFaceHorizantaleDirection(Eyexcenter, nosePositionX);
                let verticalDirection = faceGeometry.getFaceVerticaleDirection(Eyeycenter, nosePositionY+3);

                
                if(reducer>3){
                    if(exam){
                        sendreq(horizontalDirection + ' ' + verticalDirection);
                    }
                    reducer=0;
                }
                reducer++;
            }
        }
    }
    positionLoop(); 
    var canvasInput = document.getElementById('canvas');
    var cc = canvasInput.getContext('2d');

    function drawLoop() {
        requestAnimationFrame(drawLoop);
        cc.clearRect(0, 0, canvasInput.width, canvasInput.height);
        ctracker.draw(canvasInput);
    }
    drawLoop();



    
    
    function sendreq(action_to_store) {
        $.ajax({
            type: "POST",
            url: '/sendchange',
            data: { 
                first_name: "{{ $first_name }}", 
                last_name: "{{ $last_name }}",
                student_number: "{{ $class_num }}",
                student_id: "{{ $id_student }}",
                exam_code: "{{ $exam_code }}",
                exam_title: "{{ $exam_title }}",
                action: action_to_store,
                _token: $('meta[name="csrf-token"]').attr('content') // Ensure CSRF token is included
            },
            success: function (data) {
                console.log(data);
            },
            error: function (xhr, status, error) {
                console.error("AJAX Error:", status, error);
            }
        });
    }

    });
</script>

</body>
</html>