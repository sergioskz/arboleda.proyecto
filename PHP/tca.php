<?php
session_start();
$id = $_SESSION['ID'];
$id2 = $_REQUEST['id2'];
// Pregunta 1
$tabla[A1][A1]=3;
$tabla[A1][A2]=5;
$tabla[A1][A3]=8;
$tabla[A1][A4]=7;

$tabla[A2][A1]=5;
$tabla[A2][A2]=7;
$tabla[A2][A3]=3;
$tabla[A2][A4]=8;

$tabla[A3][A1]=8;
$tabla[A3][A2]=3;
$tabla[A3][A3]=10;
$tabla[A3][A4]=7;

$tabla[A4][A1]=7;
$tabla[A4][A2]=8;
$tabla[A4][A3]=7;
$tabla[A4][A4]=10;

// Pregunta 2
$tabla[B1][B1]=10;
$tabla[B1][B2]=5;
$tabla[B1][B3]=7;
$tabla[B1][B4]=3;

$tabla[B2][B1]=5;
$tabla[B2][B2]=7;
$tabla[B2][B3]=7;
$tabla[B2][B4]=4;

$tabla[B3][B1]=7;
$tabla[B3][B2]=7;
$tabla[B3][B3]=10;
$tabla[B3][B4]=5;

$tabla[B4][B1]=3;
$tabla[B4][B2]=4;
$tabla[B4][B3]=5;
$tabla[B4][B4]=10;

// Pregunta 3
$tabla[C1][C1]=9;
$tabla[C1][C2]=5;
$tabla[C1][C3]=4;
$tabla[C1][C4]=7;

$tabla[C2][C1]=9;
$tabla[C2][C2]=10;
$tabla[C2][C3]=7;
$tabla[C2][C4]=4;

$tabla[C3][C1]=4;
$tabla[C3][C2]=7;
$tabla[C3][C3]=10;
$tabla[C3][C4]=7;

$tabla[C4][C1]=7;
$tabla[C4][C2]=3;
$tabla[C4][C3]=7;
$tabla[C4][C4]=10;

// Pregunta 4
$tabla[D1][D1]=3;
$tabla[D1][D2]=7;
$tabla[D1][D3]=9;
$tabla[D1][D4]=10;

$tabla[D1][D1]=7;
$tabla[D1][D2]=9;
$tabla[D1][D3]=5;
$tabla[D1][D4]=3;

$tabla[D1][D1]=9;
$tabla[D1][D2]=5;
$tabla[D1][D3]=8;
$tabla[D1][D4]=4;

$tabla[D1][D1]=10;
$tabla[D1][D2]=3;
$tabla[D1][D3]=4;
$tabla[D1][D4]=8;

// Pregunta 5
$tabla[E1][E1]=10;
$tabla[E1][E2]=7;
$tabla[E1][E3]=3;
$tabla[E1][E4]=5;

$tabla[E2][E1]=7;
$tabla[E2][E2]=10;
$tabla[E2][E3]=5;
$tabla[E2][E4]=3;

$tabla[E3][E1]=3;
$tabla[E3][E2]=5;
$tabla[E3][E3]=10;
$tabla[E3][E4]=7;

$tabla[E4][E1]=5;
$tabla[E4][E2]=3;
$tabla[E4][E3]=7;
$tabla[E4][E4]=10;

// Pregunta 6
$tabla[F1][F1]=5;
$tabla[F1][F2]=10;
$tabla[F1][F3]=7;
$tabla[F1][F4]=7;

$tabla[F1][F1]=10;
$tabla[F1][F2]=3;
$tabla[F1][F3]=8;
$tabla[F1][F4]=7;

$tabla[F1][F1]=7;
$tabla[F1][F2]=8;
$tabla[F1][F3]=5;
$tabla[F1][F4]=7;

$tabla[F1][F1]=7;
$tabla[F1][F2]=7;
$tabla[F1][F3]=7;
$tabla[F1][F4]=10;

// Pregunta 7
$tabla[G1][G1]=7;
$tabla[G1][G2]=5;
$tabla[G1][G3]=7;
$tabla[G1][G4]=10;

$tabla[G1][G1]=7;
$tabla[G1][G2]=10;
$tabla[G1][G3]=7;
$tabla[G1][G4]=3;

$tabla[G1][G1]=7;
$tabla[G1][G2]=7;
$tabla[G1][G3]=8;
$tabla[G1][G4]=5;

$tabla[G1][G1]=10;
$tabla[G1][G2]=3;
$tabla[G1][G3]=5;
$tabla[G1][G4]=7;

// Pregunta 8
$tabla[H1][H1]=7;
$tabla[H1][H2]=6;
$tabla[H1][H3]=8;
$tabla[H1][H4]=5;

$tabla[H1][H1]=6;
$tabla[H1][H2]=8;
$tabla[H1][H3]=3;
$tabla[H1][H4]=8;

$tabla[H1][H1]=8;
$tabla[H1][H2]=5;
$tabla[H1][H3]=7;
$tabla[H1][H4]=7;

$tabla[H1][H1]=5;
$tabla[H1][H2]=8;
$tabla[H1][H3]=7;
$tabla[H1][H4]=7;

// Pregunta 9
$tabla[I1][I1]=10;
$tabla[I1][I2]=7;
$tabla[I1][I3]=5;
$tabla[I1][I4]=3;

$tabla[I1][I1]=7;
$tabla[I1][I2]=10;
$tabla[I1][I3]=3;
$tabla[I1][I4]=5;

$tabla[I1][I1]=5;
$tabla[I1][I2]=3;
$tabla[I1][I3]=7;
$tabla[I1][I4]=10;

$tabla[I1][I1]=3;
$tabla[I1][I2]=5;
$tabla[I1][I3]=10;
$tabla[I1][I4]=7;

// Pregunta 10
$tabla[J1][J1]=10;
$tabla[J1][J2]=7;
$tabla[J1][J3]=5;
$tabla[J1][J4]=3;

$tabla[J1][J1]=7;
$tabla[J1][J2]=10;
$tabla[J1][J3]=7;
$tabla[J1][J4]=5;

$tabla[J1][J1]=5;
$tabla[J1][J2]=7;
$tabla[J1][J3]=10;
$tabla[J1][J4]=7;

$tabla[J1][J1]=3;
$tabla[J1][J2]=5;
$tabla[J1][J3]=7;
$tabla[J1][J4]=10;

// Consultas
$conexion = new mysqli('localhost', 'root', '','tfg') or die ("Error en la identificacion del usuario");
$consulta = "SELECT * FROM amc_compa WHERE id = '$id'";
$resultado = $conexion->query($consulta);
if($resultado->num_rows === 1){
    $final = $resultado->fetch_assoc();
    $R1 = $final['R1'];
    $R2 = $final['R2'];
    $R3 = $final['R3'];
    $R4 = $final['R4'];
    $R5 = $final['R5'];
    $R6 = $final['R6'];
    $R7 = $final['R7'];
    $R8 = $final['R8'];
    $R9 = $final['R9'];
    $R10 = $final['R10'];
}
$consulta2 = "SELECT * FROM amc_compa WHERE id = '$id2'";
$resultado2 = $conexion->query($consulta2);
if($resultado2->num_rows === 1){
    $fina2l = $resultado2->fetch_assoc();
    $R21 = $final2['R1'];
    $R22 = $final2['R2'];
    $R23 = $final2['R3'];
    $R24 = $final2['R4'];
    $R25 = $final2['R5'];
    $R26 = $final2['R6'];
    $R27 = $final2['R7'];
    $R28 = $final2['R8'];
    $R29 = $final2['R9'];
    $R210 = $final2['R10'];
}

$total = $tabla[$R1][$R21] + $tabla[$R2][$R22] + $tabla[$R3][$R23] + $tabla[$R4][$R24] + $tabla[$R5][$R25] + $tabla[$R6][$R26] + $tabla[$R7][$R27] + $tabla[$R8][$R28] + $tabla[$R9][$R29] + $tabla[$R10][$R210];

echo $total."%";

?>