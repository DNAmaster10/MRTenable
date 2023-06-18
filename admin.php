<?php
    sessin_start();
    include $_SERVER["DOCUMENT_ROOT"]."/dbh.php";
    include $_SERVER["DOCUMENT_ROOT"]."/check_login.php";

    //Get current round
    $stmt = $conn->prepare("SELECT currentRound FROM game");
    $stmt->execute();
    $stmt->bind_result($result);
    $stmt->fetch();
    $stmt->close();

    $currentRound = $result;
    unset($result);
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Admin Page</title>
    </head>
    <body>
        <div id="main_container">
            <div id="round_selection_container">
                <button id="increment_round" onclick="incrementRound()">Increment Round</button>
                <p id="current_round"><?php echo($currentRound); ?></p>
                <button id="decrement_round" onclick="decrementRound()">Decrement Round</button>
            </div>
            <div id="game_container">
                <button id="wrong_answer_button">Wrong answer!</button>
                <div id="answers_container">
                    <div id="answer_1_container" class="answer_container">
                        <button id="answer_1_button" class="answer_button" onclick="revealAnswer(1)" value="1">Reveal</button>
                        <button id="re_answer_1_button" class="answer_button" onclick="removeAnswer(1)" value="1">Hide</button>
                        <p id="answer_1" class="answer"></p>
                    </div>
                    <div id="answer_2_container" class="answer_container">
                        <button id="answer_2_button" class="answer_button" onclick="revealAnswer(2)" value="2">Reveal</button>
                        <button id="re_answer_2_button" class="answer_button" onclick="removeAnswer(2)" value="2">Hide</button>
                        <p id="answer_2" class="answer"></p>
                    </div>
                    <div id="answer_3_container" class="answer_container">
                        <button id="answer_3_button" class="answer_button" onclick="revealAnswer(3)" value="3">Reveal</button>
                        <button id="re_answer_3_button" class="answer_button" onclick="removeAnswer(3)" value="3">Hide</button>
                        <p id="answer_3" class="answer"></p>
                    </div>
                    <div id="answer_4_container" class="answer_container">
                        <button id="answer_4_button" class="answer_button" onclick="revealAnswer(4)" value="4">Reveal</button>
                        <button id="re_answer_4_button" class="answer_button" onclick="removeAnswer(4)" value="4">Hide</button>
                        <p id="answer_4" class="answer"></p>
                    </div>
                    <div id="answer_5_container" class="answer_container">
                        <button id="answer_5_button" class="answer_button" onclick="revealAnswer(5)" value="5">Reveal</button>
                        <button id="re_answer_5_button" class="answer_button" onclick="removeAnswer(5)" value="2">Hide</button>
                        <p id="answer_5" class="answer"></p>
                    </div>
                    <div id="answer_6_container" class="answer_container">
                        <button id="answer_6_button" class="answer_button" onclick="revealAnswer(6)" value="6">Reveal</button>
                        <button id="re_answer_6_button" class="answer_button" onclick="removeAnswer(6)" value="6">Hide</button>
                        <p id="answer_6" class="answer"></p>
                    </div>
                    <div id="answer_7_container" class="answer_container">
                        <button id="answer_7_button" class="answer_button" onclick="revealAnswer(7)" value="7">Reveal</button>
                        <button id="re_answer_7_button" class="answer_button" onclick="removeAnswer(7)" value="7">Hide</button>
                        <p id="answer_7" class="answer"></p>
                    </div>
                    <div id="answer_8_container" class="answer_container">
                        <button id="answer_8_button" class="answer_button" onclick="revealAnswer(8)" value="8">Reveal</button>
                        <button id="re_answer_8_button" class="answer_button" onclick="removeAnswer(8)" value="8">Hide</button>
                        <p id="answer_8" class="answer"></p>
                    </div>
                    <div id="answer_9_container" class="answer_container">
                        <button id="answer_9_button" class="answer_button" onclick="revealAnswer(9)" value="9">Reveal</button>
                        <button id="re_answer_9_button" class="answer_button" onclick="removeAnswer(9)" value="9">Hide</button>
                        <p id="answer_9" class="answer"></p>
                    </div>
                    <div id="answer_10_container" class="answer_container">
                        <button id="answer_10_button" class="answer_button" onclick="revealAnswer(10)" value="10">Reveal</button>
                        <button id="re_answer_10_button" class="answer_button" onclick="removeAnswer(10)" value="10">Hide</button>
                        <p id="answer_10" class="answer"></p>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>