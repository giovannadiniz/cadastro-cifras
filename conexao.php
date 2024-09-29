<?php
  $conexao = mysqli_connect('localhost', 'root', '', 'bd_cifras');

// Code DB - uft-8
mysqli_set_charset($conexao, "utf8");

// Error DB
if( mysqli_connect_error() ) {
    echo 'Erro na conexão: ' . mysqli_connect_error();
}
