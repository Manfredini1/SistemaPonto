<?php
session_start(); 

include('server.php');


    if (getUser() != null){
        $_SESSION['start'] = time();
        $_SESSION['expire'] = $_SESSION['start'] + 600;
        header('Location: SelecaoPerfil.php');
        exit;
    }else{ 
        header('Location: index.php'); 
        exit;
    }

    if (time() > $_SESSION['expire']) {
        echo '<script language="javascript">';
        echo 'alert("Limite de tempo esgotado, faça o login novamente.")';
        echo '</script>';
        header('Location: index.php');
        session_destroy();
        exit;
    } 

    
?>

