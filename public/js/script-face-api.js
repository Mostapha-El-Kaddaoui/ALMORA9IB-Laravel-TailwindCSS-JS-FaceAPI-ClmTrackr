const video = document.getElementById('video');
const faceGeometry = new FaceGeometryCalculs();

faceGeometry.loadModels();

function startVideo() {
  navigator.mediaDevices.getUserMedia(
    { video: {} }
  ).then(stream => video.srcObject = stream)
  .catch(err => console.error(err));
}
