<?php
include('../config.php');

if (isset($_POST["editar"])) {
    $nome_completo = mysqli_real_escape_string($conn, $_POST["cnome_completo"]);
    $email = mysqli_real_escape_string($conn, $_POST["cemail"]);
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

    $query = "UPDATE usuarios SET nome='$nome_completo', email='$email', cpf='$cpf', data_nascimento='$data_nascimento', endereco='$endereco', telefone='$telefone', genero='$genero',instituicao1='$instituicao1',instituicao2='$instituicao2',instituicao1='$instituicao3', habilidades='$habilidades', idiomas='$idiomas', empregador1='$empregador1', entrada_saida1='$entrada_saida1', cargo1='$cargo1', salario1='$salario1', saida1='$saida1', empregador2='$empregador2', entrada_saida2='$entrada_saida2', cargo2='$cargo2', salario2='$salario2', saida2='$saida2', empregador3='$empregador3', entrada_saida3='$entrada_saida3', cargo3='$cargo3', salario3='$salario3', saida3='$saida3' WHERE NOME = '$nome_completo'";

    if (mysqli_query($conn, $query)) {
        echo "<script type='text/javascript'>alert('Usuario cadastrado com sucesso! Redirecionando para painel de vagas..');</script>";
        header('Location: ../../login/painel.php');
        exit();
    } else {
        echo "<script type='text/javascript'>alert('Falha ao cadastrar usuario. Tente novamente.');history.go(-1);</script>";
    }
}
