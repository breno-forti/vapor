<?php 

require('./modules/conexao.php');

$name = $_POST['name'] ?? null;
$email = $_POST['email'] ?? null;
$select = $_POST['subject'] ?? null;
$message = addslashes($_POST['message'] ?? null);

$send_message_query = "INSERT INTO mensagem (nome, email, assunto, mensagem) VALUES ('{$name}', '{$email}', '{$select}', '{$message}')";

mysqli_query($conn, $send_message_query);

if($send_message_query != null){
  header("location: suporte.php?send_message= Sua mensagem foi enviada com sucesso.");
}

?>