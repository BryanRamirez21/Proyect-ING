<?php
    include("php/conexion.php");// el include es para llamar a un archivo
    include("php/validarSesion.php");
    if(!isset($_SESSION['rol'])){
        header('Location: index.php');
    }else{
        if($_SESSION['rol'] != 1){
            header('Location: index.php');
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Administrador | SBD</title>
        <link rel="stylesheet" href="./estilo.css">
        <link rel="icon" href="img/hospital.png">
        <style>
        </style>
    </head>
    <body>
    <div class="container">
    <div class="tutorial">
    <ul>
      <div style="font-size:40px; float: left; color: white;padding-top: 15px; margin-right: 15px;">Inicio administrador</div>
        <li><a href="php/cerrarSesion.php">Cerrar sesión </a></li>
      </ul>
      <div class="slider">
        <br>
        <h2>Nóminas - Empresa</h2>
        <br>
        <img src="img/empresa.jpg" alt="Hospital" class="hosImg">
        <div style="margin: 0% 25%; text-align: center;">
            <form action="Busqueda.php" method="GET">
                Buscar por nombre
                <input type="text" autocomplete="off" name="nombre">
                <input type="submit" name = "submit" class="green" value="->" style="width: 30px">
                <br>
            </form>
            <form action="Busqueda.php" method="GET">
                Buscar por area
                <input type="text" autocomplete="off" name="area">
                <input type="submit" name = "submit" class="green" value="->" style="width: 30px">
            </form>
            <br>
            <?php require_once 'php/process.php'?>
            <form action="php/process.php" method="POST">
                Agregar empleado<br>
                <input type="text" autocomplete="off" placeholder="Nombre del empleado" name="nombreADD"><br>
                <input type="text" autocomplete="off" placeholder="Area del empleado" name="areaADD"><br>
                <input type="text" autocomplete="off" placeholder="Sueldo del empleado" name="sueldoADD"><br>
                <button type="submit" name="save">Guardar datos</button>
            </form>
        </div>
        <br>
      </div>
      <div class="information">
      </div>
      </div>
    </div><link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <!-- partial -->
    </body>
</html>

