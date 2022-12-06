<?php 

require('./modules/connection.php');

$game_id = $_POST['game_id'] ?? null;
$idiom_id = $_POST['idiom_id'] ?? null;

$insert_idiom_query = "INSERT INTO jogo_idioma (id_jogo, id_idioma) VALUES ({$game_id},{$idiom_id})";
mysqli_query($conn, $insert_idiom_query);

header("location: game_idiom_edit.php?id={$game_id}");
?>