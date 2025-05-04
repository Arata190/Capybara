const botonesAbrir = document.querySelectorAll('.abrir-modal');
const modal = document.getElementById('mi-modal');
const cerrarBtn = document.getElementById('cerrar-modal');

let botonActivo = null; // aquí guardamos el último botón que abrió el modal

botonesAbrir.forEach(boton => {
  boton.onclick = function() {
    if (modal.style.display === "block" && botonActivo === boton) {
      // Si ya estaba abierto y es el mismo botón, lo cerramos
      modal.style.display = "none";
      botonActivo = null; // reseteamos
    } else {
      // Si no, abrimos el modal y actualizamos el botón activo
      const rect = boton.getBoundingClientRect();
      modal.style.top = (rect.top + window.scrollY + boton.offsetHeight - 235) + "px";
      modal.style.left = (rect.left + window.scrollX - 1354) + "%";
      modal.style.display = "block";
      botonActivo = boton; // guardamos el nuevo botón activo
    }
  }
});


const video = document.getElementById('miVideo');

const observer = new IntersectionObserver(entries => {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      video.play();
    } else {
      video.pause();
    }
  });
}, { threshold: 0.5 });

observer.observe(video);


  

