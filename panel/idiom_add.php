<?php

$page_title = "Idiom Name";
$error_message = $_GET['error'] ?? null;

?>

<?php
require('./modules/top_menu.php');
?>

<div class="small_form">

    <form action="idiom_register.php" method="post">
        <div>
            <label class="form_name" for="name">Idiom name:</label>
            <input type="text" name="idiom" placeholder="language" required>
        </div>
        <div>
        <button class="save_button" type="submit">Save</button>
        </div>
        <?php if ($error_message != null) { ?>
            <div class="error_message"><?= $error_message ?></div>
        <?php } ?>
    </form>

</div>