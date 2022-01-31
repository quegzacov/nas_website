<?php
    session_start();
    if (!isset($_SESSION['login']) || !isset($_SESSION['psswd'])) {
        header('location: login/index.php');
    }
    $filename = $_GET["name"]; //Obviously needs validation
    ob_end_clean();
    header("Content-Type: application/octet-stream; "); 
    header("Content-Transfer-Encoding: binary"); 
    header("Content-Length: ". filesize($filename).";"); 
    header("Content-disposition: attachment; filename=" . $filename);
    readfile($filename);
    die();
?>