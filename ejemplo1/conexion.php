<?php
include_once("cn.php");

//$conexion = mysqli_connect('localhost','root','','prueba')
//or die(mysql_error($mysqli));

bifur($conexion);

function bifur($conexion){
    if(isset($_POST['enviar'])){
        insertar($conexion);
    }


}

function insertar($conexio){
    $nombre = $_POST['nom'];
    $apellido = $_POST['ape'];

    $consulta = "INSERT INTO usuario(nombre,apellido)
    VALUES ('$nombre', '$apellido')";

    mysqli_query($conexio,$consulta);
    mysqli_close($conexio);
}

?>