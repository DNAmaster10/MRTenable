<?php
    include $_SERVER["DOCUMENT_ROOT"]."/dbh.php";

    $stmt = $conn->prepare("SELECT shouldFlashWrong FROM game");
    $stmt->execute();
    $stmt->bind_result($result);
    $stmt->fetch();
    $stmt->close();

    echo ($result);
?>