<?php
    session_start();
    include $_SERVER["DOCUMENT_ROOT"]."/dbh.php";
    include $_SERVER["DOCUMENT_ROOT"]."/check_login.php";
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Home</title>
    </head>
    <body>
        <p>Welcome back <?php echo($_SESSION["username"]); ?></p>
        <form action="/create_round.php">
            <input type="submit" value="Create Round">
        </form>
        <form action="/register.php">
            <input type="submit" value="Register a user">
        </form>
        <form action="/admin.php">
            <input type="submit" value="Manage Round">
        </form>
    </body>
</html>