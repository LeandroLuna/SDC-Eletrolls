<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SDC | Funcionarios</title>
    <link rel="stylesheet" href="./style.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css" />
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
</head>

<body>
    <header>
        <a href="/myphp/index.html#home" class="logo">Recrutamento</a>
        <div class="toggle"></div>
        <ul>
            <li><a href="../logout.php">Sair</a></li>
        </ul>
    </header>
    <br><br><br>

    <h2>Gerenciamento de Vagas</h2>
    <table id="tabela" class="display" style="width:100%">
        <thead>
            <tr>
                <th>ID</th>
                <th>Centro</th>
                <th>Cargo</th>
                <th>Data de Abertura</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include('../../signin+up/config.php');
            $sql = "SELECT * FROM vagas";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr><td>" . $row["id"] . "</td><td>" . $row["centro"] . "</td><td>" . $row["cargo"] . "</td><td>" . $row["dt_abertura"] . "</td></tr>";
                }
            } else {
                echo "Sem resultados";
            }
            $conn->close();
            ?>
        </tbody>
        <!-- <tfoot>
            <tr>
                <th>ID</th>
                <th>Centro</th>
                <th>Cargo</th>
                <th>Data de Abertura</th>
            </tr>
        </tfoot> -->
    </table>
</body>

<script>
    $(document).ready(function() {
        var table = $('#tabela').DataTable({
            "language": {
                "url": "//cdn.datatables.net/plug-ins/1.10.25/i18n/Portuguese.json"
            }
        })

        $('#tabela tbody').on('click', 'tr', function() {
            var data = table.row(this).data();
            alert('Você clicou na vaga "' + data[2] + '", do centro "' + data[1] + '" de ID: ' + data[0]);
        });
    });
</script>

</html>

<!-- Mais funcionalidades para tabela: https://datatables.net/examples/index -->
<!-- https://datatables.net/examples/api/ -->
<!-- https://www.youtube.com/results?search_query=how+to+delete+datatable+row+in+jquery -->