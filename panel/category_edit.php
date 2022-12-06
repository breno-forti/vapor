<?php
$page_title = "Platform Edit";

?>

<?php
require('./modules/top_menu.php');
$error_message = $_GET['error'] ?? null;
$category_id = $_GET['id'] ?? null;

$category_consult = "SELECT nome FROM categoria WHERE id = '{$category_id}'";
$category = mysqli_fetch_assoc(mysqli_query($conn, $category_consult));

?>


<div class="small_form">

    <form action="category_update.php" method="post">
        <div>
            <label class="form_name" for="name">Category edit name:</label>
            <input value="<?= $category['nome'] ?>" type="text" name="category" required>
        </div>
        <div>
            <input value="<?= $category_id ?>" type="hidden" name="id">
        </div>
        <div>
            <button class="save_button" type="submit">Update</button>
        </div>
        <?php if ($error_message != null) { ?>
            <div class="error_message"><?= $error_message ?></div>
        <?php } ?>
    </form>
    
</div>