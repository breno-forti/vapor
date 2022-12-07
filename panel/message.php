<?php $page_title = "Message" ?>

<?php
require('./modules/top_menu.php');

$message_query = "SELECT * FROM mensagem";
$messages = mysqli_query($conn, $message_query);
?>

<div id="tables_content">

    <div id="tables_dashboard">
        <table>
            <br>
            <tr>
                <th class="table_item">NAME</th>
                <th class="table_item">SUBJECT</th>
                <th class="table_item">MESSAGE</th>
                <th class="table_item">ARCHIVE</th>
            </tr>

            <?php while ($message = mysqli_fetch_array($messages)) { ?>
                <tr>
                    <td><?= $message['nome'] ?></td>
                    <td><?= $message['assunto'] ?></td>
                    <td><a href="message_view.php?id=<?= $message['id'] ?>">View</a></td>
                    <td><a onclick="messageArchive(<?= $message['id'] ?>)" href="#">Archive</a></td>
                </tr>
            <?php } ?>
        </table>
        <br>
        <?php if ($messages->num_rows == 0) { ?>
            <p class="empty_item">Don't exist any messages here!</p>
        <?php }  ?>
        <br>
    </div>
</div>

<?php require("./modules/footer.php") ?>