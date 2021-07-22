<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>SDC | Processos Seletivos</title>
  <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="style.css" />
</head>

<body>
  <header>
    <a href="/myphp/index.html#home" class="logo">Recrutamento</a>
  </header>
  <div class="container">
    <div class="forms-container">
      <div class="signin-signup">
        <form action="./login.php" class="sign-in-form" method="POST">
          <h2 class="title">Entrar</h2>
          <div class="input-field">
            <i class="fas fa-user"></i>
            <input name="lemail" type="email" placeholder="E-mail" />
          </div>
          <div class="input-field">
            <i class="fas fa-lock"></i>
            <input name="lsenha" type="password" placeholder="Senha" />
          </div>
          <input type="submit" value="Login" class="btn solid" />

          <p class="social-text">Ou entre com as redes sociais</p>
          <div class="social-media">
            <a href="#" class="social-icon">
              <i class="fab fa-linkedin-in"> </i>
            </a>
          </div>
        </form>

        <form action="./new_user.php" class="sign-up-form" method="POST">
          <h2 class="title">Cadastrar</h2>
          <div class="input-field">
            <i class="fas fa-user"></i>
            <input name="cnome" type="text" placeholder="Nome" required="" oninvalid="this.setCustomValidity('O campo NOME é obrigatório!')" oninput="setCustomValidity('')" />
          </div>
          <div class="input-field">
            <i class="fas fa-envelope"></i>
            <input name="cemail" type="email" placeholder="E-mail" required="" oninvalid="this.setCustomValidity('Insira um email válido!')" oninput="setCustomValidity('')" />
          </div>
          <div class="input-field">
            <i class="fas fa-lock"></i>
            <input name="csenha" type="password" placeholder="Senha" id="password" required="" oninvalid="this.setCustomValidity('Insira uma senha!')" oninput="setCustomValidity('')" />
          </div>
          <div class="input-field">
            <i class="fas fa-lock"></i>
            <input type="password" placeholder="Confirmar senha" id="confirmar_senha" required />
          </div>
          <input type="submit" value="Cadastar" name="cadastro" class="btn solid" />

          <p class="social-text">Ou cadastre com as redes sociais</p>
          <div class="social-media">
            <a href="#" class="social-icon">
              <i class="fab fa-linkedin-in"> </i>
            </a>
          </div>
        </form>
      </div>
    </div>
    <div class="panels-container">
      <div class="panel left-panel">
        <div class="content">
          <h3>Novo aqui ?</h3>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam
            consequuntur omnis nihil?
          </p>
          <button class="btn transparent" id="sign-up-btn">Cadastar</button>
        </div>
        <img src="/subpages/signin+up/img/hello.svg" class="image" alt="" />
      </div>

      <div class="panel right-panel">
        <div class="content">
          <h3>Um de nós ?</h3>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam
            consequuntur omnis nihil?
          </p>
          <button class="btn transparent" id="sign-in-btn">Logar</button>
        </div>
        <img src="/subpages/signin+up/img/feeling_proud.svg" class="image" alt="" />
      </div>
    </div>
  </div>

  <script src="app.js"></script>
</body>

</html>