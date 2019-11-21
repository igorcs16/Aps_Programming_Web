<?php

class Cadastro {
    function inserir($nome, $nasc, $sexo) {
        try {
            $conn = new PDO("mysql:host=localhost;dbname=cadastro", "root", "");
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $stmt = $conn->prepare('INSERT INTO cadastro (nome,nasc,sexo,email,senha) VALUES (:nome,:nasc,:sexo,:email,:senha)');
            $stmt->execute(array(':nome' => "$nome", ':nasc' => "$nasc", ':sexo' => "$sexo", ':email' => "$email", ':senha' => "$senha"));

            echo "<script>alert('" . $stmt->rowCount() . " Usuário cadastrado com sucesso!'); window.location = '../view/cadastro.html';</script>";
        } catch (PDOException $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }
}
?>
