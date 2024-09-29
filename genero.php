<?php 
include_once "conexao.php";
include_once "Cifra.php";

$cifra = new Cifra();
$resultado = $cifra->buscarGeneros($conexao);

if ($resultado) {
    $generos = mysqli_fetch_all($resultado, MYSQLI_ASSOC);
}

