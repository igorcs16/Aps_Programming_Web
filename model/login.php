<?php

class Login {
    function check($ra, $senha) {
        try {
            $conn = new PDO("mysql:host=localhost;dbname=cadastro", "root", "");
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $stmt = $conn->prepare('SELECT ra, senha FROM alunos WHERE ra = ' . $ra);

            if ($stmt !== FALSE){
                $stmt->execute(array("%$query%"));

                $stmt['senha']
                return $stmt
            }

            else{
                echo "<script>alert('" . $stmt->rowCount() . " Aluno não encontrado!'); window.location = '../view/login.html';</script>";
            }
            
        } catch (PDOException $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }
}

?>