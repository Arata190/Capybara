const videos = document.querySelectorAll('.img2');

videos.forEach(video => {
    let timeoutId;

    video.addEventListener('mouseenter', () => {

        timeoutId = setTimeout(() => {
            video.play();
        }, 1000);
    });

    video.addEventListener('mouseleave', () => {

        clearTimeout(timeoutId);
        video.pause();
    });
});



function selectDescripcion(descripcion) {
    localStorage.setItem('selectedDescripcion', descripcion);
    window.location.href = 'video.html';
}

const descripcionVideo = localStorage.getItem('selectedDescripcion');
            if (descripcionVideo) {
                const descripcionSource = document.getElementById('descripcionSource');
                descripcionSource.innerText = descripcionVideo;
                document.getElementById('descripcionPlayer').load();
            }