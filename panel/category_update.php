<?php 

require('./modules/connection.php');

$category_name = $_POST['category'] ?? null;

$category_id = $_POST['id'] ?? null;

$category_consult = "SELECT nome FROM categoria WHERE nome = '{$category_name}' AND id != '{$category_id}'";

$category = mysqli_fetch_assoc(mysqli_query($conn, $category_consult));

$category_update = "UPDATE categoria SET  nome = (UPPER('{$category_name}')) WHERE id = '{$category_id}'";

if ($category == null) {
    mysqli_query($conn, $category_update);
    header("location: category.php");
} else {
    header("location: category_edit.php?error=This idiom already exist!&id={$category_id}");
}

?>