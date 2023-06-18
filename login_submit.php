<?php
    session_start();

    //Connect to database
    include $_SERVER["DOCUMENT_ROOT"]."/dbh.php";

    //Check log in values are set
    if (!isset($_POST["username"])) {
        $_SESSION["login_error"] = "Invalid username";
        header("Location: /login.php");
        die();
    }
    if (!isset($_POST["password"])) {
        $_SESSION["login_error"] = "Invalid password";
        header("Location: /login.php");
        die();
    }

    //Check login details are valid
    //Check if username exists
    $stmt = $conn->prepare("SELECT count(*) FROM users WHERE username=?");
    $stmt->bind_param("s", $_POST["username"]);
    $stmt->execute();
    $stmt->bind_result($num_rows);
    $stmt->fetch();
    if ($num_rows < 1) {
        $_SESSION["login_error"] = "Please enter a valid username and password";
        header("Location: /login.php");
        die();
    }
    unset($num_rows);
    $stmt->close();

    $stmt = $conn->prepare("SELECT password FROM users WHERE username=?");
    $stmt->bind_param("s", $_POST["username"]);
    $stmt->execute();
    $stmt->bind_result($result);
    $stmt->fetch();
    $stmt->close();

    if (!password_verify($_POST["password"], $result)) {
        $_SESSION["login_error"] = "Please enter a valid username and password";
        header("Location: /login.php");
        die();
    }
    $_SESSION["username"] = $_POST["username"];
    header("Location: /admin.php");
?>