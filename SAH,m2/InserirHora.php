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
                        <img src="imagem/user.png" style= "width:120px">
                        <span class="tooltiptext">Editar foto</span>
                    </div>
                   
                    <h2 id="nome"> <?php echo $_SESSION['usuario'] ?> </h2>
                    <h3 id="perf"> <?php echo $_SESSION['perfil'] ?> </h3>
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
                    <h3 class="h3">Cadastrar Hora:</h3>

                        <form method="post" action=salvarHora.php name=add>
                            <div class="cadastro">
                            
                                <div id="data">
                                    <label>Data</label><br>
                                    <input type="date" required min="2021-01-01" max="2021-12-31" name=dataa>
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
                                    <select id="drop" name=justify required>
                                        <option value="0">Selecionar</option>
                                        <option value="Justificativa 1">Justificativa 1</option>
                                        <option value="Justificativa 2">Justificativa 2</option>
                                        <option value="Justificativa 3">Justificativa 3</option>
                                        <option value="Justificativa 4">Justificativa 4</option>
                                    </select>
                                </div>

                                <input type="submit" class=inserir id=inserir-btn onclick = validateTime(); name=enviar value=Inserir >
                            
                            </div> 
                        </form>
                    <div class= "erro-hora">
                        <p></p>
                        <p id="erro-cadastro">
                    </div>

                    <div class="enviar">
                        
                        <button type="submit" onclick="window.location.href='index.php'" name=Sair>Sair</button>  
                        <br>
                        <br>
                    </div>
                </div>
            </div>
        </div>

        <script defer src='validData.js'></script>
    </body>
</html>
