<?php
include('./config.php');

if (isset($_POST["cadastro"])) {
    $nome = mysqli_real_escape_string($conn, $_POST["cnome"]);
    $email = mysqli_real_escape_string($conn, $_POST["cemail"]);
    $senha = mysqli_real_escape_string($conn, md5($_POST["csenha"]));

    $verificar_email = mysqli_num_rows(mysqli_query($conn, "SELECT email FROM usuarios WHERE email='$email'"));

    if ($verificar_email > 0) {
        echo "<script type='text/javascript'>alert('E-mail já existente em nosso banco de dados.');history.go(-1);</script>";
    } else {
        $sql = "INSERT INTO usuarios (nome, email, senha) VALUES ('$nome', '$email', '$senha')";
        $resultado = mysqli_query($conn, $sql);
        if ($resultado) {
            session_start();
            $_SESSION['Nome'] = $nome;
            $_SESSION['Email'] = $email;
            header('Location: ./new_user/new_user.php');
            exit();
        } else {
            echo "<script type='text/javascript'>alert('Falha ao cadastrar novo usuario. Tente novamente.');history.go(-1);</script>";
        }
    }
}
