<?php 

require('./modules/connection.php');

$game_id = $_POST['game_id'] ?? null;
$platform_id = $_POST['platform_id'] ?? null;

$insert_platform_query = "INSERT INTO jogo_plataforma (id_jogo, id_plataforma) VALUES ({$game_id},{$platform_id})";
mysqli_query($conn, $insert_platform_query);

header("location: game_platform_edit.php?id={$game_id}");
?>