<?php 

require('./modules/connection.php');

$message_id = $_GET['id'] ?? null;

$massage_archive_query = "INSERT INTO mensagem_arquivada (nome, email, assunto, mensagem) (SELECT nome, email, assunto, mensagem FROM mensagem WHERE id = {$message_id})";
$massage_archive = mysqli_query($conn, $massage_archive_query);

$message_delete_query = "DELETE FROM mensagem WHERE id = {$message_id}";
$message_delete = mysqli_query($conn, $message_delete_query);

header('location: message.php');

?>

