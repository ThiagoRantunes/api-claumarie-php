<?php

$host = "localhost";
$user = "root";
$password = "";
$database = "banco_claumarie";

$conexao = new mysqli($host, $user, $password, $database);

if($conexao){
    echo(mysql_error());
}

?>