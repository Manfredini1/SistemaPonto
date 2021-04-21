<?php include('login.php');

    // inserir dados
function postTime(){
    $data = $_POST["data"];
    $inicial = $_POST["entrada"];
    $final = $_POST["saida"];
    $justificativa = $_POST["justifica"];
    $id = getUserID();
                            
    $horaEntrada = strtotime($this->inicial);
    $horaSaida = strtotime($this->final);
    $total = round(abs($horaEntrada - $horaSaida) / 60). " minuto(s)";

    $query = "INSERT INTO `registro`(`event_date`, `event_start`, `event_end`, `total`, `justify`, `user_id`)
                values ('[$data]', '{$inicial}', '{$final}', '{$total}', '{$justificativa}', '{$id}')";
                            

    mysqli_query($db, $query);
    echo 'alert("Hora inserida com sucesso")';
    header('Location: InserirHora.php');
    }
    //buscar dados

    

?>