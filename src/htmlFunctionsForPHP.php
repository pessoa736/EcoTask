<?php


function fun($fun, $conteudo, $class = "", $id = "", $extra="", $final = true){
    
    $_class = "";
    if($class != ""){
        $_class = " class=".$class;
    } 

    $_id = "";
    if($id != ""){
        $_id = " id=".$id;
    }

    $_final = "";
    if ($final == true){
        $_final = "</".$fun.">";
    }

    echo "<".$fun . $_class . $_id . $extra."> \n\t" . $conteudo . "\n" . $_final;
}


?>