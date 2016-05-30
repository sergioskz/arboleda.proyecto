<?php 
session_start();
$nick = $_REQUEST['Nick'];
$pass = $_REQUEST['Password'];  
$passC= $_REQUEST['Password2'];
$nombre = $_REQUEST['Nombre'];   
$apellidos = $_REQUEST['Apellidos'];   
$mail = $_REQUEST['Mail'];   
$localidad = $_REQUEST['Localidad'];   
$municipio = $_REQUEST['Municipio'];
$foto = "foto";
if($_REQUEST["Descripcion"]!==''){
    $descripcion = $_REQUEST["Descripcion"];
    } else {
    $descripcion = "Sobre mi";
}   
$conexion = mysqli_connect('localhost', 'root', '', 'tfg') or die ("Error en la identificacion del usuario");
$consulta = "INSERT INTO datos_personales(Nombre,Apellido,Email,Nick,Password,Localidad,Municipio,Descripcion,foto) values ('$nombre','$apellidos','$mail','$nick','$pass','$localidad','$municipio','$descripcion','$foto')";
mysqli_query($conexion,$consulta) or die(mysqli_error($conexion));
echo "Datos insertados";
?>