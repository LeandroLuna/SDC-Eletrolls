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
    <script src="https://cdn.datatables.net/buttons/2.0.0/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/select/1.3.3/js/dataTables.select.min.js"></script>
    <script src="https://cdn.datatables.net/datetime/1.1.1/js/dataTables.dateTime.min.js"></script>
    <script src="https://editor.datatables.net/extensions/Editor/js/dataTables.editor.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="https://markcell.github.io/jquery-tabledit/assets/js/tabledit.min.js"></script>

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

    <h2></h2>



    <div class="panel panel-default">
        <div class="panel-heading">Gerenciamento de Vagas</div>
        <div class="panel-body">
            <div class="table-responsive">
                <table id="tabela" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Centro</th>
                            <th>Cargo</th>
                            <th>Data de Abertura</th>
                        </tr>
                    </thead>
                    <tbody></tbody>
                </table>
            </div>
        </div>
    </div>
    </div>

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
            },
            "processing": true,
            "serverSide": true,
            "order": [],
            "ajax": {
                url: "fetch.php",
                type: "POST"
            }
        });

        $('#tabela').on('draw.dt', function() {
            $('#tabela').Tabledit({
                url: 'action.php',
                dataType: 'json',
                columns: {
                    identifier: [0, 'id'],
                    editable: [
                        [1, 'centro'],
                        [2, 'cargo'],
                        [3, 'dt_abertura']
                    ]
                },
                restoreButton: false,
                onSuccess: function(data, textStatus, jqXHR) {
                    if (data.action == 'delete') {
                        $('#' + data.id).remove();
                        $('#tabela').DataTable().ajax.reload();
                    }
                }
            });
        });

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