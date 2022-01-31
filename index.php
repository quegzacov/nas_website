<?php
    session_start();
    if (!isset($_SESSION['login']) || !isset($_SESSION['psswd'])) {
	    header('location: login/index.php');
    }
    system('sudo ./log.sh $_SESSION["login"]');    
    if (isset($_GET['dir'])) {
        $dir = $_GET['dir'];
    }
    else{
        $dir = '/home/arthur/';
    }
    $rel_path = '';
    $pwd = explode('/', exec('pwd').'/');
    $l_path = explode('/', $dir);
    for ($loop=0; $loop < 2; $loop++) { 
        if ($loop == 0) {
            for ($i=1; $i < count($pwd); $i++) {
                if (isset($l_path[$i])){
                    if ($pwd[$i] != $l_path[$i]) {
                        for ($j=$i; $j < count($pwd); $j++) { 
                            $rel_path .= '../';
                        }
                    break;
                    }  
                }
                else {
                    for ($j=$i; $j < count($pwd); $j++) { 
                        $rel_path .= '../';
                    }
                    break;
                }
            }
        }
        else {
            for ($l=$i; $l < count($l_path); $l++) { 
                $rel_path .= $l_path[$l].'/';
            }
        }
    }
    system('whoami');
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="master.css">
    <title><?php echo `basename $dir`; ?></title>
    <script src='script.js' defer></script>
</head>
<body>
    <article>
        <?php
            echo "<h1>$dir</h1>";
            $new_dir = explode("/", $dir);
            unset($new_dir[count($new_dir)-2]);
            unset($new_dir[count($new_dir)-1]);
            echo "<div id='retour' class='link'><a href='index.php?dir=" . implode('/', $new_dir) ."'>retour</a><img src='img/return.png' alt='file' width='40px'></div><br>";
            $list = explode(",", exec("ls $dir | tr '\n' ','"));
            for ($i=0; $i < count($list)-1; $i++){
                if (exec("if [ -f $dir$list[$i] ]; then echo 'true'; fi") == 'true'){
                    echo "<div class='menu'>
                            <div><a href='download.php?path=$rel_path$list[$i]&'>Download</a></div>
                            <div><a href='read.php?name=$rel_path$list[$i]'>Read</a></div>
                        </div>";
                    echo "<div class='file link'><span>$list[$i]</span><img src='img/file.png' alt='file' width='40px'></div><br>"; 
                }
                else{
                    echo "<div class='link'><a href='index.php?dir=$dir$list[$i]/'>$list[$i]</a><img src='img/folder.png' alt='folder' width='40px'></div><br>";
                }
            }
        ?>
    </article>
</body>
</html>
