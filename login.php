<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Página de Login</title>
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
<form action="testeLogin.php" method="POST">
      <div class="titulo">
        <h1>Faça o seu login</h1>
        <div class="barra-horizontal"></div>
      </div>

      <div class="campo-input">
        <label for="email">Seu e-mail*</label>
        <input type="email" name="email" id="email" />
      </div>

      <div class="campo-input">
        <label for="password">Sua senha*</label>
        <input type="password" name="senha" id="password" />
      </div>

      <div class="lembrar-me">
        <input type="checkbox" />
        <p>Lembrar-me</p>
      </div>

      <input class="inputSubmit" type="submit" name="submit" value="Enviar">

      <p class="">
        Não tem Login?
        <a class="" href="cadastro.php">Cadastra-se</a>
      </p>
      
      <p class="esqueceu-senha">
        Esqueceu sua senha?
        <a href="#"><br>Clique aqui!</a>
      </p>
      

    </form>
  </body>
</html>