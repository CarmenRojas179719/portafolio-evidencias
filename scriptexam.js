function verificarCumple() {
    var nombre = document.getElementById("nombre").value;
    var fecha = new Date(document.getElementById("fecha").value);
    var mesActual = new Date().getMonth() + 1; 
  
    if (mesActual === fecha.getMonth() + 1) {
      document.getElementById("resultado").textContent = "¡Felicidades, " + nombre + "! Obtuviste un 2x1 en tu compra.";
      document.getElementById("imagen").style.display = "block";
    } else {
      document.getElementById("resultado").textContent = "Lo sentimos, " + nombre + ", No obtuviste descuento, suerte para la proxima!.";
      document.getElementById("imagen").style.display = "none";
    }
    }