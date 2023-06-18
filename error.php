<?php
    if (!isset($_SESSION["error"])) {
        $error = "An error has occured";
    }
    else {
        $error = $_SESSION["error"];
        unset($_SESSION["error"]);
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Error</title>
    </head>
    <body>
        <p id="error_message"><?php echo($error); ?></p>
    </body>
</html>