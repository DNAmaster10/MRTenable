<?php
    include $_SERVER["DOCUMENT_ROOT"]."/dbh.php";

    //Get the current round
    $stmt = $conn->prepare("SELECT currentRound FROM game");
    $stmt->execute();
    $stmt->bind_result($roundNum);
    $stmt->fetch();
    $stmt->close();

    //Get the question
    $stmt = $conn->prepare("SELECT question FROM questions WHERE round=?");
    $stmt->bind_param("i", $roundNum);
    $stmt->execute();
    $stmt->bind_result($question);
    $stmt->fetch();
    $stmt->close();
placeholder
    echo ($question);
?>