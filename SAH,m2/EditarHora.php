<?php session_start(); 

?>

<!DOCTYPE html>
<html>
<style>
<?php include 'estilo.css'; ?>
</style>
    <head>
        <meta charset="UTF-8"/>
        <title>SAH</title>
        <link rel="stylesheet" href="estilo.css">
    </head>

    <body>
        
        <div class="container">
            <div class="user">
                <div class="header">
                    <br>
                    <div class="tooltip">
                        <img src="imagem/user.png" style= "width:120px"/>
                        <span class="tooltiptext">Editar foto</span>
                    </div>

                    <h2 id="nome"><?php echo $_SESSION['usuario'] ?></h2>
                    <h3 id="perf"><?php echo $_SESSION['perfil'] ?></h3>
                </div>

                <div align="center">
                    <br>     
                    <div class="opcoes">
          
                        <button onclick="window.location.href='InserirHora.php'";>Inserir</button><br><br>
                        <button onclick="window.location.href='EditarHora.php'";>Editar</button><br><br>
                        <button onclick="window.location.href='ConsultarHora.php'";>Visualizar</button><br><br>
                        <div id="divBusca">
                            <input type="text" id="txtBusca" placeholder="Pesquisar..."/>
                            <img src="imagem/buscar.png" style= "width:25px"id="btnBusca" alt="Buscar"/>
                        </div>
                    </div>

                <br>
                </div>   
            </div>

            <div class="tabela">
                    <div class="painel">
                        <h3 class="h3">Editar Hora:</h3>
                        <div class="cadastro">
                        <div id="data">
                            <label>Data</label><br>
                            <input type="date" required min="2021-01-01" max="2021-12-31" nome=data>
                        </div>

                    <div id="horaEntrada">
                        <label>Entrada</label><br>
                        <input type="time" name='entrada' required>
                     </div>

                    <div id="horaSaida">
                        <label>Saída</label><br>
                        <input type="time" name='saida' required>
                    </div>

                    <div id="justifica">
                        <label>Justificativa</label><br>
                        <select id="drop" required>
                            <option value="0">Selecionar</option>
                            <option value="1">Justificativa 1</option>
                            <option value="2">Justificativa 2</option>
                            <option value="3">Justificativa 3</option>
                            <option value="4">Justificativa 4</option>
                        </select>
                    </div>
                        
                    <?php 
                        if(isset($_POST['enviar'])) { 
                            editTime();
                            echo 'alert("Hora inserida com sucesso")';
                            header('Location: InserirHora.php');
                        }
                    ?>
    
                            <input type="submit" class=inserir id=inserir-btn onclick = editTime(); name=enviar value=Editar >
                        </div> 
                        
                        <div class= "erro-hora">
                            <p></p>
                            <p id="erro-cadastro">
                        </div>
    
                        <div class="quadro">
                            <h3 class="h3">Lista de horas:</h3>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Data</th>
                                        <th>Entrada</th>
                                        <th>Saída</th>
                                        <th>Total</th>
                                        <th>Justificativa</th>
                                        <th>Opções</th>
                                    </tr>
                                </thead>
    
                                <tbody>
                            <?php
                            include('server.php');
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
                                if ($result > 0){
                                        echo '<tr>';
                                        echo '<td>' . $data . '</td>';
                                        echo '<td>' . $inicio . '</td>';
                                        echo '<td>' . $final . '</td>';
                                        echo '<td>' . $total . '</td>';
                                        echo '<td>' . $justificativa . '</td>';
                                        echo "<td><img src='imagem/editar.png' style= 'width:20px'id='edit-btn' alt='Edit'/>
                                            <img src='imagem/excluir.png' style= 'width:20px'id='trash-btn' alt='Trash'/></td>";
                                        echo '<tr>';
                                }
                                
                            ?>
                            </tbody> 
                                   
                            </table>
                            <br>
                            <br>
                            <div class=h4>
                                <h4>Legenda:</h4>
                                <img src="imagem/editar.png" style= "width:20px"id="edit" alt="Edit"/> <label>Editar</label>
                                <img src="imagem/excluir.png" style= "width:20px"id="trash" alt="Trash"/> <label>Excluir</label>
                            </div>
    
                            <div class="enviar">
                                <button name = 'saveEdit' onclick = "alert('Enviado para análise');">Enviar lista</button>
                                <button type="submit" onclick="window.location.href='index.php'" name=Sair>Sair</button>
                                <br>
                                <br>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
        <script defer src='validData.js'></script>
</html>
