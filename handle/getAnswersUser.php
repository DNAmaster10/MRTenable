<?php
    include $_SERVER["DOCUMENT_ROOT"]."/dbh.php";
    
    //Get the current round
    $stmt = $conn->prepare("SELECT currentRound FROM game");
    $stmt->execute();
    $stmt->bind_result($currentRound);
    $stmt->fetch();
    $stmt->close();

    $stmt = $conn->prepare("SELECT answerNum,answer,hidden FROM rounds WHERE round=?");
    $stmt->bind_param("i", $currentRound);
    $stmt->execute();
    $result = $stmt->get_result();
    
    $returnString = "";
    while ($row = $result->fetch_assoc()) {
        if ($row["hidden"] == 1) {
            $returnString += $row["answerNum"]."---hidden---".$row["hidden"]."#-#";
        }
        else {
            $returnString += $row["answerNum"]."---".$row["answer"]."---".$row["hidden"]."#-#";
        }
    }
    echo ($returnString);
?>