@include('navbar')
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link href="https://fonts.googleapis.com/css?family=Julius+Sans+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/contacto.css">
  </head>
  <body>
    <h3>Dejanos tu mensaje</h3>
    <div id="form-main">
      <div id="form-div">
        <form class="form" id="form1"action={{route('contact')}} method="POST">
          {{ csrf_field() }}
          <p class="nombre">
            <input name="name" type="text" class="validate[required,custom[onlyLetter],length[0,100]] feedback-input" placeholder="Nombre" id="nombre" />
          </p>

          <p class="email">
            <input name="email" type="text" class="validate[required,custom[email]] feedback-input" id="email" placeholder="Email" />
          </p>
          <p class="celular">
            <input name="celular" type="text" class="feedback-input" id="celular" placeholder="Celular" />
          </p>

          <p class="text">
            <textarea name="msg" class="validate[required,length[6,300]] feedback-input" id="mensaje" placeholder=""></textarea>
          </p>


          <div class="enviar">
            <input type="submit" value="ENVIAR" id="boton"/>
            <div class="ease"></div>
          </div>
        </form>
      </div>
      <div class="whatsapp">
        <h5>Tambien podes comunicarte por WhatsApp</h5>
        <a href="https://api.whatsapp.com/send?phone=5491130709261&text=&source=&data=&app_absent="><img src="../img/pngocean.com (1).png" alt=""></a>
      </div>

    </div>
    @include('footer')
  </body>
  <script src="https://unpkg.com/ionicons@5.0.0/dist/ionicons.js"></script>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</html>
