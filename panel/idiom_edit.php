<?php
$page_title = "Idiom Edit";

?>

<?php
require('./modules/top_menu.php');
$error_message = $_GET['error'] ?? null;
$idiom_id = $_GET['id'] ?? null;

$idiom_consult = "SELECT nome FROM idioma WHERE id = '{$idiom_id}'";
$idiom = mysqli_fetch_assoc(mysqli_query($conn, $idiom_consult));

?>


<div class="small_form">

    <form action="idiom_update.php" method="post">
        <div>
            <label class="form_name" for="name">Idiom edit name:</label>
            <input value="<?= $idiom['nome'] ?>" type="text" name="idiom" required>
        </div>
        <div>
            <input value="<?= $idiom_id ?>" type="hidden" name="id">
        </div>
        <div>
            <button class="save_button" type="submit">Update</button>
        </div>
        <?php if ($error_message != null) { ?>
            <div class="error_message"><?= $error_message ?></div>
        <?php } ?>
    </form>

</div>