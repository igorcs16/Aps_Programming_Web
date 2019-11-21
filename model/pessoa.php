<?php

class Pessoa {
    
    private $nome;
    private $nasc;
    private $sexo;
    private $email;
    private $senha;
    
    function __construct($nome,$nasc,$sexo,$email,$senha) {
        
        $this->nome = $nome;
        $this->nasc = $nasc;
        $this->sexo = $sexo;
        $this->email = $email;
        $this->senha = $senha;      
    }
    
    function getNome() {
        return $this->nome;
    }

    function getNasc() {
        return $this->nasc;
    }

    function getSexo() {
        return $this->sexo;
    }

    function getEmail() {
        return $this->email;
    }

    function getSenha() {
        return $this->senha;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setNasc($nasc) {
        $this->nasc = $nasc;
    }

    function setSexo($sexo) {
        $this->sexo = $sexo;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setSenha($senha) {
        $this->senha = $senha;
    }
}
?>
