$(document).ready(function () {
    var table = $('#tabela').DataTable({
        language: {
            url: '//cdn.datatables.net/plug-ins/1.11.1/i18n/pt_br.json',
        },
        processing: true,
        serverSide: true,
        ajax: {
            url: 'aplicacoes_db.php',
            type: 'POST',
        },
        'columns:': [{
                data: 'id'
            },
            {
                data: 'centro'
            },
            {
                data: 'cargo'
            },
            {
                data: 'dt_abertura'
            },
            {
                data: 'situacao'
            },
        ],
        order: [
            [3, 'desc']
        ],
        'columnDefs': [{
            data: 'situacao',
            render: function (data) {
                data = "ABERTA";
                return data;
            },
            targets: 4,
            orderable: false,
        }],
    });

    function _(element) {
        return document.getElementById(element);
    }

    $('#tabela tbody').on('click', 'td:not(:last-child)', 'tr', function () {
        var data = table.row(this).data();
        alert(
            'Você clicou na vaga "' +
            data[2] +
            '", do centro "' +
            data[1] +
            '" de ID: ' +
            data[0]
        );

    });

    $('.sidebar-btn').click(function () {
        $('.wrapper').toggleClass('collapse');
    });
});