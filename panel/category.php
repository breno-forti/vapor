<?php
$page_title = "Category";

require("./modules/top_menu.php");

$query_category = "SELECT id, nome FROM categoria";
$categorys = mysqli_query($conn, $query_category);
?>

<div id="tables_content">
    <div id="table_button">
        <button class="add_button"><a href="category_add.php">ADD CATEGORY</a></button>
    </div>
    </a>
    <div id="tables_dashboard">
        <table>
            <tr>
                <th>CATEGORY</th>
                <th class="table_item">EDIT</th>
                <th class="table_item">DELETE</th>
            </tr>

            <?php while ($category = mysqli_fetch_array($categorys)) { ?>
                <tr>
                    <td><?= $category['nome'] ?></td>
                    <td><a href="category_edit.php?id=<?= $category['id'] ?>">Edit</td></a>
                    <td><a onclick="categoryDelete(<?=$category['id']?>)" href="#">Delete</a></td>
                </tr>
            <?php } ?>
        </table>
        <br>
        <?php if ($categorys->num_rows == 0) { ?>
            <p class="empty_item">Don't exist any categorys here!</p>
        <?php }  ?>
        <br>
    </div>
</div>

<?php require("./modules/footer.php") ?>