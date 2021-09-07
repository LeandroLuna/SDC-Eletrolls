<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SDC | Candidatos</title>
    <link rel="stylesheet" href="./style_painel.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
</head>

<body>
    <!-- sidebar aqui -->
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
                    <img src="../../images/user.png" alt="">
                    <p>NOME DO CANDIDATO</p>
                </center>

                <li class="item" id="dashboard">
                    <a href="#dashboard" class="menu-btn">
                        <i class="fas fa-desktop"></i><span>Painel de Controle<i class="fas fa-chevron-down drop-down"></i></span>
                    </a>

                    <div class="sub-menu">
                        <a href="#"><i class="fas fa-check-double"></i><span>Suas aplicações</span></a>
                        <a href="#"><i class="fas fa-database"></i><span>Vagas em aberto</span></a>
                    </div>
                </li>

                <li class="item" id="profile">
                    <a href="#profile" class="menu-btn">
                        <i class="fas fa-user-circle"></i> <span>Perfil <i class="fas fa-chevron-down drop-down"></i></span>
                    </a>

                    <div class="sub-menu">
                        <a href="#"><i class="fas fa-image"></i><span>Foto</span></a>
                        <a href="#"><i class="fas fa-address-card"></i><span>Informações</span></a>
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
        <div class="main-container">
            <div class="card">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi quas, facere unde in eligendi ipsa, alias animi tenetur corrupti voluptatem sed perferendis repellat eum et assumenda voluptatibus eos qui quis.</p>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        $(document).ready(function() {
            $(".sidebar-btn").click(function() {
                $(".wrapper").toggleClass("collapse");
            });
        });
    </script>

</body>

</html>