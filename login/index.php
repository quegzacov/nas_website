<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
        <link rel="stylesheet" href="../master.css">
    </head>
    <body>
        <form id='form' action="cible.php" method="post">
            <div class="container-field">
                <p>Login:</p>
                <select class="container-field__field" name="login">
                    <option value="pi">Pi</option>
                    <option value="arthur">Arthur</option>
                </select>
            </div>
            <div class="container-field">
                <p>Psswd:</p>
                <input class="container-field__field" type="password" name="psswd">
            </div>
            <div class="container-field">
                <input class="container-field__field container-field__field--submit" type="submit" value="conexion">
            </div>
        </form>
    </body>
</html>
