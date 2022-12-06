<?php

$page_title = "Login";

require("./modules/connection.php");

$email = $_POST["email"] ?? null;
$password = $_POST["password"] ?? null;

$query_admin = "SELECT nome, id, cpf FROM administrador WHERE email = '{$email}' AND senha = '{$password}'";

$administrator = mysqli_fetch_assoc(mysqli_query($conn, $query_admin));

if ($administrator == null) {
    header('location: index.php?error=Invalid user or password! Please try again!');
} else {
    session_start();
    $_SESSION['administrator'] = $administrator;
    header('location: dashboard.php');
}
