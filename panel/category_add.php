<?php

$page_title = "Category Name";
$error_message = $_GET['error'] ?? null;

?>

<?php
require('./modules/top_menu.php');
?>

<div class="small_form">

    <form action="category_register.php" method="post">
        <div>
            <label class="form_name" for="name">Category name:</label>
            <input type="text" name="category" placeholder="Category" required>
        </div>
        <div>
        <button class="save_button" type="submit">Save</button>
        </div>
        <?php if ($error_message != null) { ?>
            <div class="error_message"><?= $error_message ?></div>
        <?php } ?>
    </form>

</div>