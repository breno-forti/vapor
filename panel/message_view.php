<?php $page_title = "Message View"; ?>

<?php
require('./modules/top_menu.php');

$message_id = $_GET['id'] ?? null;
$message_query = "SELECT * FROM mensagem WHERE id = {$message_id}";
$messages = mysqli_query($conn, $message_query);

?>

<div id="tables_content">

    <div id="tables_dashboard">
        <table>
            <tr>
                <th class="table_item">NAME</th>
                <th class="table_item">MAIL</th>
                <th class="table_item">SUBJECT</th>

            </tr>

            <?php while ($message = mysqli_fetch_array($messages)) { ?>
                <tr>
                    <td><?= $message['nome'] ?></td>
                    <td><?= $message['email'] ?></td>
                    <td><?= $message['assunto'] ?></td>
                    <div id="table_button">
                        <button class="add_button"><a href="message_archive.php?id=<?= $message['id'] ?>">ARCHIVE</a></button>
                    </div>
                </tr>

                <table>
                    <br>
                    <th class="table_item">MESSAGE</th>
                </table>

                <textarea id="text_area" disabled><?= $message['mensagem'] ?></textarea>

            <?php } ?>

        </table>
    </div>
</div>

<?php require("./modules/footer.php") ?>