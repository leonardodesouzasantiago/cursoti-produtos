<?php

    $servidor = "localhost";
    $usuario = "root";
    $senha = "Souza_97531";
    $banco = "supermercado2";
    $conect = mysqli_connect($servidor,$usuario,$senha,$banco);

    if(mysqli_connect_errno()){
        die("Falha na Conexão ao banco de dados: ". mysqli_connect_errno());
    }
?>