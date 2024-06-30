<?php 

include "htmlFunctionsForPHP.php";
include "UserScript.php";

function init(){
    echo fun("form", 
        fun("label", "Nome do Usuario: ", extra: " for='name'")."<br>".
        fun("input", "", extra: " type='text' id='name' name='name' ")."<br>".
        fun("label", "Senha: ", extra: " for='senha'")."<br>".
        fun("input", "", extra: " type='text' id='senha' name='senha' ")."<br>",
    );
}

?>