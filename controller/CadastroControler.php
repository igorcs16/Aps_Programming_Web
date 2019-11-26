<?php

include ('../model/cadastro.php');
include ('../model/alunos.php');

$cadastro = new Cadastro();

$btcadastro = $_POST['cadastrar'];
$aluno = new Aluno($_POST['ra'],$_POST['nome'],$_POST['nasc'],$_POST['sexo'],$_POST['email'],$_POST['senha']);
$cadastro->inserir($aluno->getRa(), $aluno->getNome(), $aluno->getNasc(), $aluno->getSexo(), $aluno->getEmail(), $aluno->getSenha());

?>