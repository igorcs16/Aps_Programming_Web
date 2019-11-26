<?php

class Aluno {
    
    private $ra;
    private $nome;
    private $nasc;
    private $sexo;
    private $email;
    private $senha;
    
    function __construct($ra,$nome,$nasc,$sexo,$email,$senha) {
        
        $this->ra = $ra;
        $this->nome = $nome;
        $this->nasc = $nasc;
        $this->sexo = $sexo;
        $this->email = $email;
        $this->senha = $senha;      
    }
    
    function getRa() {
        return $this->ra;
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

    function setRa($ra) {
        $this->ra = $ra;
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
