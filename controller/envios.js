let currentIndex = 0;
const images = document.querySelectorAll('.carousel img');
const totalImages = images.length;



function nextImage() {
    currentIndex = (currentIndex + 1) % totalImages;
    showImage(currentIndex);
}

function prevImage() {
    currentIndex = (currentIndex - 1 + totalImages) % totalImages;
    showImage(currentIndex);
}

const selectorMetodoPago = document.getElementById('unidad-peso');
const btnSiguiente = document.getElementById('btnSiguiente');
const contenedorValidacionTarjeta = document.getElementById('contenedorValidacionTarjeta');
const mensajeExito = document.getElementById('mensajeExito');
const btnContinuar = document.getElementById('btnContinuar');
const botonEnviar = document.getElementById('botonEnviar');

selectorMetodoPago.addEventListener('change', function() {
  const metodoPagoSeleccionado = this.value;

  if (metodoPagoSeleccionado === 'c.c') {
    contenedorValidacionTarjeta.style.display = 'block';
    btnSiguiente.textContent = 'Validar';
    btnSiguiente.setAttribute('href', '#'); // Evitar la redirección temporal
    botonEnviar.style.display = 'none';
    mensajeExito.style.display = 'none';
  } else {
    contenedorValidacionTarjeta.style.display = 'none';
    btnSiguiente.textContent = 'Enviar';
    btnSiguiente.setAttribute('href', 'validacion'); // Redireccionar a la página de validación
    botonEnviar.style.display = 'block';
    mensajeExito.style.display = 'none';
  }
});

const formTarjetaCredito = document.getElementById('formTarjetaCredito');

formTarjetaCredito.addEventListener('submit', function(event) {
  event.preventDefault(); // Evitar el envío predeterminado del formulario

  // Validar datos de la tarjeta de crédito (implementar la lógica de validación)
  // Si la validación es exitosa:
  contenedorValidacionTarjeta.style.display = 'none';
  mensajeExito.style.display = 'block';
});

btnContinuar.addEventListener('click', function() {
  // Implementar la acción para ir a la siguiente vista (redirección o JavaScript)
  // console.log('Ir a la siguiente vista');
});


