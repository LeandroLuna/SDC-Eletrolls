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

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="./library/jstable.min.css" />
    <script src="./library/jstable.min.js" type="text/javascript"></script>
    <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="https://markcell.github.io/jquery-tabledit/assets/js/tabledit.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap.min.css"></script>

    <link rel="stylesheet" href="./style.css" />

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

    <div class="container">
        <span id="success_message"></span>
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col col-md-6">Gerenciamento das Vagas</div>
                    <div class="col col-md-6" align="right">
                        <button type="button" name="add_data" id="add_data" class="btn btn-success btn-sm">Criar nova vaga</button>
                    </div>
                </div>
            </div>
            <div class="card-body">
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
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>

<!-- Inicio Modal -->
<div class="modal" id="vaga_modal" tabindex="-1">
    <form method="post" id="vaga_form">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modal_title">Nova vaga</h5>
                    <button type="button" class="btn-close" id="close_modal" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label">Centro</label>
                        <input type="text" name="centro" id="centro" class="form-control" />
                        <span class="text-danger" id="centro_error"></span>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Cargo</label>
                        <input type="text" name="cargo" id="cargo" class="form-control" />
                        <span class="text-danger" id="cargo_error"></span>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Data de abertura</label>
                        <input type="date" name="dt_abertura" id="dt_abertura" class="form-control" />
                        <span class="text-danger" id="dt_abertura_error"></span>
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="hidden" name="vaga_id" id="vaga_id" />
                    <input type="hidden" name="action" id="action" value="Add" />
                    <button type="button" class="btn btn-primary" id="action_button">Criar</button>
                </div>
            </div>
        </div>
    </form>
</div>

<div class="modal-backdrop fade show" id="modal_backdrop" style="visibility: hidden;"></div>
<!-- Fim Modal -->



<!-- Modal Nova -->
<div class="modal fade" tabindex="-1" role="dialog" id="myModal">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Relação de candidatos inscritos na vaga</h4>
            </div>
            <div class="modal-body">
                <!-- <p>One fine body&hellip;</p> -->
                <table id="exemplo" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Nome</th>
                            <th>Email</th>
                            <th>Telefone</th>
                            <th>Endereco</th>
                            <th>Score</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Leonidas</td>
                            <td>Leonidas@gmail.com</td>
                            <td>(11)98877-5542</td>
                            <td>Av. Paulista, SP</td>
                            <td>76.6%</td>
                        </tr>
                        <tr>
                            <td>Mr Octopus</td>
                            <td>octo@gmail.com</td>
                            <td>(11)98374-1232</td>
                            <td>Itaquera, SP</td>
                            <td>43.5%</td>
                        </tr>
                        <tr>
                            <td>Michal Jackson</td>
                            <td>billie.jean@gmail.com</td>
                            <td>(11)99485-2343</td>
                            <td>Murumbi, SP</td>
                            <td>70.2%</td>
                        </tr>
                        <tr>
                            <td>Pedro Alvares</td>
                            <td>Cabral@gmail.com</td>
                            <td>(11)97253-0343</td>
                            <td>Vila Mariana, SP</td>
                            <td>80.9%</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<script>
    $(document).ready(function() {
        var table = $('#tabela').DataTable({
            " language": {
                "url": "//cdn.datatables.net/plug-ins/1.11.1/i18n/pt_br.json"
            },
            "processing": true,
            "serverSide": true,
            "order": [
                [0, "asc"]
            ],
            "ajax": {
                url: "fetch.php",
                type: "POST"
            },
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

        function _(element) {
            return document.getElementById(element);
        }

        function open_modal() {
            _('modal_backdrop').style.visibility = 'visible';
            _('vaga_modal').style.visibility = 'visible';
            _('modal_backdrop').style.display = 'block';
            _('vaga_modal').style.display = 'block';
            _('vaga_modal').classList.add('show');
        }

        function close_modal() {
            _('modal_backdrop').style.visibility = 'hidden';
            _('vaga_modal').style.visibility = 'hidden';
            _('modal_backdrop').style.display = 'none';
            _('vaga_modal').style.display = 'none';
            _('vaga_modal').classList.remove('show');
        }

        function reset_data() {
            _('vaga_form').reset();
            _('action').value = 'Add';
            _('centro_error').innerHTML = '';
            _('cargo_error').innerHTML = '';
            _('dt_abertura_error').innerHTML = '';
            _('modal_title').innerHTML = 'Criar vaga';
            _('action_button').innerHTML = 'Criar';
        }
        _('add_data').onclick = function() {
            open_modal();
            reset_data();
        }
        _('close_modal').onclick = function() {
            close_modal();
        }
        _('action_button').onclick = function() {
            var form_data = new FormData(_('vaga_form'));
            _('action_button').disabled = true;
            fetch('action.php', {
                method: "POST",
                body: form_data
            }).then(function(response) {
                return response.json();
            }).then(function(responseData) {
                _('action_button').disabled = false;
                if (responseData.success) {
                    close_modal();
                    _('success_message').innerHTML = responseData.success;
                    table.update();
                } else {
                    if (responseData.centro_error) {
                        _('centro_error').innerHTML = responseData.centro_error;
                    } else {
                        _('centro_error').innerHTML = '';
                    }
                    if (responseData.cargo_error) {
                        _('cargo_error').innerHTML = responseData.cargo_error;
                    } else {
                        _('cargo_error').innerHTML = '';
                    }
                    if (responseData.dt_abertura_error) {
                        _('dt_abertura_error').innerHTML = responseData.dt_abertura_error;
                    } else {
                        _('dt_abertura_error').innerHTML = '';
                    }
                }
            });
        }
        $('#tabela tbody').on('click', 'td:not(:last-child)', 'tr', function() {
            var data = table.row(this).data();
            alert('Você clicou na vaga "' + data[2] + '" , do centro "' + data[1] + '" de ID: ' + data[0]);
            $(' #myModal').modal('show');
            $(document).ready(function() {
                $('#exemplo').DataTable({
                    "language": {
                        "url": "//cdn.datatables.net/plug-ins/1.11.1/i18n/pt_br.json"
                    },
                    "order": [
                        [4, "desc"]
                    ],
                });
            });
        });
    });
</script>

</html>