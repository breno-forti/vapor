<?php 

require('./modules/connection.php');

$game_id = $_GET['game_id'] ?? null;
$idiom_id = $_GET['idiom_id'] ?? null;

$delete_idiom_query = "DELETE FROM jogo_idioma WHERE id_jogo = {$game_id} AND id_idioma = {$idiom_id}";
mysqli_query($conn, $delete_idiom_query);

header("location: game_idiom_edit.php?id={$game_id}");

?>