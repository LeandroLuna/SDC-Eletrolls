<?php
session_start();
include('./config.php');

if (empty($_POST['lemail']) || empty($_POST['lsenha'])) {
    header('Location: signin_up.php');
    exit();
}

$login_email = mysqli_real_escape_string($conn, $_POST['lemail']);
$login_senha = mysqli_real_escape_string($conn, $_POST['lsenha']);


$query = "select id, email from usuarios where email = '{$login_email}' and senha = md5('{$login_senha}')";

$result = mysqli_query($conn, $query);

$row = mysqli_num_rows($result);

if ($row == 1) {
    $_SESSION['lemail'] = $login_email;
    header('Location: ..\login/painel.php');
    exit();
} else {
    header('Location: signin_up.php');
    exit();
}
