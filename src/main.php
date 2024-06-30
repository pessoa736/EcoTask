<?php 

include "htmlFunctionsForPHP.php";
include "UserScript.php";

function init(){
    fun("form", 

        fun("label", "nome:", extra: "for='name'")."<br>".
        fun("input", "", extra: "type='text' id='name' name='name' "),
    );
}

?>