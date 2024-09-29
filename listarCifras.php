<?php 
include_once "conexao.php";
include_once "Cifra.php";

$cifra = new Cifra();
$resultado = $cifra->listarCifras($conexao);

if ($resultado) {
    while($array = mysqli_fetch_assoc($resultado)){
		echo "<h2> DADOS DA CIFRA </h2>";
		echo "ID: "      .$array['id']    ."<br>";
		echo "NOME: "    .$array['autor']  ."<br>";
		echo "MÚSICA: "  .$array['musica']."<br>";
		echo "GÊNERO: "  .$array['genero']   ."<br>";
        echo "<br>";
        echo "<hr>";		
	}//fim do while	


}
