<?php
session_start();

$server = "localhost";
$username = "root";
$password = "";
$database = "sdc_login_register";

$conn = mysqli_connect($server, $username, $password, $database);
if (!$conn) {
    die("<script>alert('Conexão Falhou.')</script>");
}

$email_candidato = $_SESSION['Email'];
$sql = "SELECT id FROM usuarios WHERE email= '$email_candidato' limit 1";
$result = mysqli_query($conn, $sql);
$id_candidato = mysqli_fetch_assoc($result);
$id_cand = $id_candidato['id']; // id do candidato

if (isset($_POST["excluir"])) {
    $query = "DELETE FROM vagas_usuarios WHERE user_id = '$id_cand'";
    $query1 = "DELETE FROM usuarios WHERE id='$id_cand'";

    if ($conn->query($query) === TRUE && $conn->query($query1) === TRUE) {
        session_destroy();
        header('Location: https://www.localhost/myphp/');
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

if (isset($_POST["atualizar"])) {
    $nome_completo = mysqli_real_escape_string($conn, $_POST["cnome_completo"]);
    $cpf = mysqli_real_escape_string($conn, $_POST["ccpf"]);
    $data_nascimento = mysqli_real_escape_string($conn, $_POST["cnascimento"]);
    $endereco = mysqli_real_escape_string($conn, $_POST["cendereco"]);
    $telefone = mysqli_real_escape_string($conn, $_POST["ctelefone"]);
    $genero = mysqli_real_escape_string($conn, $_POST["cgenero"]);
    $instituicao1 = mysqli_real_escape_string($conn, $_POST["cinstituicao1"]);
    $instituicao2 = mysqli_real_escape_string($conn, $_POST["cinstituicao2"]);
    $instituicao3 = mysqli_real_escape_string($conn, $_POST["cinstituicao3"]);
    $habilidades = mysqli_real_escape_string($conn, $_POST["chabilidades"]);
    $idiomas = mysqli_real_escape_string($conn, $_POST["cidiomas"]);
    $empregador1 = mysqli_real_escape_string($conn, $_POST["cempregador1"]);
    $entrada_saida1 = mysqli_real_escape_string($conn, $_POST["centrada_saida1"]);
    $cargo1 = mysqli_real_escape_string($conn, $_POST["ccargo1"]);
    $salario1 = mysqli_real_escape_string($conn, $_POST["csalario1"]);
    $saida1 = mysqli_real_escape_string($conn, $_POST["csaida1"]);
    $empregador2 = mysqli_real_escape_string($conn, $_POST["cempregador2"]);
    $entrada_saida2 = mysqli_real_escape_string($conn, $_POST["centrada_saida2"]);
    $cargo2 = mysqli_real_escape_string($conn, $_POST["ccargo2"]);
    $salario2 = mysqli_real_escape_string($conn, $_POST["csalario2"]);
    $saida2 = mysqli_real_escape_string($conn, $_POST["csaida2"]);
    $empregador3 = mysqli_real_escape_string($conn, $_POST["cempregador3"]);
    $entrada_saida3 = mysqli_real_escape_string($conn, $_POST["centrada_saida3"]);
    $cargo3 = mysqli_real_escape_string($conn, $_POST["ccargo3"]);
    $salario3 = mysqli_real_escape_string($conn, $_POST["csalario3"]);
    $saida3 = mysqli_real_escape_string($conn, $_POST["csaida3"]);

    $query = "UPDATE usuarios SET cpf='$cpf', data_nascimento='$data_nascimento', endereco='$endereco', telefone='$telefone', genero='$genero',instituicao1='$instituicao1',instituicao2='$instituicao2',instituicao1='$instituicao3', habilidades='$habilidades', idiomas='$idiomas', empregador1='$empregador1', entrada_saida1='$entrada_saida1', cargo1='$cargo1', salario1='$salario1', saida1='$saida1', empregador2='$empregador2', entrada_saida2='$entrada_saida2', cargo2='$cargo2', salario2='$salario2', saida2='$saida2', empregador3='$empregador3', entrada_saida3='$entrada_saida3', cargo3='$cargo3', salario3='$salario3', saida3='$saida3' WHERE id='$id_cand'";

    if ($conn->query($query) === TRUE) {
        $_SESSION['Nome'] = $nome_completo;
        $editar_infos = array();
        $editar_infos = array($nome_completo, $email_candidato, $cpf, $data_nascimento, $endereco, $telefone, $genero, $instituicao1, $instituicao2, $instituicao3, $habilidades, $idiomas, $empregador1, $entrada_saida1, $cargo1, $salario1, $saida1, $empregador2, $entrada_saida2, $cargo2, $salario2, $saida2, $empregador3, $entrada_saida3, $cargo3, $salario3, $saida3);
        $_SESSION['infos'] = $editar_infos;
        header('Location: ./alterar_cadastro.php#profile');
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
