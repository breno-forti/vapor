<?php 

require('./modules/connection.php');

$platform_name = $_POST['platform'] ?? null;

$platform_id = $_POST['id'] ?? null;

$platform_consult = "SELECT nome FROM plataforma WHERE nome = '{$platform_name}' AND id != '{$platform_id}'";

$platform = mysqli_fetch_assoc(mysqli_query($conn, $platform_consult));

$platform_update = "UPDATE plataforma SET  nome = '{$platform_name}' WHERE id = '{$platform_id}'";

if ($platform == null) {
    mysqli_query($conn, $platform_update);
    header("location: platform.php");
} else {
    header("location: platform_edit.php?error=This idiom is already exist!&id={$platform_id}");
}

?>