<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Shopping do Cidadão | Login</title>
  <link rel="stylesheet" type="text/css" href="style.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
  <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
</head>

<body>
  <header>
    <a href="/myphp/index.html#home" class="logo">Recrutamento</a>
  </header>
  <div class="container" id="container">
    <div class="form-container sign-up-container">
      <form action="./funcionarios/func_login.php" method="POST">
        <h1>Login Funcionários</h1>
        <div class="social-container">
          <a href="#" class="social"><i class="fa fa-linkedin"></i></a>
        </div>
        <span>ou use seu e-mail</span>
        <input type="email" name="email" placeholder="E-mail" required="" />
        <input type="password" name="password" placeholder="Senha" required="" />
        <a href="#">Esqueci a senha</a>
        <button>Entrar</button>
      </form>
    </div>
    <div class="form-container sign-in-container">
      <form action="/myphp/subpages/Login/login.php" method="POST">
        <h1>Login Candidatos</h1>
        <div class="social-container">
          <a href="#" class="social"><i class="fa fa-linkedin"></i></a>
        </div>
        <span>ou use seu e-mail</span>
        <input type="email" name="lemail" placeholder="E-mail" required="" />
        <input type="password" name="lsenha" placeholder="Senha " required="" />
        <a href="#">Esqueci a senha</a>
        <button>Entrar</button>
      </form>
    </div>
    <div class="overlay-container">
      <div class="overlay">
        <div class="overlay-panel overlay-left">
          <h1>Candidatos!</h1>
          <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
          <button class="ghost" id="signIn">LOGAR</button>
        </div>
        <div class="overlay-panel overlay-right">
          <h1>Funcionários!</h1>
          <p>
            Lorem ipsum dolor sit amet consectetur, adipisicing elit aut
            cumque.
          </p>
          <button class="ghost" id="signUp">Logar</button>
        </div>
      </div>
    </div>
  </div>

  <script type="text/javascript">
    const signUpButton = document.getElementById('signUp');
    const signInButton = document.getElementById('signIn');
    const container = document.getElementById('container');

    signUpButton.addEventListener('click', () => {
      container.classList.add('right-panel-active');
    });

    signInButton.addEventListener('click', () => {
      container.classList.remove('right-panel-active');
    });
  </script>
</body>

</html>