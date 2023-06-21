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
    $stmt = $conn->prepare("INSERT INTO questions (question) VALUES (?)");
    $stmt->bind_param("s", $_POST["question"]);
    $stmt->execute();
    $id = mysqli_insert_id($conn);
    $stmt->close();

    //Add answers
    //round, answerNum, answer, hidden
    $stmt = $conn->prepare("INSERT INTO rounds ($id, 1, ?, 1) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("s", $_POST["answer1"]);
    $stmt->execute();
    $stmt->close();

    $stmt = $conn->prepare("INSERT INTO rounds ($id, 2, ?, 1) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("s", $_POST["answer2"]);
    $stmt->execute();
    $stmt->close();

    $stmt = $conn->prepare("INSERT INTO rounds ($id, 3, ?, 1) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("s", $_POST["answer3"]);
    $stmt->execute();
    $stmt->close();

    $stmt = $conn->prepare("INSERT INTO rounds ($id, 4, ?, 1) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("s", $_POST["answer4"]);
    $stmt->execute();
    $stmt->close();

    $stmt = $conn->prepare("INSERT INTO rounds ($id, 5, ?, 1) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("s", $_POST["answer5"]);
    $stmt->execute();
    $stmt->close();

    $stmt = $conn->prepare("INSERT INTO rounds ($id, 6, ?, 1) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("s", $_POST["answer6"]);
    $stmt->execute();
    $stmt->close();

    $stmt = $conn->prepare("INSERT INTO rounds ($id, 7, ?, 1) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("s", $_POST["answer7"]);
    $stmt->execute();
    $stmt->close();

    $stmt = $conn->prepare("INSERT INTO rounds ($id, 8, ?, 1) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("s", $_POST["answer8"]);
    $stmt->execute();
    $stmt->close();

    $stmt = $conn->prepare("INSERT INTO rounds ($id, 9, ?, 1) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("s", $_POST["answer9"]);
    $stmt->execute();
    $stmt->close();

    $stmt = $conn->prepare("INSERT INTO rounds ($id, 10, ?, 1) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("s", $_POST["answer10"]);
    $stmt->execute();
    $stmt->close();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Done!</title>
    </head>
    <body>
        <p>Done!</p>
    </body>
</html>