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
                        if ($key == 'event_date') $data =$value;
                        if ($key == 'event_start') $inicio =$value;
                        if ($key == 'event_end') $final =$value;
                        if ($key == 'total') $total =$value;
                        if ($key == 'justify') $justificativa =$value;
                    }
                    if ($result > 0){
                        echo '<tr>';
                        echo '<td>' . $data . '</td>';
                        echo '<td>' . $inicio . '</td>';
                        echo '<td>' . $final . '</td>';
                        echo '<td>' . $total . '</td>';
                        echo '<td>' . $justificativa . '</td>';
                        echo '<tr>';
                    }
                }
            }

        }
    }


?>