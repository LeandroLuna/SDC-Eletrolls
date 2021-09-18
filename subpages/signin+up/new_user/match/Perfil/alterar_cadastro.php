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
                        <a href="../aplicacoes.php"><i class="fas fa-check-double"></i><span>Suas aplicações</span></a>
                        <a href="../cadastro_vagas.php"><i class="fas fa-database"></i><span>Vagas em aberto</span></a>
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
            <form action="./actions.php" method="POST">
                <div class="form-group">
                    <label for="">Nome Completo</label>
                    <input type="text" name="cnome_completo" value="<?php echo $_SESSION['Nome'] ?>" placeholder="Nome e sobrenome" id="" class="form-control" />
                </div>
                <div class="form-group">
                    <label for="">CPF</label>
                    <input type="text" name="ccpf" value="<?php echo $_SESSION['infos'][2] ?>" maxlength="11" placeholder="Ex: 000.000.000-00" id="" class="form-control" />
                </div>
                <div class="form-group">
                    <label for="">Data de Nascimento</label>
                    <input type="date" name="cnascimento" value="<?php echo $_SESSION['infos'][3] ?>" placeholder="Ex: 01-12-1999 " id="" class="form-control" />
                </div>
                <div class="form-group">
                    <label for="">Endereço</label>
                    <input type="text" name="cendereco" value="<?php echo $_SESSION['infos'][4] ?>" placeholder="Ex: Av. Paulista, 99 - São Paulo - SP - 99999-99 " id="" class="form-control" />
                </div>
                <div class="form-group">
                    <label for="">Telefone</label>
                    <input type="tel" pattern="\([0-9]{2}\)[0-9]{5}-[0-9]{4}" name="ctelefone" value="<?php echo $_SESSION['infos'][5] ?>" placeholder="Número para eventuais contatos. Ex: (99)99999-9999" id="" class="form-control" />
                </div>
                <div class="form-group">
                    <label for="">Gênero</label>
                    <select class="custom-select myinput" name="cgenero" id="class">
                        <option selected="selected">
                            <?php
                            if ($_SESSION['infos'][6] == 'female') {
                                echo "Mulher";
                            } else {
                                echo "Homem";
                            }
                            ?>
                        </option>
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
                        <input type="text" name="cinstituicao1" value="<?php echo $_SESSION['infos'][7] ?>" placeholder="Instituição 1" id="" class="form-control" />
                        <input type="text" name="cinstituicao2" value="<?php echo $_SESSION['infos'][8] ?>" placeholder="Instituição 2" id="" class="form-control" />
                        <input type="text" name="cinstituicao3" value="<?php echo $_SESSION['infos'][9] ?>" placeholder="Instituição 3" id="" class="form-control" />
                    </div>
                    <div class="form-group">
                        <label for="">Habilidades e Qualificações</label>
                        <input type="text" name="chabilidades" value="<?php echo $_SESSION['infos'][10] ?>" placeholder="Ex: Excel Avançado, PowerBI, Python.. (SEPARE POR ',')" id="" class="form-control" />
                    </div>
                    <div class="form-group">
                        <label for="">Idiomas</label>
                        <input type="text" name="cidiomas" value="<?php echo $_SESSION['infos'][11] ?>" placeholder="Ex: PT NATIVO, EN C2, FR A1.. (SEPARE POR ',')" id="" class="form-control" />
                    </div>

                    <h4>Experiência de trabalho</h4>
                    <form action="">
                        <div class="form-group">
                            <label for="">Última Experiência</label>
                            <input type="text" name="cempregador1" value="<?php echo $_SESSION['infos'][12] ?>" placeholder="Empregador" id="" class="form-control" />
                            <input type="text" name="centrada_saida1" value="<?php echo $_SESSION['infos'][13] ?>" placeholder="Data de entrada e saida. Ex: 12/2018 - 06/2020" id="" class="form-control" /><input type="text" name="ccargo1" value="<?php echo $_SESSION['infos'][14] ?>" placeholder="Cargo e Responsabilidades" id="" class="form-control" /><input type="text" name="csalario1" value="<?php echo $_SESSION['infos'][15] ?>" placeholder="Salário" id="" class="form-control" /><input type="text" name="csaida1" value="<?php echo $_SESSION['infos'][16] ?>" placeholder="Motivo de Saída" id="" class="form-control" />
                        </div>
                        <div class="form-group">
                            <label for="">Penúltima Experiência</label>
                            <input type="text" name="cempregado2" value="<?php echo $_SESSION['infos'][17] ?>" placeholder="Empregador" id="" class="form-control" />
                            <input type="text" name="centrada_saida2" value="<?php echo $_SESSION['infos'][18] ?>" placeholder="Data de entrada e saida. Ex: 12/2018 - 06/2020" id="" class="form-control" /><input type="text" name="ccargo2" value="<?php echo $_SESSION['infos'][19] ?>" placeholder="Cargo e Responsabilidades" id="" class="form-control" /><input type="text" name="csalario2" value="<?php echo $_SESSION['infos'][20] ?>" placeholder="Salário" id="" class="form-control" /><input type="text" name="csaida2" value="<?php echo $_SESSION['infos'][21] ?>" placeholder="Motivo de Saída" id="" class="form-control" />
                        </div>
                        <div class="form-group">
                            <label for="">Antepenúltima Experiência</label>
                            <input type="text" name="cempregador3" value="<?php echo $_SESSION['infos'][22] ?>" placeholder="Empregador" id="" class="form-control" />
                            <input type="text" name="centrada_saida3" value="<?php echo $_SESSION['infos'][23] ?>" placeholder="Data de entrada e saida. Ex: 12/2018 - 06/2020" id="" class="form-control" /><input type="text" name="ccargo3" value="<?php echo $_SESSION['infos'][24] ?>" placeholder="Cargo e Responsabilidades" id="" class="form-control" /><input type="text" name="csalario3" value="<?php echo $_SESSION['infos'][25] ?>" placeholder="Salário" id="" class="form-control" /><input type="text" name="csaida3" value="<?php echo $_SESSION['infos'][26] ?>" placeholder="Motivo de Saída" id="" class="form-control" />
                        </div>

                        <div class="buttons">
                            <input type="submit" value="Excluir cadastro" class="excluir" name="excluir" />
                            <input type="submit" value="Atualizar informações" class="atualizar" name="atualizar" />
                        </div>
        </div>
    </div>
</body>

<script type="text/javascript">
    $('.sidebar-btn').click(function() {
        $('.wrapper').toggleClass('collapse');
    });

    $('.excluir').click(function() {
        alert('Até breve, candidato! Redirecionando para página inicial..!')
    });

    $('.atualizar').click(function() {
        alert('Informações atualizadas!')
    });
</script>

</html>