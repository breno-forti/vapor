<?php $page_title = "Game"; ?>

<?php

require("./modules/top_menu.php");

$games_query = "SELECT id, nome FROM jogo";
$games = mysqli_query($conn, $games_query);

?>
<div id="tables_content">
    <div id="table_button">
        <button class="add_button"><a href="game_add.php">ADD GAME</a></button>
    </div>
    </a>
    <div id="tables_dashboard">
        <table>
            <tr>
                <th>GAME</th>
                <th class="table_item">IDIOM</th>
                <th class="table_item">PLATFORM</th>
                <th class="table_item">EDIT</th>
                <th class="table_item">DELETE</th>
            </tr>

            <?php while ($game = mysqli_fetch_array($games)) { ?>
                <tr>
                    <td><?= $game['nome'] ?></td>
                    <td class="table_item"><a href="game_idiom_edit.php?id=<?= $game['id'] ?>">Idiom</td></a>
                    <td class="table_item"><a href="game_platform_edit.php?id=<?= $game['id'] ?>">Platform</td></a>
                    <td class="table_item"><a href="game_edit.php?id=<?= $game['id'] ?>">Edit</td></a>
                    <td class="table_item"><a href="game_delete.php?id=<?= $game['id'] ?>">Delete</td></a>
                </tr>
            <?php } ?>
        </table>
        <br>
        <?php if ($games->num_rows == 0) { ?>
            <p class="empty_item">Don't exist any games here</p>
        <?php }  ?>
        <br>
    </div>
</div>

<?php require("./modules/footer.php") ?>