<?php
session_start();
$id = $_SESSION['ID'];
$foto = $_FILES['foto']['name'];
$foto = $id."_".$foto;
$ruta = "Imagenes/" . $foto;

$resultado = @move_uploaded_file($_FILES["foto"]["tmp_name"], $ruta);
$conexion = mysqli_connect('localhost', 'root', '', 'tfg') or die ("Error en la identificacion del usuario");
$consulta = "UPDATE datos_personales set foto = '$foto' where id = '$id'";
mysqli_query($conexion,$consulta) or die(mysqli_error($conexion));
header("Location:".$_SERVER['HTTP_REFERER']);  
?>