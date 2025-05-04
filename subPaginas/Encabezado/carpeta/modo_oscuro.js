const btnSwitch = document.querySelector('#switch');

btnSwitch.addEventListener('click', () => {
    // Cambia el tema
    document.body.classList.toggle('dark');

    // Cambia la apariencia del botón
    btnSwitch.classList.toggle('active');

    // Guarda la preferencia
    const modoOscuroActivado = document.body.classList.contains('dark');
    localStorage.setItem('modoOscuro', modoOscuroActivado);
});

// Al cargar la página, aplicar modo oscuro si estaba activado
if (localStorage.getItem('modoOscuro') === 'true') {
    document.body.classList.add('dark');
    btnSwitch.classList.add('active');
}
