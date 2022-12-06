<?php

$page_title = "Game Edit";

require('./modules/top_menu.php');

$error_message = $_GET['error_message'] ?? null;
$success_message = $_GET['success_message'] ?? null;
$game_id = $_GET['id'] ?? null;

$category_query = "SELECT * FROM categoria ORDER BY nome ASC";
$categorys = mysqli_query($conn, $category_query);

$game_query = "SELECT * FROM jogo WHERE id = {$game_id}";
$game = mysqli_fetch_assoc(mysqli_query($conn, $game_query));

?>    

<div id="game_form">

    <form action="game_update.php" method="post">

    <input type="hidden" name="game_id" value="<?=$game_id?>">

        <div>
            <label class="form_name" for="name">Name<span class="red">*</span>:</label>
            <input type="text" name="name" id="name" value="<?= $game['nome'] ?>" required>
        </div>
        <div>
            <label class="form_name" for="developer">Developers<span class="red">*</span>:</label>
            <input type="text" name="developer" id="developer" value="<?= $game['desenvolvedora'] ?>" required>
        </div>
        <div>
            <label class="form_name" for="image">Image<span class="red">*</span>:</label>
            <input type="text" name="image" id="image" value="<?= $game['imagem_url'] ?>" required>
        </div>
        <div>
            <label class="form_name" for="video">Video:</label>
            <input type="text" name="video" id="video" value="<?= $game['video_url'] ?>">
        </div>
        <div>
            <label class="form_name" for="price">Price<span class="red">*</span>:</label>
            <input type="number" name="price" id="price" value="<?= $game['valor'] ?>" required>
        </div>
        <div>
            <label class="form_name" for="release_date">Release Date<span class="red">*</span>:</label>
            <input type="date" name="release_date" id="release_date" value="<?= $game['data_lancamento'] ?>" required>
        </div>
        <div>
            <label class="form_name" for="category">Category<span class="red">*</span>:</label>
            <select class="input_category" name="category" id="category" required>
                <option value="" disabled selected>Select</option>
                
                <?php while ($category = mysqli_fetch_array($categorys)) { ?>
                        <option 
                        
                        <?php if($category['id'] == $game['id_categoria']) { echo 'selected' ;}?>
                        
                        value="<?= $category['id'] ?>"><?= $category['nome'] ?></option>
                    <?php } ?>

            </select>
        </div>

        <div>
            <label class="form_name" for="descripiton">Description<span class="red">*</span>:</label>
            <textarea name="description" id="description" cols="30" rows="8" value="<?= $game['descricao'] ?>" required></textarea>
        </div>

        <?php if ($error_message != null) { ?>
            <div class="error_message"><?= $error_message ?></div>
        <?php } ?>

        <?php if ($success_message != null) { ?>
            <div class="success_message"><?= $success_message ?></div>
        <?php } ?>

        <div>
            <button class="save_button" type="submit">Save</button>
        </div>
    </form>
</div>
