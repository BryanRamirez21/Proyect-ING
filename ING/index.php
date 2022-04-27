<?php
  session_start();
  if(isset($_SESSION['rol'])){
    switch($_SESSION['rol']){
      case 1:
          header('Location: ./menu_admin.php');
          break;
          case 2:
              header('Location: ./menu_recepcionista.php');
              break;
              default:
  }
}
?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Inicio | SBD</title>
  <link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Arimo' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Hind:300' rel='stylesheet' type='text/css'>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100&display=swap" rel="stylesheet">
  <link href='https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="./style.css">
  <link rel="icon" href="img/hospital.png">
</head>
<body>
<div id="login-button">
  <img src="img/login-w-icon.png">
</div>
<div id="container">
  <p>
  <h1>Iniciar sesión</h1>
  <span class="close-btn" title="Close">
    <img src="https://cdn4.iconfinder.com/data/icons/miu/22/circle_close_delete_-128.png">
  </span>
  <img src="img/av1.png" alt="Avatar" class="avatar">

  <form name="contacto" method="post" action="php/IniciarSesion.php">
    <input type="text" autocomplete="off" name="username" placeholder="Usuario" required>
    <input type="password" autocomplete="off" name="contraseña" placeholder="Contraseña" required>
    <input type="submit" name = "ingresar" class="green" value="Ingresar">
    <input type="reset" name = "clear" class="red close-cancel" value="Volver">
</form>
</div>

</div>
<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/1.16.1/TweenMax.min.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script><script  src="js/script.js"></script>

</body>
</html>
