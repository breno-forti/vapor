<?php $page_title = "Idiom Delete" ?>

<?php

require('./modules/top_menu.php');

$idiom_id = $_GET['id'] ?? null;
$idiom_game_query = "DELETE FROM jogo_idioma WHERE id_idioma = {$idiom_id}";
$idiom_query = "DELETE FROM idioma WHERE id = {$idiom_id}";

mysqli_query($conn, $idiom_game_query);

mysqli_query($conn, $idiom_query);

header('location: idiom.php');

?>