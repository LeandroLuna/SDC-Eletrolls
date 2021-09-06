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
    <link rel="stylesheet" href="./style.css" />
</head>

<body>
    <header>
        <a href="/myphp/index.html#home" class="logo">Recrutamento</a>
        <div class="toggle"></div>
        <ul>
            <li><a href="../../../Login/logout.php">Sair</a></li>
        </ul>
    </header>

    <br><br><br>
    <h2>Olá, <?php echo $_SESSION['Nome'] ?>!<br></h2>
    <h3>Qual vaga você vai querer se candidatar hoje?!</h3>
</body>

</html>