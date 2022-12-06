<?php $page_title = "Platform Delete" ?>

<?php

require('./modules/top_menu.php');

$platform_id = $_GET['id'] ?? null;
$platform_game_query = "DELETE FROM jogo_plataforma WHERE id_plataforma = {$platform_id}";
$platform_query = "DELETE FROM plataforma WHERE id = {$platform_id}";

mysqli_query($conn, $platform_game_query);

mysqli_query($conn, $platform_query);

header('location: platform.php');

?>