<?php
$host = "localhost";
$bdname = "ecotask";
$usuario = "root";
$senha = "";

$mysql = new mysqli($host, $usuario, $senha, $bdname);

if ($mysql->connect_errno){
    echo "não conectou (". $mysql->connect_error .")"; 
}else{
    echo "conectou";
}

?>