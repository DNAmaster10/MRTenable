<?php

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Register</title>
    </head>
    <body>
        <p>Use this page to register admin users</p>
        <form action="/register_submit.php" method="POST">
            <input type="text" name="username" placeholder="username">
            <input type="text" name="password" placeholder="passoword">
            <input type="submit" value="Register User">
        </form>
    </body>
</html>