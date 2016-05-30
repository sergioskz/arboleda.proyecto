<?php session_start();
$user = $_POST['fuser'];
$pass = $_POST['fpass'];
$conexion = new mysqli('localhost', 'root', '','tfg') or die ("Error en la identificacion del usuario");
$consulta = "SELECT ID,Nick,Password FROM datos_personales WHERE Nick = '$user'";
$resultado = $conexion->query($consulta);
if($resultado->num_rows === 1){
    $final = $resultado->fetch_assoc();
    $_SESSION['ID'] = $final['ID'];
    $_SESSION['nick'] = $final['Nick'];
    echo "Login completo";
} else {
    echo "Usuario o contraseña incorrectos";
}
?>