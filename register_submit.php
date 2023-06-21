<?php
    include $_SERVER["DOCUMENT_ROOT"]."/dbh.php";
    $hash = password_hash($_POST["password"], PASSWORD_DEFAULT);
    $stmt = $conn->prepare("INSERT INTO users (username, password) VALUES (?,?)");
    $stmt->bind_param("ss", $_POST["username"], $hash);
    $stmt->execute();
    $stmt->close();

    header("Location: /login.php");
?>