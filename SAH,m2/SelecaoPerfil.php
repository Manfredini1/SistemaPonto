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
            <div class="selecao">
                <div class="fulano">
                    <h2>Bem vindo, <?php echo $_SESSION['usuario'] ?></h2>
                    <h5>Selecione o seu perfil de usuário:</h5>
                    <br>
                    <br>
                </div>
                 
                <div align="center">
                    <form method="post" action=selecao.php name=perfil>
                        <select class="perfil" name='job' required>
                            <option value="Trabalhador">Trabalhador</option>
                            <option value="Coordenador de Curso">Coordenador de Curso</option>
                            <option value="Coordenador do Núcleo Pedagógico">Coordenador do Núcleo Pedagógico</option>
                        </select>
                    
                </div>

                <br>
                <br>
                <br>
                <br>
                <div class="butt-entrar">
                    
                    <input type="submit" id="login" name=select value=Acessar>
                    </form>
                    <!--onclick="window.location.href='InserirHora.php'"-->
                </div>  

                <br>
                <br>
                <br>           
            </div>

            <div class="imagem"></div>

        </div>
        <script defer src='validData.js'></script>
    </body>
</html>