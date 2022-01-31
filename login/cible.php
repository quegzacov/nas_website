<?php
if (isset($_POST['login']) && isset($_POST['psswd'])) {
    $bdd = new SQLite3('../login.db', SQLITE3_OPEN_READWRITE);

    $reponse = $bdd->query("SELECT * FROM login");

    while ($line = $reponse->fetchArray()) {
        if ($line[0] == $_POST['login'] && $line[1] == $_POST['psswd']) {
            session_start();
            $_SESSION['login'] = $_POST['login'];
            $_SESSION['psswd'] = $_POST['psswd'];
            header('location: ../index.php');
        }
    }
}

echo '<meta http-equiv="refresh" content="0;URL=index.php">';

?>
