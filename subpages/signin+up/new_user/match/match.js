$(document).ready(function() {
    var table = $('#tabela').DataTable({
        "language": {
            "url": "//cdn.datatables.net/plug-ins/1.11.1/i18n/pt_br.json"
        },
        "processing": true,
        "serverSide": true,
        "ajax": {
            url: "fetch.php",
            type: "POST",
        },
        "columnDefs": [
            {
                "data" : null,
                "render": function ( data, type, row ) {
                    var somar_dados = 0;
                    if(row[1] == 'SP' || row[1] == 'RJ'){
                        somar_dados = somar_dados+5;
                    }
                    if(row[1] == 'MG'){
                        somar_dados = somar_dados+3;
                    }
                    if(row[2] == 'Estagiário' || row[2] == 'Desenvolvedor Senior' || row[2] == 'Estagiario de TI'){
                        somar_dados = somar_dados+10;
                    }
                    
                    var date1 = new Date(row[3]);
                    var date2 = new Date('Jan 10, 2020');
                    
                    if(date1 > date2){
                        somar_dados = somar_dados + 4;
                    }
                    else{
                        somar_dados = somar_dados + 2;
                    }
                    
                    var porcentagem = ((somar_dados/24)*100).toFixed(2);
                    return porcentagem.concat('%');
                },
                "targets": 4,
            },
            {
                "targets": -1,
                "data" : null,
                "defaultContent": "<button  style='background-color: #4CAF50; color: white; border-radius: 2px; display: inline-block; text-aling: center; padding: 2px'>Candidatar</button>",
                "orderable": false,
                "className": "text-center",
                "width": "4%"
            }
        ],
        "order": [[0, "asc"]], 
    });

    function _(element) {
        return document.getElementById(element);
    }

    $('#tabela tbody').on( 'click', 'button', function () {
        var dados = table.row( $(this).parents('tr') ).data();
        alert( "O ID é o " + dados[ 0 ]);
    } );

    $('#tabela tbody').on('click', 'tr', function() {
        var data = table.row(this).data();
        alert('Você clicou na vaga "' + data[2] + '", do centro "' + data[1] + '" de ID: ' + data[0]);
    });

    $(".sidebar-btn").click(function() {
        $(".wrapper").toggleClass("collapse");
    });
});