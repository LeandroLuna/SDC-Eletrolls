<?php
include('./database_connection.php');

$column = array("id", "centro", "cargo", "dt_abertura");

$query = "SELECT * FROM vagas WHERE id IN (25, 16, 10, 8)";

if (isset($_POST["search"]["value"])) {
    $query .= '
    AND cargo LIKE "%' . $_POST["search"]["value"] . '%"
    OR cargo LIKE "%' . $_POST["search"]["value"] . '%" AND id IN (25, 16, 10, 8)
    OR dt_abertura LIKE "%' . $_POST["search"]["value"] . '%" AND id IN (25, 16, 10, 8)
    OR centro LIKE "%' . $_POST["search"]["value"] . '%" AND id IN (25, 16, 10, 8)
    ';
}

if (isset($_POST["order"])) {
    $query .= 'ORDER BY ' . $column[$_POST['order']['0']['column']] . ' ' . $_POST['order']['0']['dir'] . ' ';
} else {
    $query .= 'ORDER BY id DESC ';
}

$query1 = '';

if ($_POST["length"] != -1) {
    $query1 = 'LIMIT ' . $_POST['start'] . ', ' . $_POST['length'];
}

$statement = $connect->prepare($query);

$statement->execute();

$number_filter_row = $statement->rowCount();

$statement = $connect->prepare($query . $query1);

$statement->execute();

$result = $statement->fetchAll();

$data = array();

foreach ($result as $row) {
    $sub_array = array();
    $sub_array[] = $row['id'];
    $sub_array[] = $row['centro'];
    $sub_array[] = $row['cargo'];
    $sub_array[] = $row['dt_abertura'];
    $data[] = $sub_array;
}

function count_all_data($connect)
{
    $query = "SELECT * FROM vagas WHERE 'ids' IN (25, 16, 10, 8)";
    $statement = $connect->prepare($query);
    $statement->execute();
    return $statement->rowCount();
}

$output = array(
    'draw'   => intval($_POST['draw']),
    'recordsTotal' => count_all_data($connect),
    'recordsFiltered' => $number_filter_row,
    'data'   => $data
);

echo json_encode($output);
