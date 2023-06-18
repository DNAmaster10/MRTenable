<?php
    session_start();
    if (!isset($_GET["round"])) {
        die();
    }
    include $_SERVER["DOCUMENT_ROOT"]."/dbh.php";
    include $_SERVER["DOCUMENT_ROOT"]."/check_login.php";

    //Check that round exists
    $stmt = $conn->prepare("SELECT count(*) FROM game WHERE round=?");
    $stmt->bind_param("i", $_GET["round"]);
    $stmt->execute();
    $stmt->bind_result($result);
    $stmt->fetch();
    if ($result < 1) {
        echo "NoRound";
        die();
    }
    $stmt->close();
    unset($result);

    $stmt = $conn->prepare("UPDATE game SET currentRound=?");
    $stmt->bind_param("i", $_GET["round"]);
    $stmt->execute();
    $stmt->close();
    echo "done";
?>