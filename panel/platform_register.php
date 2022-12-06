<?php 
require('./modules/connection.php');

$platform_name = $_POST['platform'] ?? null;

$platform_consult = "SELECT nome FROM plataforma WHERE nome = '{$platform_name}'";

$platform_insert = "INSERT INTO plataforma (nome) VALUES ('{$platform_name}')";

$platform = mysqli_fetch_assoc(mysqli_query($conn, $platform_consult));

if ($platform == null) {
    mysqli_query($conn, $platform_insert);
    header("location: platform.php");
} else {
    header("location: platform_add.php?error=This idiom already exist!");
}

?> 