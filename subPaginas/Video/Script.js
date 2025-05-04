


function selectVideo(video) {
    localStorage.setItem('selectedVideo', video);
    window.location.href = 'video.html';
}

const videoFile = localStorage.getItem('selectedVideo');
            if (videoFile) {
                const videoSource = document.getElementById('videoSource');
                videoSource.src = videoFile;
                document.getElementById('videoPlayer').load();
            }




function selectTitulo(titulo) {
    localStorage.setItem('selectedTitulo', titulo);
    window.location.href = 'video.html';
}

const tituloVideo = localStorage.getItem('selectedTitulo');
            if (tituloVideo) {
                const TituloSource = document.getElementById('TituloSource');
                TituloSource.textContent = tituloVideo;
                document.getElementById('TituloPlayer').load();
            }