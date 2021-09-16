<?php
session_start();
$conexao = mysqli_connect('localhost', 'root', '', 'sdc_login_register');

$email_candidato = $_SESSION['Email'];
$sql = "SELECT id FROM usuarios WHERE email= '$email_candidato' limit 1";
$result = mysqli_query($conexao, $sql);
$id_candidato = mysqli_fetch_assoc($result);
$id_cand = $id_candidato['id']; // id do candidato

$vaga_id = $_POST['data']; // id da vaga

$query = "INSERT INTO vagas_usuarios (user_id, vaga_id) VALUES ('$id_cand', '$vaga_id')";

if ($conexao->query($query) === TRUE) {
    echo "Nova informação inserida com sucesso!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
