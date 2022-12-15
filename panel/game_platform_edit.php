<?php

$page_title = "Game Platform Edit";
require('./modules/top_menu.php');

$game_id = $_GET['id'] ?? null;

$game_query = "SELECT nome FROM jogo WHERE id = {$game_id}";
$game = mysqli_fetch_array(mysqli_query($conn, $game_query));

$platform_query = "SELECT * FROM plataforma WHERE id IN (SELECT id_plataforma FROM jogo_plataforma WHERE id_jogo = {$game_id})";
$platforms = mysqli_query($conn, $platform_query);

$platform_register_query = "SELECT * FROM plataforma WHERE id NOT IN (SELECT id_plataforma FROM jogo_plataforma WHERE id_jogo = {$game_id})";
$platform_register = mysqli_query($conn, $platform_register_query);

?>

<div id="tables_dashboard">

    <div id="table_list">

        <table>
            <br>
            <tr>
                <th>PLATFORM - <?= $game['nome'] ?></th>
                <th class="table_item">DELETE</th>
            </tr>

            <?php while ($platform = mysqli_fetch_array($platforms)) { ?>

                <tr>
                    <td><?= $platform['nome'] ?></td>
                    <td class="table_item"><a href="game_platform_delete.php?platform_id=<?= $platform['id'] ?>&game_id=<?= $game_id ?>">Delete</a></td>
                </tr>

            <?php } ?>

        </table>
        <br>
        <?php if ($platforms->num_rows == 0) { ?>
            <p class="empty_item">Don't exist any register platform to <?= $game['nome'] ?></p>
        <?php }  ?>
        <br>
    </div>

    <div id="select_form">

        <form action="game_platform_register.php" method="post">

            <select required name="platform_id" class="game_select">
                <option value="" disabled selected>Platform select</option>

                <?php while ($platform = mysqli_fetch_array($platform_register)) { ?>
                    <option value="<?= $platform['id'] ?>"><?= $platform['nome'] ?></option>
                <?php } ?>

            </select>

            <input type="hidden" value="<?= $game_id ?>" name="game_id">

            <button class="add_button" type="submit">ADD PLATFORM</button>

        </form>

    </div>

</div>

<?php require('./modules/footer.php') ?>