<?php $page_title = "Dashboard"; ?>

<?php require("./modules/connection.php") ?>

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
    <title>Vapor - <?php echo $page_title; ?></title>
</head>

<body>
    <div class="body-container">

        <div id="top-content">
            <a href="dashboard.php">
                <div id="panel_logo">
                    <img src="./public/images/logo-com-texto.png" alt="Logo Vapor Control Panel" width="60%">
                </div>
            </a>
            <div id="admin_name">Welcome to Dashboard, Breno</div>
        </div>

        <div id="main-container">

            <div id="side-menu-container">
                <br>
                <a href="game.php" title="Games">
                    <div class="item">
                        <div class="icon game_icon"></div>
                        <span>GAMES</span>
                    </div>
                </a>
                <br>
                <a href="category.php" title="Category">
                    <div class="item">
                        <div class="icon category_icon"></div>
                        <span>CATEGORY</span>
                    </div>
                </a>
                <br>
                <a href="idiom.php" title="Idioms">
                    <div class="item">
                        <div class="icon idiom_icon"></div>
                        <span>IDIOMS</span>
                    </div>
                </a>
                <br>
                <a href="platform.php" title="Platforms">
                    <div class="item">
                        <div class="icon platform_icon"></div>
                        <span>PLATAFORMS</span>
                    </div>
                </a>
                <br>
                <div id="item_logout">
                    <a href="logout.php" title="Logout">
                        <div class="item">
                            <div class="icon logout_icon"></div>
                            <span>LOGOUT</span>
                        </div>
                    </a>
                </div>
            </div>

            <div id="content-container">

            </div>

        </div>

        <div id="footer-container">

        </div>
    </div>
</body>

</html>