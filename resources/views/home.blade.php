@include('navbar')
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>SYSMIC</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Jura:wght@600&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/home.css">
  </head>
  <body>
<div class="contenedor">
  <div class="quienesomos">
    <h1>¿Quiénes somos?</h1>
    <p>Nos encargamos de alquilar equipos de sonido, asesoramiento y armado integral para cualquier tipo de evento.
    Contamos con equipos de primera línea, marca Electrovoice, reconocida a nivel mundial.
    Gracias a nuestra experiencia en armado de eventos brindamos soluciones
    rápida y efectivamente, además de flexibilidad en el retiro y entrega de los
    equipos.</p>
  </div>
  <div class="carrusel mt-5 w-70 mb-5 p-2">
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block mx-auto" src="img/carrusel1.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block mx-auto" src="img/carrusel2.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block mx-auto" src="img/carrusel3.jpg" alt="Third slide">
    </div>
    <div class="carousel-item">
      <img class="d-block mx-auto" src="img/carrusel4.jpg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>
<div class="pasos">
  <h1>¿Como hago mi reserva?</h1>
  <ul class="listapasos">
    <li><a href="equipos"> Mira nuestros equipos y  elegi tu combo</a></li>
    <li><a href="requisitos"> Revisa nuestros REQUISITOS</a></li>
    <li><a href="contacto"> Contactate con nosotros para completar tu reserva</a></li>
  </ul>
</div>
</div>
@include('footer')
</body>
<script src="https://unpkg.com/ionicons@5.0.0/dist/ionicons.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</html>
