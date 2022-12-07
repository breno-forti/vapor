<?php 

require("./modules/connection.php");

require("./modules/authentication.php");

?>

<?php 

$page_title = "Game";

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./public/icons/favicon.ico" type="image/x_icon">
    <link rel="stylesheet" href="./assets/global.css">
    <link rel="stylesheet" href="./assets/normalize.css">
    <link rel="stylesheet" href="./assets/style.css">
    <script src="./assets/scripts.js"></script>
    <title>Vapor - <?php echo $page_title; ?></title>
</head>

<body>
    <div class="body_container">

        <div id="top_content">
            <a href="dashboard.php">
                <div id="panel_logo">
                    <img src="./public/images/logo-com-texto.png" alt="Logo Vapor Control Panel" width="60%">
                </div>
            </a>
            <div id="admin_name">Welcome to Dashboard, <?php echo $administrator['nome']?> - <span id="clock"></span> </div>

            <script>
                updateClock()
                // ativar o script abaixo para mudar as cores do top menu
                updateColor()
            </script>

        </div>
        
        <div id="main_container">

        <?php require("./modules/side_menu.php") ?>