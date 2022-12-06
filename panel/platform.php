<?php

$page_title = "Platform";

require("./modules/top_menu.php");

$query_platform = "SELECT id, nome FROM plataforma";
$platforms = mysqli_query($conn, $query_platform);
?>


<div id="tables_content">
    <div id="table_button">
        <button class="add_button"><a href="platform_add.php">ADD PLATFORM</a></button>
    </div>
    </a>
    <div id="tables_dashboard">
        <table>
            <tr>
                <th>PLATFORM</th>
                <th class="table_item">EDIT</th>
                <th class="table_item">DELETE</th>
            </tr>

            <?php while ($platform = mysqli_fetch_array($platforms)) { ?>
                <tr>
                    <td><?= $platform['nome'] ?></td>
                    <td class="table_item"><a href="platform_edit.php?id=<?= $platform['id'] ?>">Edit</td></a>
                    <td class="table_item"><a href="platform_delete.php?id=<?= $platform['id'] ?>">Delete</td></a>
                </tr>
            <?php } ?>
        </table>
        <br>
        <?php if ($platforms->num_rows == 0) { ?>
            <p class="empty_item">Don't exist any platforms here!</p>
        <?php }  ?>
        <br>
    </div>
</div>

<?php require("./modules/footer.php") ?>