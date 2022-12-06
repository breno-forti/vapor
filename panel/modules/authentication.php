<?php 
session_start();

$administrator = $_SESSION['administrator'] ?? null;

if ($administrator == null) {
    header('location: index.php?error=(ง’̀-‘́)ง');
}

?>