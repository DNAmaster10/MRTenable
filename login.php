<?php
    session_start();
    if (isset($_SESSION["login_error"])) {
        $error = $_SESSION["login_error"];
        unset($_SESSION["login_error"]);
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
    </head>
    <body>
        <p id="error_message"><?php if (isset($error)) {echo $error; } ?></p>
        <form id="login_form" method="POST" action="/login_submit.php">
            <input type="text" name="username" placeholder="username">
            <input type="text" name="password" placeholder="password">
            <input type="submit" value="Login">
        </form>
    </body>
</html>