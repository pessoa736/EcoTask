<?php 


include "UserScript.php";

$username = $_POST["name"];
$email = $_POST["email"];
$senha = $_POST["senha"];

$user = new usuario($username, $email, $senha);


?>