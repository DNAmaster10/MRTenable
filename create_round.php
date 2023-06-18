<?php
    session_start();
    include $_SERVER["DOCUMENT_ROOT"]."/dbh.php";
    include $_SERVER["DOCUMENT_ROOT"]."/check_login.php";
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Create</title>
    </head>
    <body>
        <div id="main_container">
            <form id="create_form" method="POST" action="/create_round_handle.php">
                <input type="text" name="question" placeholder="question">
                <input type="text" name="answer1" placeholder="answer1">
                <input type="text" name="answer2" placeholder="answer2">
                <input type="text" name="answer3" placeholder="answer3">
                <input type="text" name="answer4" placeholder="answer4">
                <input type="text" name="answer5" placeholder="answer5">
                <input type="text" name="answer6" placeholder="answer6">
                <input type="text" name="answer7" placeholder="answer7">
                <input type="text" name="answer8" placeholder="answer8">
                <input type="text" name="answer9" placeholder="answer9">
                <input type="text" name="answer10" placeholder="answer10">
                <input type="submit" value="Create Round">
            </form>
        </div>
    </body>
</html>