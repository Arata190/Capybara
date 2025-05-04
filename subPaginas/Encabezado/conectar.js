fetch('encabezado.php')
    .then(response => response.text())
    .then(data => {
        document.getElementById('contenido-extra').innerHTML = data;
    })
    .catch(error => console.error('Error al cargar el archivo PHP:', error));
