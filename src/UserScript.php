<?php     

class usuario{
    
    private $senha;
    private $nomePublico;
    private $nomeDoUsuario;
    private $email;

    function __construct($nomeDoUsuario, $email, $senha){
        $this->nomeDoUsuario = $nomeDoUsuario;
        $this->email = $email;
        $this->senha = $senha;
        $this->nomePublico = $this->nomeDoUsuario;
    }


}
?>