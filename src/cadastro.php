<?php 

include "htmlFunctionsForPHP.php";
include "UserScript.php";

function init(){
    echo 
        fun(
            extra: " action=main.php",
            fun: "form",
            conteudo: 
            fun("label", "Nome do Usuario: ", extra: " for='name'")."<br>".
            fun("input", "", extra: " type='text' id='name' name='name' ", final: false)."<br>".
            fun("label", "Senha: ", extra: " for='senha'")."<br>".
            fun("input", "", extra: " type='text' id='senha' name='senha' ", final:false)."<br>".
            fun("input", extra:" type='submit' value='login'", final: false),
        );
}

?>