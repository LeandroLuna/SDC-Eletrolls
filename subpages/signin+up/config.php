<?php

$server = "localhost";
$username = "root";
$password = "";
$database = "sdc_login_register";

$conn = mysqli_connect($server, $username, $password, $database);

if (!$conn) {
    die("<script>alert('Conexão Falhou.')</script>");
}
