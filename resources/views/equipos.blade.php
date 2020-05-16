@include('navbar')
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>SYSMIC</title>
    <link href="https://fonts.googleapis.com/css2?family=Jura:wght@600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/equipos.css">
  </head>
  <body>
<h1>Equipos</h1>
<div class="texto">
  <p> <ion-icon size="large" name="alert-circle-outline"></ion-icon> Antes de realizar una reserva revisa nuestros <a href="requisitos"> REQUISITOS</a> para poder asegurarte que cumplas con todo lo necesario <ion-icon size="large" name="alert-circle-outline"></ion-icon> </p>
</div>
<div class="productos">
  <div class="row">
    <div class="col-sm-12 col-md-6">
    <div class="card" style="">
      <img class="card-img-top" src="img/parlanteZLX15front.png" class="">
      <div class="card-body">
        <h5 class="card-title">Parlante ZLX 15"</h5>
        <p class="card-text">Extiende el rango en graves con esta planta de energía portátil. Ofrece agudos limpios y brillantes, así como bajos sólidos y profundos para espacios más grandes.</p>
        <p class="precio">Precio x unidad: $1400</p>
      </div>
      </div>
    </div>
    <div class="col-sm-12 col-md-6">
  <div class="cardsub" style="">
    <img class="card-img-topsub" src="img/subwooferEKX18front.png" class="">
    <div class="card-body">
      <h5 class="card-title">Subwoofer EKX 18</h5>
      <p class="card-text">Subwoofer activo de 18" pulgadas con amplificador. Es el nuevo miembro de la familia de altavoces portátiles combina la legendaria calidad de sonido y fiabilidad de EV con las últimas tecnologías, todo en un paquete compacto adecuado para una amplia gama de escenarios de refuerzo sonoro.</p>
      <p class="precio">Precio x unidad: $1800</p>
    </div>
  </div>
</div>
</div>
</div>
 <div class="combos">
   <br>
   <h1>Combos</h1>
   <div class="row">
     <div class="col-sm-12 col-md-6">
     <div class="preciocombo1">
       <img class="combo1img" src="img/combo2parlantes.png">
       <p>COMBO  2 Parlantes ZLX 15 = $2800 </p>
     </div>
     </div>
     <div class="col-sm-12 col-md-6">
     <div class="preciocombo1">
       <img class="combo1img" src="img/combo4parlantes.png">
       <p>COMBO  4 Parlantes ZLX 15  = $5500 </p>
     </div>
     </div>
     <div class="col-sm-12 col-md-6">
   <div class="preciocombo1">
     <img class="combo1img" src="img/combo1.png">
     <p>COMBO  2 Parlantes ZLX 15 + Subwoofer EKX 18 = $4500 </p>
   </div>
   </div>
   <div class="col-sm-12 col-md-6">
   <div class="preciocombo2">
     <img class="combo2img" src="img/combo2.png">
     <p>COMBO  4 Parlantes ZLX 15 + Subwoofer EKX 18 = $7000 </p>
   </div>
   </div>
 </div>
</div>

</div>

@include('footer')
  </body>
  <script src="https://unpkg.com/ionicons@5.0.0/dist/ionicons.js"></script>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</html>
