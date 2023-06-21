<?php
    session_start();
    include $_SERVER["DOCUMENT_ROOT"]."/dbh.php";
    include $_SERVER["DOCUMENT_ROOT"]."/check_login.php";

    //Get the current round
    $stmt = $conn->prepare("SELECT currentRound FROM game");
    $stmt->execute();
    $stmt->bind_result($result);
    $stmt->fetch();
    $stmt->close();

    $currentRound = $result;
    unset($result);

    //Get the answers
    $return_string = "";
    $stmt = $conn->prepare("SELECT answerNum,answer,hidden FROM rounds WHERE round=?");
    $stmt->bind_param("i", $currentRound);
    $stmt->execute();
    $result = $stmt->get_result();
    while($row = $result->fetch_assoc()) {
        $return_string = $return_string.($row["answerNum"]."---".$row["answer"]."---".$row["hidden"]."#-#");
    }

    echo($return_string);
?>