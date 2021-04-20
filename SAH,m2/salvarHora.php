<?php 
    include('server.php');
    session_start(); 


    $data = $_POST['dataa'];
    $inicial = $_POST['entrada'];
    $final = $_POST['saida'];
    $justificativa = filter_input(INPUT_POST, 'justify');
    $id = getUserID();
                            
    $horaEntrada = strtotime($inicial);
    $horaSaida = strtotime($final);
    $total = round(abs($horaEntrada - $horaSaida) / 60). " minuto(s)";

    $db = new PDO("mysql:dbname=loginsystem;host=localhost","root","");

    
    $cmd = $db->prepare("INSERT INTO registro(event_date, event_start, event_end, total, justify, user)
                values ('$data', '$inicial', '$final', '$total', '$justificativa', '$id')");
    $cmd->execute();
    
    header ('Location: InserirHora.php');
    exit;


?>