//Código de funcionamiento del banner de ofertas
let video = document.getElementById("video");
video.controls = false;
video.muted = true;
document.addEventListener("DOMContentLoaded", (ev) => {
    if (video.paused)
        video.play();
})