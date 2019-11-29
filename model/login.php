<?php

class Login {
    function check($ra, $senha) {
        try {
            $conn = new PDO("mysql:host=localhost;dbname=cadastro", "root", "");
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $stmt = $conn->prepare('SELECT senha FROM alunos WHERE ra=?');
            
            $stmt->execute([$ra]);

            $data = $stmt->fetchAll();

            foreach($data as $row){
                $senha_d = base64_decode($row['senha']);
                
                if($senha == $senha_d){
                    echo "<script>alert('Login efetuado com sucesso!'); window.location = '../view/login.html';</script>";
                    return 1;
                }
    
                else{
                    echo "<script>alert('Senha incorreta!'); window.location = '../view/login.html';</script>";
                    return 0;
                }
            }
            
            echo "<script>alert('Aluno não encontrado!'); window.location = '../view/login.html';</script>";
            return 0;
            
        } catch (PDOException $e) {
            echo 'Error: ' . $e->getMessage();
        }       
    }
}

?>