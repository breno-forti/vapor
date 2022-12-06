<?php
$titulo_pagina = "Suporte";
$send_message = $_GET['send_message'] ?? null;
?>

<!DOCTYPE html>
<html lang="pt-BR">
<?php require('./modules/top-menu.php') ?>

<body>

    <div id="body-container">

        <?php require('./modules/side-menu.php') ?>

        <div id="content">

            <div id="suport_information">

                <h2 class="suport_title">Alguma dúvida?</h2>

                <p class="suport_title">Atendimentos online de Segunda a Sabádo das 08am - 10pm</p>

            </div>

            <div id="suport_form_container">

                <div id="suport_form">
                    <form action="send_message.php" method="post">

                        <input type="text" id="name" name="name" placeholder="Nome" class="input" required>
                        <br>
                        <input type="email" id="email" name="email" placeholder="E-mail" class="input" required>
                        <br>
                        <select name="subject" id="suport_select" required>

                            <option value="" selected disabled>Selecione o assunto</option>
                            <option value="SUGESTÃO">Sugestão</option>
                            <option value="CRÍTICA">Crítica</option>
                            <option value="ELÓGIO">Elógio</option>
                            <option value="DÚVIDA">Dúvida</option>
                            <option value="SUPORTE">Suporte</option>
                            <option value="OUTROS">Outros</option>

                        </select>
                        <br>
                        <textarea name="message" placeholder="Mensagem" id="text_area" required></textarea>
                        <br>
                        <input type="submit" name="suport_button" id="suport_button" value="Enviar">
                        <br>
                        <br>
                        <div>
                            <?php if ($send_message != null) { ?>
                                <div class="send_message"><?= $send_message ?></div>
                            <?php } ?>
                        </div>
                    </form>
                </div>

                <div id="map">

                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3679.9923817392187!2d-47.64777588442164!3d-22.728524537249772!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94c631a09ac7b2e1%3A0x197834b105f878e3!2sSenac%20Piracicaba!5e0!3m2!1spt-BR!2sbr!4v1662424524970!5m2!1spt-BR!2sbr" id="google_map" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

                </div>

            </div>

        </div>
    </div>
</body>

</html>