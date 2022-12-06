<?php

$error_message = $_GET['error'] ?? null;

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/global.css">
    <link rel="stylesheet" href="assets/normalize.css">
    <link rel="stylesheet" href="assets/style.css">
    <link rel="shortcut icon" href="public/icons/favicon.ico" type="image/x-icon">
    <title>Vapor - Control Panel - Login</title>
</head>

<body>
    <div class="body_container">

        <div id="login_container">

            <div id="login_form">
                <form action="./login.php" method="POST">
                    <img src="./public/images/logo_vapor.png" alt="Logo Vapor">
                    <div class="default_title">
                        <span>CONTROL PANEL</span>
                    </div>
                    
                    <div class="input">
                        <input placeholder="E-mail" type="email" name="email" id="email" required>
                    </div>
                    <br>
                    <div class="input">
                        <input placeholder="Password" type="password" name="password" id="password" required>
                    </div>
                    <br>
                    <div>
                        <button class="login_button" type="submit">Login</button>
                    </div>
                    <br>
                    <div class="input">
                        <?php if ($error_message != null) { ?>
                            <div class="error_message"><?= $error_message ?></div>
                        <?php } ?>
                    </div>
                </form>
            </div>
            
        </div>

    </div>
</body>

</html>