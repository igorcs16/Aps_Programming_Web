<?php

include ('../model/login.php');

$login = new Login();

$btlogin = $_POST['login'];
$return = $login->check($_POST['ra'], $_POST['senha']);

if($return){
    header('Location: ../view/salas.html');
}
?>