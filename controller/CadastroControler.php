<?php

include ('../model/cadastroDAO.php');
include ('../model/pessoa.php');

$cadastro = new CadastroDao();

isset($_POST['cadastrar']){
    $btcadastro = $_POST['cadastrar'];
    $pessoa = new Pessoa($_POST['nome'],$_POST['nasc'],$_POST['sexo'],$_POST['email'],$_POST['senha']);
    $cadastro->inserir($pessoa->getNome(), $pessoa->getNasc(), $pessoa->getSexo(), $pessoa->getEmail(), $pessoa->getSenha());
}

?>