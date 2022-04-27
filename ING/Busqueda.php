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
      </div>
      <div style="display: block; padding: 0% 20%;">
        <table class="styled-table">
          <thead>
            <tr>
              <th>ID</th>
              <th>Nombre</th>
              <th>Trabajo</th>
              <th>Sueldo</th>
            </tr>
          </thead>
          <tbody>
            <?php
              $con = mysqli_connect("localhost", "root", "", "usuarioing");
              if(isset($_GET['area'])){
                $filtervalue = $_GET['area'];
                $query = "SELECT * FROM trabajadores WHERE Area LIKE '%$filtervalue%'";
                $query_run = mysqli_query($con, $query);
                if(mysqli_num_rows($query_run) > 0){
                  foreach($query_run as $items){
            ?>
            <tr class="active-row">
              <td><?= $items['id']; ?></td>
              <td><?= $items['Nombre']; ?></td>
              <td><?= $items['Area']; ?></td>
              <td><?= $items['Sueldo']; ?></td>
              <td><a id="toggle">Editar</a>
              <a href="php/process.php?delete=<?php echo $items['id']; ?>">Borrar</a></td>
            </tr>
            <?php
                }
                }else{
                  ?>
                  <tr><td colspan="4">No hay naiden</td></tr>
                  <?php
                }
              }else if(isset($_GET['nombre'])){
                $filtervalue = $_GET['nombre'];
                $query = "SELECT * FROM trabajadores WHERE Nombre LIKE '%$filtervalue%'";
                $query_run = mysqli_query($con, $query);
                if(mysqli_num_rows($query_run) > 0){
                  foreach($query_run as $items){
            ?>
            <tr class="active-row">
              <td><?= $items['id']; ?></td>
              <td><?= $items['Nombre']; ?></td>
              <td><?= $items['Area']; ?></td>
              <td><?= $items['Sueldo']; ?></td>
              <td><a id="toggle">Editar</a>
              <a href="php/process.php?delete=<?php echo $items['id']; ?>">Borrar</a></td>
            </tr>
            <?php
                  }
                }else{
                  ?>
                  <tr><td colspan="4">No hay naiden</td></tr>
                  <?php
                }
              }
            ?>
          </tbody>
        </table>
      </div>
      <div id="add" style="margin: 0% 25%; text-align: center; display:none;">
            <?php require_once 'php/process.php';?>
            <form action="php/process.php" method="POST">
                Agregar empleado<br>
                <input type="text" style="display:none;" value="<?php echo $items['id'];?>" name="id"><br>
                <input type="text" autocomplete="off" value="<?php echo $items['Nombre'];?>" name="nombreADD"><br>
                <input type="text" autocomplete="off" value="<?php echo $items['Area'];?>" name="areaADD"><br>
                <input type="text" autocomplete="off" value="<?php echo $items['Sueldo'];?>" name="sueldoADD"><br>
                <button type="submit" name="edit">Guardar datos</button>
            </form>
        </div>
      <script>
    const targetDiv = document.getElementById("add");
    const btn = document.getElementById("toggle");
    btn.onclick = function () {
      if (targetDiv.style.display !== "block") {
        targetDiv.style.display = "block";
      } else {
        targetDiv.style.display = "none";
      }
    };
  </script>

      <div class="information">
      </div>
      </div>
    </div><link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <!-- partial -->
    </body>
</html>

