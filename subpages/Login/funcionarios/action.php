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
