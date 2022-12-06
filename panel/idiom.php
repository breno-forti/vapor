<?php $page_title = "Idiom" ?>

<?php
require('./modules/top_menu.php');
$idiom_query = "SELECT id, nome FROM idioma";
$idioms = mysqli_query($conn, $idiom_query);
?>

<div id="tables_dashboard">
    <div id="table_button">
        <button class="add_button"><a href="idiom_add.php">ADD IDIOM</a></button>
    </div>
    <div id="table_list">
        <table>
            <tr>
                <th>IDIOM</th>
                <th class="table_item">EDIT</th>
                <th class="table_item">DELETE</th>
            </tr>

            <?php while ($idiom = mysqli_fetch_array($idioms)) { ?>
                <tr>
                    <td><?= $idiom['nome'] ?></td>
                    <td class="table_item"><a href="idiom_edit.php?id=<?= $idiom['id'] ?>">Edit</a></td>
                    <td class="table_item"><a href="idiom_delete.php?id=<?= $idiom['id'] ?>">Delete</a></td>
                </tr>
            <?php } ?>
        </table>
        <br>
        <?php if ($idioms->num_rows == 0) { ?>
            <p class="empty_item">Don't exist any idioms here!</p>
        <?php }  ?>
        <br>
    </div>
</div>