<?php

class Cadastro {
    function inserir($ra, $nome, $nasc, $sexo, $email, $senha) {
        try {
            $cripto = base64_encode($senha);
            $conn = new PDO("mysql:host=localhost;dbname=cadastro", "root", "");
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $stmt = $conn->prepare('INSERT INTO alunos (ra,nome,nasc,sexo,email,senha) VALUES (:ra,:nome,:nasc,:sexo,:email,:senha)');
            $stmt->execute(array(':ra' => "$ra", ':nome' => "$nome", ':nasc' => "$nasc", ':sexo' => "$sexo", ':email' => "$email", ':senha' => "$cripto"));

            echo "<script>alert('" . $stmt->rowCount() . " Aluno cadastrado com sucesso!'); window.location = '../view/cadastro.html';</script>";
        } catch (PDOException $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }
}
?>
