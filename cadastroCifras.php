<?php

include_once "conexao.php";
include_once "Cifra.php";

if (isset($_POST['btn_salvar'])) {
    $nome = $_POST['nome'];
    $musica = $_POST['musica'];
    $genero = $_POST['genero'];

    $cifra = new Cifra();
    if ($cifra->inserirCifra($nome, $musica, $genero, $conexao)) {
        echo "cadastrado com sucesso! <br>";
		echo "<a href='listarCifras.php'>LISTAR</a>";
    }
}