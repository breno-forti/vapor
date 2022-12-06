<?php

$page_title = "Game Idiom Edit";
require('./modules/top_menu.php');

$game_id = $_GET['id'] ?? null;

$game_query = "SELECT nome FROM jogo WHERE id = {$game_id}";
$game = mysqli_fetch_array(mysqli_query($conn, $game_query));

$idiom_query = "SELECT * FROM idioma WHERE id IN (SELECT id_idioma FROM jogo_idioma WHERE id_jogo = {$game_id})";
$idioms = mysqli_query($conn, $idiom_query);

$idiom_register_query = "SELECT * FROM idioma WHERE id NOT IN (SELECT id_idioma FROM jogo_idioma WHERE id_jogo = {$game_id})";
$idiom_register = mysqli_query($conn, $idiom_register_query);

?>

<div id="tables_dashboard">

    <div id="table_list">

        <table>
            <br>
            <tr>
                <th>IDIOM - <?= $game['nome'] ?></th>
                <th class="table_item">DELETE</th>
            </tr>

            <?php while ($idiom = mysqli_fetch_array($idioms)) { ?>

                <tr>
                    <td><?= $idiom['nome'] ?></td>
                    <td class="table_item"><a href="game_idiom_delete.php?idiom_id=<?= $idiom['id'] ?>&game_id=<?= $game_id ?>">Delete</a></td>
                </tr>

            <?php } ?>

        </table>
        <br>
        <?php if ($idioms->num_rows == 0) { ?>
            <p class="error_message">Don't exist any register idiom to <?= $game['nome'] ?></p>
        <?php }  ?>
        <br>
    </div>
    
    <div id="select_form">

        <form action="game_idiom_register.php" method="post">
            
            <select required name="idiom_id" class="game_select">
                <option value="" disabled selected>Idiom select</option>

                <?php while ($idiom = mysqli_fetch_array($idiom_register)) { ?>
                    <option value="<?= $idiom['id'] ?>"><?= $idiom['nome'] ?></option>
                <?php } ?>

            </select>

            <input type="hidden" value="<?= $game_id ?>" name="game_id">

            <button class="add_button" type="submit">ADD IDIOM</button>

        </form>

    </div>

</div>

<?php require('./modules/footer.php') ?>