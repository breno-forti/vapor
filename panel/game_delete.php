<?php $page_title = "Game Delete" ?>

<?php

require('./modules/connection.php');

$game_id = $_GET['id'] ?? null;

$platform_game_delete_query = "DELETE FROM jogo_plataforma WHERE id_jogo = {$game_id}";
$idiom_game_delete_query = "DELETE FROM jogo_idioma WHERE id_jogo = {$game_id}";
$game_delete_query = "DELETE FROM jogo WHERE id = {$game_id}";

mysqli_query($conn, $platform_game_delete_query);
mysqli_query($conn, $idiom_game_delete_query);
mysqli_query($conn, $game_delete_query);

header('location: game.php');

?>