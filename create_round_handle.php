<?php
    session_start();
    include $_SERVER["DOCUMENT_ROOT"]."/dbh.php";
    include $_SERVER["DOCUMENT_ROOT"]."/check_login.php";

    //Check all values are set
    if (!isset($_POST["question"])) {
        $_SESSION["error"] = "Please enter a question";
        header("Location: /error.php");
        die();
    }
    if (!isset($_POST["answer1"])) {
        $_SESSION["error"] = "Please enter an answer";
        header("Location: /error.php");
        die();
    }
    if (!isset($_POST["answer2"])) {
        $_SESSION["error"] = "Please enter an answer";
        header("Location: /error.php");
        die();
    }
    if (!isset($_POST["answer3"])) {
        $_SESSION["error"] = "Please enter an answer";
        header("Location: /error.php");
        die();
    }
    if (!isset($_POST["answer4"])) {
        $_SESSION["error"] = "Please enter an answer";
        header("Location: /error.php");
        die();
    }
    if (!isset($_POST["answer5"])) {
        $_SESSION["error"] = "Please enter an answer";
        header("Location: /error.php");
        die();
    }
    if (!isset($_POST["answer6"])) {
        $_SESSION["error"] = "Please enter an answer";
        header("Location: /error.php");
        die();
    }
    if (!isset($_POST["answer7"])) {
        $_SESSION["error"] = "Please enter an answer";
        header("Location: /error.php");
        die();
    }
    if (!isset($_POST["answer8"])) {
        $_SESSION["error"] = "Please enter an answer";
        header("Location: /error.php");
        die();
    }
    if (!isset($_POST["answer9"])) {
        $_SESSION["error"] = "Please enter an answer";
        header("Location: /error.php");
        die();
    }
    if (!isset($_POST["answer10"])) {
        $_SESSION["error"] = "Please enter an answer";
        header("Location: /error.php");
        die();
    }

    //We now know all values are set. Create the round.
    
?>