<?php
session_start(); 

if(array_key_exists('select', $_POST)) {
    $_SESSION['perfil'] = $_POST['job'];
    header('Location: InserirHora.php');
    exit;
}



?>
