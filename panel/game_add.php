<?php

$page_title = "Game Add";
$error_message = $_GET['error'] ?? null;

?>

<?php
require('./modules/top_menu.php');

$category_query = "SELECT * FROM categoria ORDER BY nome ASC";
$categorys = mysqli_query($conn, $category_query);

?>

<div id="game_form">

    <form action="game_register.php" method="post">
        <div>
            <label class="form_name" for="name">Name<span class="red">*</span>:</label>
            <input type="text" name="name" id="name" required>
        </div>
        <div>
            <label class="form_name" for="developer">Developers<span class="red">*</span>:</label>
            <input type="text" name="developer" id="developer" required>
        </div>
        <div>
            <label class="form_name" for="image">Image<span class="red">*</span>:</label>
            <input type="text" name="image" id="image" required>
        </div>
        <div>
            <label class="form_name" for="video">Video:</label>
            <input type="text" name="video" id="video">
        </div>
        <div>
            <label class="form_name" for="price">Price<span class="red">*</span>:</label>
            <input type="number" name="price" id="price" required>
        </div>
        <div>
            <label class="form_name" for="release_date">Release Date<span class="red">*</span>:</label>
            <input type="date" name="release_date" id="release_date" required>
        </div>
        <div>
            <label class="form_name" for="category">Category<span class="red">*</span>:</label>
            <select class="input_category" name="category" id="category" required>
                <option value="" disabled selected>Select</option>

                <?php while ($category = mysqli_fetch_array($categorys)) { ?>
                    <option value="<?= $category['id'] ?>"><?= $category['nome'] ?></option>
                <?php } ?>

            </select>
        </div>
        <div>
            <label class="form_name" for="descripiton">Description<span class="red">*</span>:</label>
            <textarea required name="description" id="description" cols="30" rows="10"></textarea>
        </div>
        <div>
            <button class="save_button" type="submit">Save</button>
        </div>
    </form>

</div>