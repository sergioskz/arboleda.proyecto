<?php
session_start();
$radio = $_REQUEST['radio'];
if($_REQUEST['nombre']!=''){
    $nombre1 = $_REQUEST['nombre'];
    $nombre1 = strtolower ($nombre1);
    $nombre1 = ucwords($nombre1);
}

if($_REQUEST['ciudad']!=''){
    $ciudad = $_REQUEST['ciudad'];
    $ciudad = strtolower ($ciudad);
    $ciudad = ucwords($ciudad);
}
$conexion = new mysqli('localhost', 'root', '','tfg') or die ("Error en la identificacion del usuario");
// ************************************** Nombre y ciudad *******************************
if(isset($ciudad) && isset($nombre1)){
    $consulta = "SELECT * FROM sitiosdeinteres WHERE Localidad = '$ciudad' AND nombre LIKE '%$nombre1%' AND Tipo = '$radio' LIMIT 15";
$resultado = $conexion->query($consulta);
if($resultado->num_rows){
    echo "<table><tr>
    <th>Nombre</th>
    <th>Localidad</th>
    <th>Tipo</th>
    <th>Precio</th>
    <th>Direccion</th>
    <th>Web</th>
    <th>Valoracion</th></tr>";
while($final = $resultado->fetch_array()){
   echo "<tr>
            <td>".$final['Nombre']."</td>
            <td>".$final['Localidad']."</td>
            <td>".$final['Tipo']."</td>
            <td>".$final['Precio']."</td>
            <td>".$final['Direccion']."</td>
            <td>".$final['Web']."</td>
            <td>".$final['Valoracion']."</td>
            </tr>";
}
    echo "</table>";
} else {
    echo "No hay entradas validas";
}
// *************************** Solo por nombre ************************************
}else if(isset($nombre1)){
    $consulta = "SELECT * FROM sitiosdeinteres WHERE Nombre LIKE '%$nombre1%' AND Tipo = '$radio' LIMIT 15";
$resultado = $conexion->query($consulta);
if($resultado->num_rows){
    echo "<table><tr>
    <th>Nombre</th>
    <th>Localidad</th>
    <th>Tipo</th>
    <th>Precio</th>
    <th>Direccion</th>
    <th>Web</th>
    <th>Valoracion</th></tr>";
while($final = $resultado->fetch_array()){
   echo "<tr>
            <td>".$final['Nombre']."</td>
            <td>".$final['Localidad']."</td>
            <td>".$final['Tipo']."</td>
            <td>".$final['Precio']."</td>
            <td>".$final['Direccion']."</td>
            <td>".$final['Web']."</td>
            <td>".$final['Valoracion']."</td>
            </tr>";
}
    echo "</table>";
} else {
    echo "No hay entradas validas";
}
// ********************************* Solo cidudad **************************************
} else if(isset($ciudad)){
    $consulta = "SELECT * FROM sitiosdeinteres WHERE Localidad = '$ciudad' AND Tipo = '$radio' LIMIT 15";
$resultado = $conexion->query($consulta);
if($resultado->num_rows){
    echo "<table><tr>
    <th>Nombre</th>
    <th>Localidad</th>
    <th>Tipo</th>
    <th>Precio</th>
    <th>Direccion</th>
    <th>Web</th>
    <th>Valoracion</th></tr>";
while($final = $resultado->fetch_array()){
   echo "<tr>
            <td>".$final['Nombre']."</td>
            <td>".$final['Localidad']."</td>
            <td>".$final['Tipo']."</td>
            <td>".$final['Precio']."</td>
            <td>".$final['Direccion']."</td>
            <td>".$final['Web']."</td>
            <td>".$final['Valoracion']."</td>
            </tr>";
}
    echo "</table>";
} else {
    echo "No hay entradas validas";
}
// *********************************** Solo por tipo *****************************************
} else {
$consulta = "SELECT * FROM sitiosdeinteres WHERE Tipo = '$radio' LIMIT 15";
$resultado = $conexion->query($consulta);
if($resultado->num_rows){
    echo "<table><tr>
    <th>Nombre</th>
    <th>Localidad</th>
    <th>Tipo</th>
    <th>Precio</th>
    <th>Direccion</th>
    <th>Web</th>
    <th>Valoracion</th></tr>";
while($final = $resultado->fetch_array()){
   echo "<tr>
            <td>".$final['Nombre']."</td>
            <td>".$final['Localidad']."</td>
            <td>".$final['Tipo']."</td>
            <td>".$final['Precio']."</td>
            <td>".$final['Direccion']."</td>
            <td>".$final['Web']."</td>
            <td>".$final['Valoracion']."</td>
            </tr>";
}
    echo "</table>";
} else {
    echo "No hay entradas validas";
}    
}
