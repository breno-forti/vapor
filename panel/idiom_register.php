<?php 
require('./modules/connection.php');

$idiom_name = $_POST['idiom'] ?? null;

$idiom_consult = "SELECT nome FROM idioma WHERE nome = '{$idiom_name}'";

$idiom_insert = "INSERT INTO idioma (nome) VALUES ('{$idiom_name}')";

$idiom = mysqli_fetch_assoc(mysqli_query($conn, $idiom_consult));

if ($idiom == null) {
    mysqli_query($conn, $idiom_insert);
    header("location: idiom.php");
} else {
    header("location: idiom_add.php?error=This idiom is already exist!");
}

?> 