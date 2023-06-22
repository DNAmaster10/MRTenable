<?php
    session_start();
    include $_SERVER["DOCUMENT_ROOT"]."/dbh.php";
    include $_SERVER["DOCUMENT_ROOT"]."/check_login.php";

    //Check that the answer isn't already wrong
    $stmt = $conn->prepare("SELECT shouldFlashWrong FROM game");
    $stmt->execute();
    $stmt->bind_result($result);
    $stmt->fetch();
    $stmt->close();

    if ($result == 1) {
        die();
    }
    unset($result);
    error_log("Making Wrong");

    $stmt = $conn->prepare("UPDATE game SET shouldFlashWrong=1");
    $stmt->execute();
    $stmt->close();

    //Wait for 2 seconds.
    sleep(3);
    error_log("Making Right");
    $stmt = $conn->prepare("UPDATE game SET shouldFlashWrong=0");
    $stmt->execute();
    $stmt->close();
?>