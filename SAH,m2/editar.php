<?php
    include('server.php');
    session_start();

    $id = $_GET['id'];
    $data = $_POST['data'];
    $inicial = $_POST['entrada'];
    $final = $_POST['saida'];
    $justificativa = $_POST['justify'];

    $horaEntrada = strtotime($inicial);
    $horaSaida = strtotime($final);
    $total = round(abs($horaEntrada - $horaSaida) / 60). " minuto(s)";

    if($inicial > $final ){
        echo '<script type="text/javascript"> erro3.innerHTML = "A hora final não pode ser inferior à hora inicial"; </script>';
        sleep(3);
        header ("Location: EditarHora.php?id=$id", true, 303);
        exit();
    
    }else if ($justificativa == 0) {
        echo '<script type="text/javascript"> erro3.innerHTML = "Selecione uma justificativa"; </script>';
        sleep(3);
        header ("Location: EditarHora.php?id=$id", true, 303);
        exit();

    } else{
        $cmd = $db->query("UPDATE registro SET event_date = '$data', event_start='$inicial',
        event_end='$final', total='$total', justify='$justificativa' WHERE id='$id'");
    
        header ('Location: EditarHora.php');
        exit;
    }
    
?>



<?php
    session_start();
    include("conexao.php");

    $id=$_GET['id'];
    $data=$_POST['data'];
    $hora_entrada=$_POST['hora_entrada'];
    $hora_saida=$_POST['hora_saida'];
    $justificativa=$_POST['justificativa'];
    
    $Entrada = strtotime($hora_entrada);
    $Saida = strtotime($hora_saida);
    $total = round(abs($Entrada - $Saida) / 60). " minuto(s)";

    $sql_code="UPDATE registros SET data='$data',
            hora_entrada='$hora_entrada',
            hora_saida='$hora_saida',
            total_horas='$total',
            justificativa='$justificativa'
            WHERE id ='$id' ";

    $mysqli->query($sql_code) or die($mysqli->error);

    header ('Location: editar.php');
    echo "Modificado corretamente";
?>