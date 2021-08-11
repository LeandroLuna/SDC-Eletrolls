<?php
session_start();
include('../../signin+up/config.php');

if (empty($_POST['email']) || empty($_POST['password'])) {
    header('Location: ..\login_homepage.php');
    exit();
}

$login_email = mysqli_real_escape_string($conn, $_POST['email']);
$login_senha = mysqli_real_escape_string($conn, $_POST['password']);


$query = "select email, senha from funcionarios where email = '{$login_email}' and senha = '{$login_senha}'";

$result = mysqli_query($conn, $query);
$row = mysqli_num_rows($result);

if ($row == 1) {
    header('Location: .\home.php');
    exit();
} else {
    header('Location: ..\login_homepage.php');
    exit();
}
