<?php
session_start();
include('../../subpages/signin+up/config.php');

if (empty($_POST['lemail']) || empty($_POST['lsenha'])) {
    header('Location: login_homepage.php');
    exit();
}

$login_email = mysqli_real_escape_string($conn, $_POST['lemail']);
$login_senha = mysqli_real_escape_string($conn, $_POST['lsenha']);


$query = "select email, senha from usuarios where email = '{$login_email}' and senha = md5('{$login_senha}')";
// $_SESSION['Nome'] = "Leonidas"; USAR AMANHA POSSIVELMENTE

$result = mysqli_query($conn, $query);

$row = mysqli_num_rows($result);

if ($row == 1) {
    $_SESSION['lemail'] = $login_email;
    header('Location: ..\signin+up/new_user/match/cadastro_vagas.php');
    exit();
} else {
    header('Location: login_homepage.php');
    exit();
}
