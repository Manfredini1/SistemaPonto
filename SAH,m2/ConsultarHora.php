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
                    <h3 class="h3">Consultar Hora:</h3>
                        <div class="cadastro">
                            <div id="dataInicial">
                                <label>Inicial</label><br>
                                <input type="date" name="dataInicial" required  min="2021-01-01" max="2021-12-31">
                            </div>
                        
                            <div id="dataFinal">
                                <label>Final</label><br>
                                <input type="date" name="dataFinal" required min="2021-01-01" max="2021-12-31">
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

                            <input type="submit" class=inserir id=inserir-btn onclick = consultTime() name=enviar value=Consultar >
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
                                </tr>
                            </thead>
                            <tbody>
                                    <?php 
                                        include('server.php');
                                        $cmd = $db->prepare("SELECT * FROM registro");
                                        $cmd->execute();
                                        $result = $cmd->fetchAll();
                                        foreach ($result as $item) { ?>
                                            <tr>
                                                <td><?php echo $item['event_date'] ?></td>
                                                <td><?php echo $item['event_start'] ?></td>
                                                <td><?php echo $item['event_end'] ?></td>
                                                <td><?php echo $item['total'] ?></td>
                                                <td><?php echo $item['justify'] ?></td>
                                            </tr>
                                    <?php } ?>
                            </tbody>          
                        </table>
                        <br>
                        <br>
                        <div class=h4>
                            <h4>Legenda:</h4>
                            <img src="imagem/print.png" style= "width:20px"id="print"/> <label>Imprimir</label>
                            <img src="imagem/pdf.png" style= "width:20px"id="pdf"/> <label>Baixar PDF</label>
                            <img src="imagem/excel.png" style= "width:20px"id="excel"/> <label>Baixar Excel</label>
                        </div>

                        <div class="enviar">
                            <div class="print">
                                <img src="imagem/excel.png" style= "width:20px"id="excel-btn" alt="excel"/>
                                <img src="imagem/pdf.png" style= "width:20px"id="pdf-btn" alt="pdf"/>
                                <img src="imagem/print.png" style= "width:20px"id="print-btn" alt="print"/>
                             
                            </div>

                            <button type="submit" onclick="window.location.href='index.php'" name=Sair>Sair</button>
                            <br>
                            <br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script defer src='validData.js'></script>
    </body>
</html>
