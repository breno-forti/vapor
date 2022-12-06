<?php 
require('./modules/connection.php');

$category_name = $_POST['category'] ?? null;

$category_consult = "SELECT nome FROM categoria WHERE nome = '{$category_name}'";

$category_insert = "INSERT INTO categoria (nome) VALUES (UPPER('{$category_name}'))";

$category = mysqli_fetch_assoc(mysqli_query($conn, $category_consult));

if ($category == null) {
    mysqli_query($conn, $category_insert);
    header("location: category.php");
} else {
    header("location: category_add.php?error=This idiom already exist!");
}

?> 