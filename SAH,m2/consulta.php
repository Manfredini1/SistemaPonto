<?php
    include('server.php');

    function check(){
        $id = getUserID();
        $db = new PDO("mysql:dbname=loginsystem;host=localhost","root","");
        $cmd = $db->prepare("SELECT * FROM registro WHERE user = '$id'");
        $cmd->execute();
        $result = $cmd->fetch(PDO::FETCH_ASSOC);

        foreach ($result as $key => $value) {
            if(($key == 'user')){
                $id = $value;
                if($id > 0){
                    foreach ($result as $key => $value) {
                        if ($key == 'id') $id =$value;
                        return $id;
                    }
                }
            }

        }
    }


?>

