<?php

include('database_connection.php');

if ($_POST['action'] == 'edit') {
    $data = array(
        ':centro'  => $_POST['centro'],
        ':cargo'  => $_POST['cargo'],
        ':dt_abertura'   => $_POST['dt_abertura'],
        ':id'    => $_POST['id']
    );

    $query = "
    UPDATE vagas 
    SET centro = :centro, 
    cargo = :cargo, 
    dt_abertura = :dt_abertura 
    WHERE id = :id
    ";
    $statement = $connect->prepare($query);
    $statement->execute($data);
    echo json_encode($_POST);
}

if ($_POST['action'] == 'delete') {
    $query = "
    DELETE FROM vagas 
    WHERE id = '" . $_POST["id"] . "'
    ";
    $statement = $connect->prepare($query);
    $statement->execute();
    echo json_encode($_POST);
}

if ($_POST["action"] == 'Add') {
    $output = array();
    $centro = $_POST["centro"];
    $cargo = $_POST["cargo"];
    $dt_abertura = $_POST["dt_abertura"];

    if (empty($centro)) {
        $output['centro_error'] = 'O nome do centro é obrigatório';
    }

    if (empty($cargo)) {
        $output['cargo_error'] = 'Cargo é obrigatório';
    }

    if (empty($dt_abertura)) {
        $output['dt_abertura_error'] = 'A data de criação da vaga é obrigatória';
    }

    if (count($output) > 0) {
        echo json_encode($output);
    } else {
        $data = array(
            ':centro'        =>    $centro,
            ':cargo'        =>    $cargo,
            ':dt_abertura'            =>    $dt_abertura,
        );

        $query = "
				INSERT INTO vagas 
				(centro, cargo, dt_abertura) 
				VALUES (:centro, :cargo, :dt_abertura)
				";

        $statement = $connect->prepare($query);

        if ($statement->execute($data)) {
            $output['success'] = '<div class="alert alert-success">Nova vaga criada! </div>';
            echo json_encode($output);
        }
    }
}
