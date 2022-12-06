<?php 

require('./modules/connection.php');

$idiom_name = $_POST['idiom'] ?? null;

$idiom_id = $_POST['id'] ?? null;

$idiom_consult = "SELECT nome FROM idioma WHERE nome = '{$idiom_name}' AND id != '{$idiom_id}'";

$idiom = mysqli_fetch_assoc(mysqli_query($conn, $idiom_consult));

$idiom_update = "UPDATE idioma SET  nome = '{$idiom_name}' WHERE id = '{$idiom_id}'";

if ($idiom == null) {
    mysqli_query($conn, $idiom_update);
    header("location: idiom.php");
} else {
    header("location: idiom_edit.php?error=This idiom is already exist!&id={$idiom_id}");
}

?>