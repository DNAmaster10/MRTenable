<?php
    if(!isset($_SESSION["username"])) {
        $_SESSION["error"] = "Login session expired";
        header("Location: /error.php");
        die();
    }
?>