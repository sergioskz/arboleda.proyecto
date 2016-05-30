<?php 
session_start();
$id = $_SESSION['ID'];
echo $id;
$conexion = new mysqli('localhost', 'root', '', 'tfg') or die ("Error en la identificacion del usuario");
$consulta1 = "select * from preferencias where id_usuario = '$id'";
$resultado1 = $conexion->query($consulta1);
if($resultado1->num_rows === 1){
        $final = $resultado1->fetch_assoc();
    if($_REQUEST['Pcine']!=''){
       $cine = $_REQUEST['Pcine']; 
    } else {
    $cine = $final['gustosPelis'];
    }
    if($_REQUEST['Pmusica']!=''){
       $musica = $_REQUEST['Pmusica']; 
    } else {
    $musica = $final['gustosMusica'];
    }
    if($_REQUEST['Plectura']!=''){
       $libros = $_REQUEST['Plectura'];
    } else {
    $libros = $final['gustosLibros'];
    }
    if($_REQUEST['fumar']!=''){
      $fumar = $_REQUEST['fumar'];
    } else {
    $fumar = $final['fumador'];
    }
    if($_REQUEST['Ptrabajo']!=''){
      $trabajo = $_REQUEST['Ptrabajo']; 
    } else {
    $trabajo = $final['ocupacion'];
    }
    if($_REQUEST['Pfavoritos']!=''){
       $favoritos = $_REQUEST['Pfavoritos']; 
    } else {
    $favoritos = $final['lugares'];
    }
    if($_REQUEST['Phobbies']!=''){
       $hobbies = $_REQUEST['Phobbies'];
    } else {
    $hobbies = $final['hobbies'];
    }
    if($_REQUEST['Kbuscas']!=''){
        $check = $_REQUEST['Kbuscas'];
        $n = count ($check);
        if ($n > 0){
         $ex = $check[0];
         for ($i=1; $i<$n; $i++){
            $ex = $ex.".".$check[$i];
         }
      }
    } else {
    $ex = $final['busca'];
    }
$consulta = "UPDATE preferencias SET busca ='$ex', gustosPelis='$cine', gustosLibros='$libros', gustosMusica='$musica', lugares='$favoritos', hobbies='$hobbies', fumador='$fumar', ocupacion='$trabajo' WHERE id_usuario = '$id'";
mysqli_query($conexion,$consulta) or die(mysqli_error($conexion));
echo "Tus preferencias se han actualizado correctamente";
} else {
$cine = $_REQUEST['Pcine'];
$musica = $_REQUEST['Pmusica'];
$libros = $_REQUEST['Plectura'];
$fumar = $_REQUEST['fumar'];
$trabajo = $_REQUEST['Ptrabajo'];
$favoritos = $_REQUEST['Pfavoritos'];
$hobbies = $_REQUEST['Phobbies'];
$check = $_REQUEST['Kbuscas'];
if(isset($_REQUEST["Kbuscas"])){
       $n = count ($check);
      if ($n > 0){
         $ex = $check[0];
         for ($i=1; $i<$n; $i++){
            $ex = $ex.".".$check[$i];
         }
      }
      else{
         $ex = "indeciso";
      }
   }
$consulta = "insert into preferencias(id_usuario,busca,gustosPelis,gustosLibros,gustosMusica,lugares,hobbies,fumador,ocupacion) values ('$id','$ex','$cine','$libros','$musica','$favoritos','$hobbies','$fumar','$trabajo')";
$resultado = $conexion->query($consulta);
echo "Tus preferencias se han guardado correctamente";
}

?>