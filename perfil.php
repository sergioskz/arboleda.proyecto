<<<<<<< HEAD
<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Finding</title>
	<meta charset="utf-8">
    <script type="text/javascript" src="JS/index.js"></script>
    <script type="text/javascript" src="Recursos/jquery-2.2.1.js"></script>
</head>
    
        <?php 
 // +++++++++++++++++++++++++++++++++++++++ Preferencias Select ++++++++++++++++++++++++++++++
        if(isset($_SESSION['ID'])){
            $id = $_SESSION['ID'];
            $conexion = new mysqli('localhost', 'root', '', 'tfg') or die ("Error en la identificacion del usuario");
            $consulta = "select * from preferencias where id_usuario = '$id'";
            $resultado = $conexion->query($consulta);
            if($resultado->num_rows === 1){
            $final = $resultado->fetch_assoc();
            echo "Peliculas favoritas <br/>";
            echo $final['gustosPelis'];
            echo "<br/>Musica preferida<br/>";
            echo $final['gustosMusica'];
            echo "<br/>Libros favoritos<br/>";
            echo $final['gustosLibros'];    
            echo "<br/>Tu profesion<br/>";
            echo $final['ocupacion'];
            echo "<br/>Lugares<br/>";
            echo $final['lugares'];
            echo "<br/>Hobbies<br/>";
            echo $final['hobbies'];
            }
            ?>
 <!-- +++++++++++++++++++++++ Cambiar Preferencias ++++++++++++++++++++++++ -->
    Click para editar preferencias
    <div id="ver_on1"><input type="button" onclick="mostrar1('bloque1')" title="Expandir info" value="EDITAR PREFERENCIAS"></div>
    <div id="ver_off1" style="display: none"><input type="button" onclick="ocultar1('bloque1')" title="Cerrar info" value="CERRAR PREFERENCIAS"></div>
<div id="bloque1" style="display: none">
    <form id="preferencias" method="POST">
    Sobre cine:<br/>
    <textarea name="Pcine"></textarea><br/>
    Sobre musica:<br/>
    <textarea name="Pmusica"></textarea><br/>
    Sobre literatura:<br/>
    <textarea name="Plectura"></textarea><br/>
    Fumas:<br/>
    Si <input type="radio" name="fumar" value='sf'>
    No <input type="radio" name="fumar" value='nf'><br/>
    Sobre tu trabajo:<br/>
    <textarea name="Ptrabajo"></textarea><br/>
    Tus lugares favoritos:<br/>
    <textarea name="Pfavoritos"></textarea><br/>
    Hobbies:<br/>
    <textarea name="Phobbies"></textarea><br/>
    ¿Que buscas?
        <br/>
        <input type="checkbox" name="Kbuscas[]" value="Amistad">Amistad
        <input type="checkbox" name="Kbuscas[]" value="Relacion Seria">Relacion Seria
        <input type="checkbox" name="Kbuscas[]" value="Relacion sporadica">Relacion Exporadica<br/>
        <input type="checkbox" name="Kbuscas[]" value="Consorte de Aventuras">Consorte de aventuras
        <input type="checkbox" name="Kbuscas[]" value="Buen Conversador">Buen conversador
        <input type="checkbox" name="Kbuscas[]" value="Salidas de Fiesta">Salidas de fiesta<br/>
        <input type="checkbox" name="Kbuscas[]" value="Gustos extraños">Gustos extraños
        <input type="checkbox" name="Kbuscas[]" value="Parejas">Parejas
        <input type="checkbox" name="Kbuscas[]" value="Grupos">Grupos
        <br/>
        <input type="button" onclick="FPenviar()" name="enviar" value="enviar">
    </form>
            </div>
 <!-- ++++++++++++++++++++++++++++++ Respuesta al cambio de preferencias ++++++ -->
    <div id="FPrespuesta"></div>
    
<?php 
// +++++++++++++++++++++++++++++++++++ Datos personales select +++++++++++++++++++++
$consulta1 = "SELECT * FROM datos_personales WHERE ID = '$id'";
$resultado1 = $conexion->query($consulta1);
if($resultado1->num_rows === 1){
    $final = $resultado1->fetch_assoc();  
    $foto = $final['Foto'];
// ++++++++++++++++++++++++++++++++++++ Subir foto +++++++++++++++++++++
    echo '<img src="PHP/Imagenes/'.$foto.'" width="250px" height="300px" alt="No se permiten fotos de mas de 4mb">';
    ?> <form enctype="multipart/form-data" action="PHP/foto.php" method="POST">
    <input type="hidden" name="MAX_FILE_SIZE" value="4194320" />
    <input type="file" name="foto" accept="image/*"/><br/>
    <input type="submit" name="enviar" value="enviar">
    </form>
    <?php
    echo "Nombre:<br/>";
    echo $final['Nombre'];
    echo "<br/>Apellidos:<br/>";
    echo $final['Apellido'];
    echo "<br/>Email:<br/>";
    echo $final['Email'];
    echo "<br/>Nick:<br/>";
    echo $final['Nick'];
    echo "<br/>Localidad:<br/>";
    echo $final['Localidad'];
    echo "<br/>Municio:<br/>";
    echo $final['Municipio'];
    echo "<br/>Sobre ti:<br/>";
    echo $final['Descripcion'];
}
            ?>
<?php
        }   else {
            echo "Logueate o registrate <a href='login.html'><h1> AQUI <h1></a>";
        }
    ?> 
</body>
</html>
=======
<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Finding</title>
	<meta charset="utf-8">
    <script type="text/javascript" src="JS/index.js"></script>
    <script type="text/javascript" src="Recursos/jquery-2.2.1.js"></script>
</head>
    
        <?php 
 // +++++++++++++++++++++++++++++++++++++++ Preferencias Select ++++++++++++++++++++++++++++++
        if(isset($_SESSION['ID'])){
            $id = $_SESSION['ID'];
            $conexion = new mysqli('localhost', 'root', '', 'tfg') or die ("Error en la identificacion del usuario");
            $consulta = "select * from preferencias where id_usuario = '$id'";
            $resultado = $conexion->query($consulta);
            if($resultado->num_rows === 1){
            $final = $resultado->fetch_assoc();
            echo "Peliculas favoritas <br/>";
            echo $final['gustosPelis'];
            echo "<br/>Musica preferida<br/>";
            echo $final['gustosMusica'];
            echo "<br/>Libros favoritos<br/>";
            echo $final['gustosLibros'];    
            echo "<br/>Tu profesion<br/>";
            echo $final['ocupacion'];
            echo "<br/>Lugares<br/>";
            echo $final['lugares'];
            echo "<br/>Hobbies<br/>";
            echo $final['hobbies'];
            }
            ?>
 <!-- +++++++++++++++++++++++ Cambiar Preferencias ++++++++++++++++++++++++ -->
    Click para editar preferencias
    <div id="ver_on1"><input type="button" onclick="mostrar1('bloque1')" title="Expandir info" value="EDITAR PREFERENCIAS"></div>
    <div id="ver_off1" style="display: none"><input type="button" onclick="ocultar1('bloque1')" title="Cerrar info" value="CERRAR PREFERENCIAS"></div>
<div id="bloque1" style="display: none">
    <form id="preferencias" method="POST">
    Sobre cine:<br/>
    <textarea name="Pcine"></textarea><br/>
    Sobre musica:<br/>
    <textarea name="Pmusica"></textarea><br/>
    Sobre literatura:<br/>
    <textarea name="Plectura"></textarea><br/>
    Fumas:<br/>
    Si <input type="radio" name="fumar" value='sf'>
    No <input type="radio" name="fumar" value='nf'><br/>
    Sobre tu trabajo:<br/>
    <textarea name="Ptrabajo"></textarea><br/>
    Tus lugares favoritos:<br/>
    <textarea name="Pfavoritos"></textarea><br/>
    Hobbies:<br/>
    <textarea name="Phobbies"></textarea><br/>
    ¿Que buscas?
        <br/>
        <input type="checkbox" name="Kbuscas[]" value="Amistad">Amistad
        <input type="checkbox" name="Kbuscas[]" value="Relacion Seria">Relacion Seria
        <input type="checkbox" name="Kbuscas[]" value="Relacion sporadica">Relacion Exporadica<br/>
        <input type="checkbox" name="Kbuscas[]" value="Consorte de Aventuras">Consorte de aventuras
        <input type="checkbox" name="Kbuscas[]" value="Buen Conversador">Buen conversador
        <input type="checkbox" name="Kbuscas[]" value="Salidas de Fiesta">Salidas de fiesta<br/>
        <input type="checkbox" name="Kbuscas[]" value="Gustos extraños">Gustos extraños
        <input type="checkbox" name="Kbuscas[]" value="Parejas">Parejas
        <input type="checkbox" name="Kbuscas[]" value="Grupos">Grupos
        <br/>
        <input type="button" onclick="FPenviar()" name="enviar" value="enviar">
    </form>
            </div>
 <!-- ++++++++++++++++++++++++++++++ Respuesta al cambio de preferencias ++++++ -->
    <div id="FPrespuesta"></div>
    
<?php 
// +++++++++++++++++++++++++++++++++++ Datos personales select +++++++++++++++++++++
$consulta1 = "SELECT * FROM datos_personales WHERE ID = '$id'";
$resultado1 = $conexion->query($consulta1);
if($resultado1->num_rows === 1){
    $final = $resultado1->fetch_assoc();  
    $foto = $final['Foto'];
// ++++++++++++++++++++++++++++++++++++ Subir foto +++++++++++++++++++++
    echo '<img src="PHP/Imagenes/'.$foto.'" width="250px" height="300px" alt="No se permiten fotos de mas de 4mb">';
    ?> <form enctype="multipart/form-data" action="PHP/foto.php" method="POST">
    <input type="hidden" name="MAX_FILE_SIZE" value="4194320" />
    <input type="file" name="foto" accept="image/*"/><br/>
    <input type="submit" name="enviar" value="enviar">
    </form>
    <?php
    echo "Nombre:<br/>";
    echo $final['Nombre'];
    echo "<br/>Apellidos:<br/>";
    echo $final['Apellido'];
    echo "<br/>Email:<br/>";
    echo $final['Email'];
    echo "<br/>Nick:<br/>";
    echo $final['Nick'];
    echo "<br/>Localidad:<br/>";
    echo $final['Localidad'];
    echo "<br/>Municio:<br/>";
    echo $final['Municipio'];
    echo "<br/>Sobre ti:<br/>";
    echo $final['Descripcion'];
}
            ?>
<?php
        }   else {
            echo "Logueate o registrate <a href='login.html'><h1> AQUI <h1></a>";
        }
    ?> 
</body>
</html>
>>>>>>> origin/master
