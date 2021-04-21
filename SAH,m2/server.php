<?php
// conecta com o db
try{
    $db = new PDO("mysql:dbname=loginsystem;host=localhost","root","")
    or trigger_error(mysql_error());;
}
catch (PDOException $e){
    echo "Erro ao conectar com o banco de dados: ".$e->getMessege();
}
catch(Exception $e){
    echo "Erro generico: ".$e->getMessege();
}


function getUser(){

    $email = $_POST['email'];
    $password = $_POST['pswd'];
    $db = new PDO("mysql:dbname=loginsystem;host=localhost","root","");

    $cmd = $db->prepare("SELECT nome FROM users WHERE email='$email'
                            AND senha='$password'");
    $cmd->execute();
    $result = $cmd->fetch(PDO::FETCH_ASSOC);
    foreach ($result as $key => $value) {
        if ($key == 'nome'){
            $nome = $value;
            return  $_SESSION['usuario'] = $nome;
        }
    }
}


function getUserID() {
    $nome = $_SESSION['usuario'];
    $db = new PDO("mysql:dbname=loginsystem;host=localhost","root","");
    $cmd = $db->prepare("SELECT id FROM users WHERE nome = '$nome'");
    $cmd->execute();
    $result = $cmd->fetch(PDO::FETCH_ASSOC);
    foreach ($result as $key => $value) {
        if ($key == 'id'){
            $id = $value;
            return $_SESSION['ID'] = $id;
        }
    }
}  


function getHoras(){

    $cmd = $db->prepare("SELECT * FROM registro");
    $cmd->execute();
    $result = $cmd->fetch(PDO::FETCH_ASSOC);
        foreach ($result as $key => $value) {
            if ($key == 'event_date') $data =$value;
            if ($key == 'event_start') $inicio =$value;
            if ($key == 'event_end') $final =$value;
            if ($key == 'total') $total =$value;
            if ($key == 'justify') $justificativa =$value;
        }

}

function logoff(){
    header('Location: index.php');
    session_destroy();
    exit;
}

// insert delete e update
/** 

$db->query("INSERT INTO `registro`(`event_date`, `event_start`, `event_end`, `total`, `justify`, `user_id`)
values ('[$data]', '{$inicial}', '{$final}', '{$total}', '{$justificativa}', '{$id}')");


$db->query("DELETE FROM registro WHERE id = '$id'");


$db->query("UPDATE registro SET event_date = '$data' WHERE id = '$id'");


//select
$cmd = $db->prepare("SELECT * FROM registro WHERE id = ':id'");
$cmd->bindValue(":id",'$id');
$cmd->execute();
$result = $cmd->fetch(PDO::FETCH_ASSOC);

foreach ($result as $key => $value) {
    echo $key.":".$value."<br>";
}
*/
//fetchAll();

 ?>