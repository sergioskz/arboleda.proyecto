<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Finding</title>
	<meta charset="utf-8">
    <script type="text/javascript" src="JS/index.js"></script>
    <script type="text/javascript" src="Recursos/jquery-2.2.1.js"></script>
</head>
<body>
  <?php
    // Confirma si estas logeado +++++++++++++++++++++++++++++++++
        if(isset($_SESSION['ID'])){
            $id = $_SESSION['ID'];
            $conexion = new mysqli('localhost', 'root', '', 'tfg') or die ("Error en la identificacion del usuario");
            $consulta = "select id from amc_compa where id = '$id'";
            $resultado = $conexion->query($consulta);
            // Si no existe el test  de compatibilidad solo te muestra el test +++++++++++++++++++++++++++
            if($resultado->num_rows === 0){
            // El test de compatibilidad +++++++++++++++++++++++++++++++++
?>
    
      		<div class="contenido">
        TEST COMPATIBILIDAD
    <form id="compatiblidad" method="post">
    Eres una persona más…<br>
     <input type="radio" value="A1" name="R1">Elocuente<br>
    <input type="radio" value="A2" name="R1">Profesional<br>
    <input type="radio" value="A3" name="R1">Sencilla<br>
    <input type="radio" value="A4" name="R1">Amable<br>
    Animal preferido<br>
    <input type="radio" value="B1" name="R2">Perro<br>
    <input type="radio" value="B2" name="R2">Gato<br>
    <input type="radio" value="B3" name="R2">Caballo<br>
    <input type="radio" value="B4" name="R2">Loro<br>
    Prefieres una cita con un amig@/conocid@/pareja<br>
    <input type="radio" value="C1" name="R3">Cine<br>
    <input type="radio" value="C2" name="R3">Baile<br>
    <input type="radio" value="C3" name="R3">Escalada<br>
    <input type="radio" value="C4" name="R3">Museo<br>
    Que sientes cuando miras al cielo<br>
    <input type="radio" value="D1" name="R4">El infinito<br>
    <input type="radio" value="D2" name="R4">Calma<br>
    <input type="radio" value="D3" name="R4">Tranquilidad<br>
    <input type="radio" value="D4" name="R4">Soledad<br>
    Estación favorita del año<br>
    <input type="radio" value="E1" name="R5">Otoño<br>
    <input type="radio" value="E2" name="R5">Invierno<br>
    <input type="radio" value="E3" name="R5">Primavera<br>
    <input type="radio" value="E4" name="R5">Verano<br>
    Completa la siguiente frase: "Ojalá tuviera alguien con el que compartir..."<br>
    <input type="radio" value="F1" name="R6">Mis momentos alegres<br>
    <input type="radio" value="F2" name="R6">Mis momentos tristes<br>
    <input type="radio" value="F3" name="R6">Mis ideas<br>
    <input type="radio" value="F4" name="R6">Mis dias<br>
    ¿Qué es lo que más valoras en una amistad?<br>
    <input type="radio" value="G1" name="R7">Sinceridad<br>
    <input type="radio" value="G2" name="R7">Complicidad<br>
    <input type="radio" value="G3" name="R7">Confianza<br>
    <input type="radio" value="G4" name="R7">Independencia<br>
    Dirías que eres:<br>
    <input type="radio" value="H1" name="R8">Sincero<br>
    <input type="radio" value="H2" name="R8">Apasionado<br>
    <input type="radio" value="H3" name="R8">Confiable<br>
    <input type="radio" value="H4" name="R8">Sentimental<br>
    Cuando alguien está en problemas, usualmente le…<br>
    <input type="radio" value="I1" name="R9">Brindo apoyo emocional <br>
    <input type="radio" value="I2" name="R9">Le aporto soluciones practicas <br>
    <input type="radio" value="I3" name="R9">Le compadezco<br>
    <input type="radio" value="I4" name="R9">Le quitó importancia al problema<br>
    ¿Qué papel juegan el amor y el afecto en tu vida?<br>
    <input type="radio" value="J1" name="R10">Muy importante<br>
    <input type="radio" value="J2" name="R10">Relevante<br>
    <input type="radio" value="J3" name="R10">Ocasionalmente le doy importancia<br>
    <input type="radio" value="J4" name="R10">Casi ninguno<br>
        <input type="button" name="enviar" value="enviar" onclick="FCenviar()">
    </form>
    <!-- **************************************************** RESPUESTA ***************************************** -->    
    <div id="FCrespuesta"></div>
    <?php
    // Si ya existe el test te va a mostrar en una tabla los usuarios de tu municipio para hacer el test dandole a un boton
            } else {
            $id = $_SESSION['ID'];
            $consulta = "select Municipio from datos_personales where ID = '$id'";
            $resultado = $conexion->query($consulta);
            if($resultado->num_rows === 1){
            $final = $resultado->fetch_assoc();
            $municipio = $final['Municipio'];
            $consulta = "select * from datos_personales where Municipio = '$municipio' ID != '$id' LIMIT 15";
            $resultado = $conexion->query($consulta);
            if($resultado->num_rows > 0){
                echo "<table>
                <th>Nick</th>
                <th>Foto</th>
                <th>Descripcion</th>
                <th>Localidad</th>
                <th>Municipio</th>
                <th>Compatibilidad</th>
                <th>Total</th>
                ";
            while($final = $resultado->fetch_array()){
            // tabla de muestra de usuarios mas el form que te permite hacer el test con un boton y su respuesta
            echo "<tr>
            <td>".$final['Nick']."</td>
            <td>".$final['Foto']."</td>
            <td>".$final['Descripcion']."</td>
            <td>".$final['Localidad']."</td>
            <td>".$final['Municipio']."</td>
            <form id='Fhtc' method='POST'>
            <td> <button onclick='htc()' value='enviar' name='enviar'>Enviar</button></td>
            <input type='hidden' id='id2' value=".$final['ID']." name='id2'>
            <td> <div id=".$final['ID']."></div></td>
            </form>
            </tr>";
            }
            echo "</table>";
            // si no encuentra usuarios solo te muestra la siguiente linea
            } else {
                echo "No hay resultados";
            }
            }
            }
            // Si no estas logeado no podras ver nada mas que lo siguiente
        } else {
            echo "Registrate o logeate para acceder a este contenido";
        }
                ?>
</body>
</html>