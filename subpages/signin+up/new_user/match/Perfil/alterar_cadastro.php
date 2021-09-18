<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SDC | Candidatura</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="/subpages/Login/funcionarios/library/jstable.css" />
    <script src="/subpages/Login/funcionarios/library/jstable.min.js" type="text/javascript"></script>
    <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="https://markcell.github.io/jquery-tabledit/assets/js/tabledit.min.js"></script>
    <link rel="stylesheet" href="./style.css" />

</head>

<body>
    <div class="wrapper">
        <div class="header">
            <div class="header-menu">
                <div class="title">Shopping do <span>Cidadão</span>
                </div>
                <div class="sidebar-btn">
                    <i class="fas fa-bars"></i>
                </div>
                <ul>
                    <li><a href="#"><i class="fas fa-bell"></i></a></li>
                    <li><a href="#"><i class="fas fa-power-off"></i></a></li>
                </ul>
            </div>
        </div>

        <div class="sidebar">
            <div class="sidebar-menu">
                <center class="profile">
                    <img src="../../../../../images/user.png" alt="">
                    <p> <?php echo $_SESSION['Nome'] ?> </p>
                </center>

                <li class="item" id="dashboard">
                    <a href="#dashboard" class="menu-btn">
                        <i class="fas fa-desktop"></i><span>Painel de Controle<i class="fas fa-chevron-down drop-down"></i></span>
                    </a>

                    <div class="sub-menu">
                        <a href="./aplicacoes.php"><i class="fas fa-check-double"></i><span>Suas aplicações</span></a>
                        <a href="./cadastro_vagas.php"><i class="fas fa-database"></i><span>Vagas em aberto</span></a>
                    </div>
                </li>

                <li class="item" id="profile">
                    <a href="#profile" class="menu-btn">
                        <i class="fas fa-user-circle"></i> <span>Perfil <i class="fas fa-chevron-down drop-down"></i></span>
                    </a>

                    <div class="sub-menu">
                        <a href="#"><i class="fas fa-image"></i><span>Foto</span></a>
                        <a href=""><i class="fas fa-address-card"></i><span>Informações</span></a>
                    </div>
                </li>

                <li class="item" id="messages">
                    <a href="#messages" class="menu-btn">
                        <i class="fas fa-envelope"></i> <span>Mensagens <i class="fas fa-chevron-down drop-down"></i></span>
                    </a>

                    <div class="sub-menu">
                        <a href="#"><i class="fas fa-envelope"></i><span>Caixa de Entrada</span></a>
                        <a href="#"><i class="fas fa-envelope-square"></i><span>Enviadas</span></a>
                    </div>
                </li>

                <li class="item" id="settings">
                    <a href="#settings" class="menu-btn">
                        <i class="fas fa-cog"></i> <span>Configurações <i class="fas fa-chevron-down drop-down"></i></span>
                    </a>
                    <div class="sub-menu">
                        <a href="#"><i class="fas fa-at"></i><span>E-mail</span></a>
                        <a href="#"><i class="fas fa-lock"></i><span>Senha</span></a>
                    </div>
                </li>

                <li class="item">
                    <a href="#" class="menu-btn">
                        <i class="fas fa-info-circle"></i><span>Sobre</span>
                    </a>
                </li>

            </div>
        </div>

        <!-- container principal -->
        <div class="main-container" style="padding-bottom: 20px;">
            <h4>Informações Pessoais</h4>
            <form action="../../../new_user/edit_info.php" method="POST">
                <div class="form-group">
                    <label for="">Nome Completo</label>
                    <input type="text" name="" value="<?php echo $_SESSION['Nome'] ?>" placeholder="Nome e sobrenome" id="" class="form-control" />
                </div>
                <div class="form-group">
                    <label for="">E-mail</label>
                    <input type="email" name="" value="<?php echo $_SESSION['Email'] ?>" placeholder="E-mail para contato" id="" class="form-control" />
                </div>
                <div class="form-group">
                    <label for="">CPF</label>
                    <input type="text" name="" placeholder="Ex: 000.000.000-00" id="" class="form-control" />
                </div>
                <div class="form-group">
                    <label for="">Data de Nascimento</label>
                    <input type="text" name="" placeholder="Ex: 01-12-1999 " id="" class="form-control" />
                </div>
                <div class="form-group">
                    <label for="">Endereço</label>
                    <input type="text" name="" placeholder="Ex: Av. Paulista, 99 - São Paulo - SP - 99999-99 " id="" class="form-control" />
                </div>
                <div class="form-group">
                    <label for="">Telefone</label>
                    <input type="text" name="" placeholder="Número para eventuais contatos. Ex: (99)99999-9999" id="" class="form-control" />
                </div>
                <div class="form-group">
                    <label for="">Gênero</label>
                    <select class="custom-select myinput" name="class" id="class">
                        <option value="male">Homem</option>
                        <option value="female">Mulher</option>
                        <option value="other">Outros</option>
                    </select>
                </div>

                <h4>Educação e Formação Acadêmica</h4>
                <form action="">
                    <div class="form-group">
                        <label for="">Instituições Frequentadas | Diploma | Data de
                            Conclusão</label>
                        <input type="text" name="" placeholder="Instituição 1" id="" class="form-control" />
                        <input type="text" name="" placeholder="Instituição 2" id="" class="form-control" />
                        <input type="text" name="" placeholder="Instituição 3" id="" class="form-control" />
                    </div>
                    <div class="form-group">
                        <label for="">Habilidades e Qualificações</label>
                        <input type="text" name="" placeholder="Ex: Excel Avançado, PowerBI, Python.. (SEPARE POR ',')" id="" class="form-control" />
                    </div>
                    <div class="form-group">
                        <label for="">Idiomas</label>
                        <input type="text" name="" placeholder="Ex: PT NATIVO, EN C2, FR A1.. (SEPARE POR ',')" id="" class="form-control" />
                    </div>

                    <h4>Experiência de trabalho</h4>
                    <form action="">
                        <div class="form-group">
                            <label for="">Última Experiência</label>
                            <input type="text" name="" placeholder="Empregador" id="" class="form-control" />
                            <input type="text" name="" placeholder="Data de entrada e saida. Ex: 12/2018 - 06/2020" id="" class="form-control" /><input type="text" name="" placeholder="Cargo e Responsabilidades" id="" class="form-control" /><input type="text" name="" placeholder="Salário" id="" class="form-control" /><input type="text" name="" placeholder="Motivo de Saída" id="" class="form-control" />
                        </div>
                        <div class="form-group">
                            <label for="">Penúltima Experiência</label>
                            <input type="text" name="" placeholder="Empregador" id="" class="form-control" />
                            <input type="text" name="" placeholder="Data de entrada e saida. Ex: 12/2018 - 06/2020" id="" class="form-control" /><input type="text" name="" placeholder="Cargo e Responsabilidades" id="" class="form-control" /><input type="text" name="" placeholder="Salário" id="" class="form-control" /><input type="text" name="" placeholder="Motivo de Saída" id="" class="form-control" />
                        </div>
                        <div class="form-group">
                            <label for="">Antepenúltima Experiência</label>
                            <input type="text" name="" placeholder="Empregador" id="" class="form-control" />
                            <input type="text" name="" placeholder="Data de entrada e saida. Ex: 12/2018 - 06/2020" id="" class="form-control" /><input type="text" name="" placeholder="Cargo e Responsabilidades" id="" class="form-control" /><input type="text" name="" placeholder="Salário" id="" class="form-control" /><input type="text" name="" placeholder="Motivo de Saída" id="" class="form-control" />
                        </div>

                        <div class="buttons">
                            <input type="button" value="Excluir cadastro" class="excluir" />
                            <input type="button" value="Atualizar informações" class="submit" />
                        </div>
        </div>
    </div>
</body>

<script type="text/javascript">
    $('.sidebar-btn').click(function() {
        $('.wrapper').toggleClass('collapse');
    });
</script>

</html>