function sendwhatsapp() {
  var phonenumber = "56950566018"; // Número sin el símbolo '+'
  var name = document.querySelector(".name").value;
  var email = document.querySelector(".email").value;
  var message = document.querySelector(".message").value;

  // Validación básica
  if (!name || !message || !email) {
    alert('Por favor, complete los campos requeridos.');
    return;
  }

  // Formatear URL para WhatsApp
  var url = "https://wa.me/" + phonenumber + "?text="
    + "*Nombre :* " + encodeURIComponent(name) + "%0a"
    + "*Email :* " + encodeURIComponent(email) + "%0a"
    + "*Mensaje :* " + encodeURIComponent(message) + "%0a%0a"
    + "Lo contactamos desde el sitio web.";

  // Abrir WhatsApp con el mensaje
  window.open(url, '_blank').focus();

  // Reiniciar los campos del formulario
  document.querySelector('form').reset();
}
