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
  <link rel="stylesheet" href="style.css">
  <link rel="icon" href="img/hospital.png">
  <style>
    
  </style>
</head>
<body>
<div class="center">
      <h1>Iniciar sesión</h1>
      <form name="contacto" method="post" action="php/IniciarSesion.php">
        <div class="txt_field">
          <input type="text" autocomplete="off" name="username" required>
          <span></span>
          <label>Nombre de usuario</label>
        </div>
        <div class="txt_field">
          <input type="password" autocomplete="off" name="contraseña" required>
          <span></span>
          <label>Contraseña</label>
        </div>
        <input type="submit" name = "ingresar" class="green" value="Ingresar">
      </form>
    </div>
</div>
<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/1.16.1/TweenMax.min.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script><script  src="js/script.js"></script>

</body>
</html>
