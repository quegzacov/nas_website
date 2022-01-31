<?php
    session_start();
    if (!isset($_SESSION['login']) || !isset($_SESSION['psswd'])) {
        header('location: login/index.php');
    }
    $file = $_GET['file'];
    echo '<pre>';
    $lines = file($file);
    foreach($lines as $line_num => $line) {
        echo htmlspecialchars($line);
    }
    echo '</pre>';
?>