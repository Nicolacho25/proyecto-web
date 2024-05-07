document.addEventListener("DOMContentLoaded", function() {
  // Obtiene los elementos de los encabezados
  const header1 = document.querySelector("header1");
  const header2 = document.querySelector("header2");

  // Inicialmente, oculta el header2 y muestra el header1
  header1.style.display = "block";
  header2.style.display = "none";

  // Agrega eventos de envío a los formularios
  document.getElementById("loginForm").addEventListener("submit", function(event) {
      // Evita el envío predeterminado del formulario
      event.preventDefault();
      // Muestra el header2 y oculta el header1
      header1.style.display = "none";
      header2.style.display = "block";
  });

  document.getElementById("registerForm").addEventListener("submit", function(event) {
      // Evita el envío predeterminado del formulario
      event.preventDefault();
      // Muestra el header2 y oculta el header1
      header1.style.display = "none";
      header2.style.display = "block";
  });
});