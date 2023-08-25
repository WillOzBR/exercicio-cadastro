<?php
    $hostname = "localhost";
    $bd = "clientes-aula";
    $usuario = "root";
    $senha = "";

    $mysqli = new mysqli($hostname, $usuario, $senha, $bd);
        if ($mysqli->connect_errno){
            echo "falha ao conectar(" . $myslqi->connect_errno . ")" . $mysqli->connect_errno;
        }
        else{
            echo "Conectado ao Banco de Dados";
        }

?>
