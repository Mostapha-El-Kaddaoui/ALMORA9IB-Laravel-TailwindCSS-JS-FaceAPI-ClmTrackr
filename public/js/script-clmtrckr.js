const video = document.getElementById('video');
const FaceGeometry = new FaceGeometryCalculs();
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
function positionLoop() {
    requestAnimationFrame(positionLoop);
    var positions = ctracker.getCurrentPosition();
    FaceGeometry.getEyesmovments([positions[37],positions[21],positions[7]]);
    FaceGeometry.getOrder()
}
positionLoop(); 
var canvasInput = document.getElementById('drawCanvas');
var cc = canvasInput.getContext('2d');

function drawLoop() {
    requestAnimationFrame(drawLoop);
    cc.clearRect(0, 0, canvasInput.width, canvasInput.height);
    ctracker.draw(canvasInput);
}
drawLoop();