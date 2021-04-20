<?php 
session_start(); 

?>

<!DOCTYPE html>
<html>
<style>


</style>
    <head>
        <meta charset="UTF-8"/>
        <title>SAH</title>
        <link rel="stylesheet" href="estilo.css">
    </head>
    <body>
      <script defer src="autenticacao.js"></script>
      <script defer src="perfil.js"></script>
        <div class="container">
          <div class="content">
            <!-- notification message -->
                <div class="login">
                  <div class="header">

                    <h2>Bem vindo ao S.A.H.</h2>
                    <h5>Faça seu login para acessar ao Sistema de Ajuste de Horas</h5>
                  </div>
                  
                  <div class="login-elements">
                    <form method="POST" action='login.php'>

                      <input type="email" id="mail" class="login-box" placeholder="E-mail" required name=email>
                        <p id="email-msg"></p>

                      <input type="password" id="senha" class="login-box" placeholder= "Senha" required name=pswd>
                        <p id="senha-msg"></p>
                    

                    <div class="login-rodape">

                      <div class="butt-entrar">
                        

                        <input type="submit" id="login" onclick = validateLogin() value= "Entrar" name="login_user">
                        <!---<input type="button" id="login" onclick = validateLogin() value= "Entrar">--->
                      </div>
                  </form>
                      <p><a href="../recuperaSenha.html">Esqueceu sua senha?</a></p> 
                      <p><a href="../cadastro.html">Ainda não sou cadastrado!</a></p>
                  </div>       
                </div>

                <div class="imagem"> </div>   

                <style>
                  .login {
                    display: flex;
                    flex-direction: column;
                    justify-content: center;
                    background-color: #EEF2F3;
                    text-align: center;
                    padding: 60% 10px;
                  }
                  body {
                    background-image: url("imagem/capa.jpg");
                    background-repeat: no-repeat;
                    background-size: cover;
                    background-position: center;
                  }
                </style>
          </div>
        </div>
          
    </body>
</html>