<?php 

include_once "conexao.php";

class Cifra
{
    public function inserirCifra($nome, $musica, $genero, $conexao)
    {
        $sql = "INSERT INTO cifra(autor, musica, genero) 
        VALUES ('$nome', '$musica', '$genero')";

        $resultado = mysqli_query($conexao, $sql);
        return $resultado;
    }

    public function listarCifras($conexao)
    {
        $sql = "SELECT * FROM cifra";

        $resultado = mysqli_query($conexao, $sql);
        return $resultado;
    }

    public function buscarGeneros($conexao)
    {
        $sql = "SELECT * FROM genero";

        $resultado = mysqli_query($conexao, $sql);
        return $resultado;
    }
}