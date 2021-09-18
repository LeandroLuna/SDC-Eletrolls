$(document).ready(function () {
  var table = $('#tabela').DataTable({
    language: {
      url: '//cdn.datatables.net/plug-ins/1.11.1/i18n/pt_br.json',
    },
    processing: true,
    serverSide: true,
    responsive: true,
    ajax: {
      url: 'fetch.php',
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
        data: 'score'
      },
    ],
    columnDefs: [{
        data: 'score',
        render: function score(data, type, row) {
          var somar_dados = 0;
          if (row[1] == 'SP' || row[1] == 'RJ') {
            somar_dados = somar_dados + 5;
          }
          if (row[1] == 'MG') {
            somar_dados = somar_dados + 3;
          }
          if (
            row[2] == 'Estagiário' ||
            row[2] == 'Desenvolvedor Senior' ||
            row[2] == 'Estagiario de TI'
          ) {
            somar_dados = somar_dados + 10;
          }

          var date1 = new Date(row[3]);
          var date2 = new Date('Jan 10, 2020');

          if (date1 > date2) {
            somar_dados = somar_dados + 4;
          } else {
            somar_dados = somar_dados + 2;
          }

          var porcentagem = ((somar_dados / 19) * 100).toFixed(2);
          return porcentagem.concat('%');
        },
        targets: 4,
        orderable: false,
      },
      {
        targets: -1,
        data: null,
        defaultContent: "<button style='background-color: #4CAF50; color: white; border-radius: 2px; display: inline-block; text-aling: center; padding: 2px'>Candidatar</button>",
        orderable: false,
        className: 'text-center',
        width: '4%',
      },
    ],
    order: [
      [3, 'desc']
    ],
  });

  function _(element) {
    return document.getElementById(element);
  }

  $('#tabela tbody').on('click', 'button', function () {
    var dados_nao_convertidos = table.row($(this).parents('tr')).data();
    $.ajax({
      type: "POST",
      url: "action.php",
      data: {
        data: dados_nao_convertidos[0]
      },
    }).done(function (msg) {
      alert("Usuario candidatado a vaga de ID " + dados_nao_convertidos[0] + " com sucesso");
    })
  });

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