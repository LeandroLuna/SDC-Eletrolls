
$(document).ready(function() {
    var table = $('#tabela').DataTable({
        "language": {
            "url": "//cdn.datatables.net/plug-ins/1.11.1/i18n/pt_br.json"
        },
        "processing": true,
        "serverSide": true,
        "order": [
            [3, "asc"]
        ],
        "ajax": {
            url: "fetch.php",
            type: "POST"
        }
    });

    // $('#tabela').on('draw.dt', function() {
    //     $('#tabela').Tabledit({
    //         url: 'action.php',
    //         dataType: 'json',
    //         columns: {
    //             identifier: [0, 'centro'],
    //             editable: [
    //                 [1, 'cargo'],
    //                 [2, 'dt_abertura'],
    //                 [3, 'score']
    //             ]
    //         },
    //         restoreButton: false,
    //         onSuccess: function(data, textStatus) {
    //             if (data.action == 'delete') {
    //                 $('#' + data.id).remove();
    //                 $('#tabela').DataTable().ajax.reload();
    //             }
    //         }
    //     });
    // });

    function _(element) {
        return document.getElementById(element);
    }

    $('#tabela tbody').on('click', 'tr', function() {
        var data = table.row(this).data();
        alert('Você clicou na vaga "' + data[2] + '", do centro "' + data[1] + '" de ID: ' + data[0]);
    });

    $(".sidebar-btn").click(function() {
        $(".wrapper").toggleClass("collapse");
    });
});

