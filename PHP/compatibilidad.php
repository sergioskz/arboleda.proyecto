<?php session_start(); 
$R1 = $_REQUEST['R1'];
$R2 = $_REQUEST['R2'];
$R3 = $_REQUEST['R3'];
$R4 = $_REQUEST['R4'];
$R5 = $_REQUEST['R5'];
$R6 = $_REQUEST['R6'];
$R7 = $_REQUEST['R7'];
$R8 = $_REQUEST['R8'];
$R9 = $_REQUEST['R9'];
$R10 = $_REQUEST['R10'];
$id = $_SESSION['ID'];
$conexion = mysql_connect('localhost', 'root', '', 'tfg') or die ("Error en la identificacion del usuario");
$consulta = "insert into amc_compa(id,R1,R2,R3,R4,R5,R6,R7,R8,R9,R10) values ('$id','$R1','$R2','$R3','$R4','$R5','$R6','$R7','$R8','$R9','$R10')";
mysqli_query($conexion,$consulta) or die(mysqli_error($conexion));
echo "Tu formulario se ha rellenado correctamente";        
?>