<?php $page_title = "Category Delete" ?>

<?php

require('./modules/connection.php');

$category_id = $_GET['id'] ?? null;

$games_query = "SELECT * FROM jogo WHERE id_categoria = {$category_id}";
$games = mysqli_query($conn, $games_query);

if ($games->num_rows == 0) {

    $category_delete_query = "DELETE FROM categoria WHERE id = {$category_id}";
    mysqli_query($conn, $category_delete_query);

} else {

    while ($game = mysqli_fetch_array($games)) {

        $game_id = $game['id'];
        $platform_game_delete_query = "DELETE FROM jogo_plataforma WHERE id_jogo = {$game_id}";
        $idiom_game_delete_query = "DELETE FROM jogo_idioma WHERE id_jogo = {$game_id}";
        $game_delete_query = "DELETE FROM jogo WHERE id = {$game_id}";

        mysqli_query($conn, $platform_game_delete_query);
        mysqli_query($conn, $idiom_game_delete_query);
        mysqli_query($conn, $game_delete_query);
        
        
    }

    $category_delete_query = "DELETE FROM categoria WHERE id = {$category_id}";
    mysqli_query($conn, $category_delete_query);

}

header('location: category.php');

?>