<?php

$page_title = "Logout";

    session_start();

    unset($_SESSION['administrator']);

    header('location: index.php');
