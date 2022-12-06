<?php
$page_title = "Platform Edit";

?>

<?php
require('./modules/top_menu.php');
$error_message = $_GET['error'] ?? null;
$platform_id = $_GET['id'] ?? null;

$platform_consult = "SELECT nome FROM plataforma WHERE id = '{$platform_id}'";
$platform = mysqli_fetch_assoc(mysqli_query($conn, $platform_consult));

?>


<div class="small_form">

    <form action="platform_update.php" method="post">
        <div>
            <label class="form_name" for="name">Platform edit name:</label>
            <input value="<?= $platform['nome'] ?>" type="text" name="platform" required>
        </div>
        <div>
            <input value="<?= $platform_id ?>" type="hidden" name="id">
        </div>
        <div>
            <button class="save_button" type="submit">Update</button>
        </div>
        <?php if ($error_message != null) { ?>
            <div class="error_message"><?= $error_message ?></div>
        <?php } ?>
    </form>

</div>