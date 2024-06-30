<?php


function fun($fun, $conteudo, $class = "", $id = "", $extra=""){
    
    $_class = "";
    if($class != ""){
        $_class = " class=".$class;
    } 

    $_id = "";
    if($id != ""){
        $_id = " id=".$id;
    }

    echo "<".$fun."".$_class.$_id.$extra.">\n\t".$conteudo."\n</".$fun.">";
}


?>