<?php

use PSpell\Config;

  if(isset($_POST["submit"])) 
  {
    //print_r('Nome: ' . $_POST['nome']);
    //print_r('<br>');
    //print_r('Email: ' .$_POST['email']);
    //print_r('<br>');
    //print_r('Senha: ' .$_POST['senha']);
  

  include_once('config.php');

  $nome = $_POST['nome'];
  $email = $_POST['email'];
  $senha = $_POST['senha'];

  $result = mysqli_query(
    $conexao,
    "INSERT INTO usuarios (nome, email, senha)
     VALUES ('$nome', '$email', '$senha')"
);

  }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<form action="cadastro.php" method="POST">
      <div class="titulo">
        <h1>Cadastro</h1>
        <div class="barra-horizontal"></div>
      </div>

      <div class="campo-input">
        <label for="nome">Nome Completo*</label>
        <input type="text" name="nome" id="text" />
      </div>

      <div class="campo-input">
        <label for="email">E-mail*</label>
        <input type="email" name="email" id="email" />
      </div>

      <div class="campo-input">
        <label for="password">Senha*</label>
        <input type="password" name="senha" id="password" />
      </div>
      
      <input class="inputSubmit" type="submit" name="submit" value="Cadastrar!">

     <button type="button" class="inputSubmit" onclick="window.location.href='login.php'">
    Voltar
</button>

      </p>
    </form>
  </body>
</html>