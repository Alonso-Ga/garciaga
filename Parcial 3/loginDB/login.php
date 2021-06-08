<?php
session_start();
if (isset($_SESSION['usuario'])) { 
    header("location: bienvenida.php");
}
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <!-- <link rel="stylesheet" href="css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!-- Style -->
    <link rel="stylesheet" href="css/estilos.css">

    <title>Login</title>
  </head>
  <body>
  <div class="d-lg-flex half">
    <div class="bg order-1 order-md-2" style="background-image: url('images/tokyo.jpg');"></div>
    <div class="contents order-2 order-md-1">

      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-7">
            <h3>Login to <strong>Foursquare</strong></h3>
            <p class="mb-4">Life is GOOD</p>
            <form action="login_usuario.php" method="POST">
              <div class="form-group first">
                <label for="username">Usuario</label>
                <input type="text" class="form-control"  id="usuario" name="usuario">
              </div>
              <div class="form-group last mb-3">
                <label for="password">Contraseña</label>
                <input type="password" class="form-control"  id="contraseña" name="contraseña">
              </div>
              
              <div class="d-flex mb-5 align-items-center">
                <label class="control control--checkbox mb-0"><span class="caption">Recordarme</span>
                  <input type="checkbox" checked="checked"/>
                  <div class="control__indicator"></div>
                </label>
                <span class="ml-auto"><a href="#" class="forgot-pass">No recuerdo mi contraseña</a></span> 
              </div>
<button class="btn btn-block btn-primary">Enviar</button>
           </form>
          </div>
        </div>
      </div>
    </div>
    <!-- Modal -->
<div class="modal fade" id="Modal" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Foursquare</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body" align="center">
        <!--<p>Bienvenido</p>
        <p>Sesion Iniciada Correctamente!</p>-->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" id="btnClose" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div> 
  </div>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>