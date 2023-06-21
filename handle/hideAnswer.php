<?php
    session_start();
    include $_SERVER["DOCUMENT_ROOT"]."/dbh.php";
    include $_SERVER["DOCUMENT_ROOT"]."/check_login.php";

    if (!isset($_GET["answer"])) {
        die();
    }

    //Check that answer exists

    //Get the current round
    $stmt = $conn->preare("SELECT currentRound FROM game");
    $stmt->execute();
    $stmt->bind_result($result);
    $stmt->fetch();
    $stmt->close();
    $currentRound = $result;
    unset($result);

    //Check the answer is in the database
    $stmt = $conn->prepare("SELECT count(*) FROM rounds WHERE round=? AND answerNum=?");
    $stmt->bind_param("ii", $currentRound, $_GET["answer"]);
    $stmt->execute();
    $stmt->bind_result($result);
    $stmt->fetch();
    if ($result < 1) {
        die();
    }
    unset($result);
    $stmt->close();

    //Update the answer

    $stmt = $conn->prepare("UPDATE rounds SET hidden=1");
    $stmt->execute();
    $stmt->close();
?>