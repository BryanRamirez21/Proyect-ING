<?php
//declarando variables para la conexion
$servidor = "localhost"; //el servidor que utilizaremos, en este caso será el localhost
$usuario = "root";       //el usuario de la base de datos
$contraseña = "";        //la contraseña del usuario que utilizaremos
$BD         = "usuarioing";  //el nombre de la base de datos
$conexion = mysqli_connect($servidor, $usuario, $contraseña, $BD);
//Verificando la conexion
if(!$conexion){
    echo "Falló la conexión <br>";
    die("Conexión failed".mysqli_connect_error());
}
/*else{
    echo "Conexión exitosa";
}*/
?>