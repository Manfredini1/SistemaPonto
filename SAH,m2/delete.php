<?php
    include('server.php');
    session_start(); 
  
    $cmd = $db->prepare("DELETE FROM registro WHERE id=".$_GET['id']);
    $cmd->execute();
    header ('Location: EditarHora.php');
    exit;


?>