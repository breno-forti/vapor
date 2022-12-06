<?php 

require('./modules/connection.php');

$game_id = $_GET['game_id'] ?? null;
$platform_id = $_GET['platform_id'] ?? null;

$delete_platform_query = "DELETE FROM jogo_plataforma WHERE id_jogo = {$game_id} AND id_plataforma = {$platform_id}";
mysqli_query($conn, $delete_platform_query);

header("location: game_platform_edit.php?id={$game_id}");

?>