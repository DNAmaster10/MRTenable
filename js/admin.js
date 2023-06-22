var currentRound = 0;

function incrementRound() {
    currentRound = parseInt(document.getElementById("current_round").innerHTML);
    currentRound++;
    document.getElementById("current_round").innerHTML = currentRound;
    $.ajax({
        url: "/handle/changeRound.php",
        type: "GET",
        data: {round:currentRound},
        success: function(data) {
            if (data == "NoRound") {
                console.log("No round with that number exists, reverting!");
                currentRound--;
                document.getElementById("current_round").innerHTML = currentRound;
            }
            else {
                console.log("Changing rounds");
            }
        }
    });
}
function decrementRound() {
    currentRound = parseInt(document.getElementById("current_round").innerHTML);
    currentRound--;
    document.getElementById("current_round").innerHTML = currentRound;
    $.ajax({
        url: "/handle/changeRound.php",
        type: "GET",
        data: {round:currentRound},
        success: function(data) {
            if (data == "NoRound") {
                console.log("No round with that number exists, reverting!");
                currentRound++;
                document.getElementById("current_round").innerHTML = currentRound;
            }
            console.log("Changing rounds");
        }
    });
}
function reset() {

}

function revealAnswer(answer) {
    $.ajax({
        url: "/handle/revealAnswer.php",
        type: "GET",
        data: {answer:answer},
        success: function(data) {
            if (data == "0") {
                document.getElementById("answer_" + finalData[0] + "_container").classList.add("shown");
            }
            else if (data == "1") {
                document.getElementById("answer_" = finalData[0] + "_container").classList.add("hidden");
            }
        }
    });
}
function hideAnswer(answer) {
    $.ajax({
        url: "/handle/hideAnswer.php",
        type: "GET",
        data: {answer:answer},
        success: function(data) {
            if (data == "0") {
                document.getElementById("answer_" + finalData[0] + "_container").classList.add("shown");
            }
            else if (data == "1") {
                document.getElementById("answer_" = finalData[0] + "_container").classList.add("hidden");
            }
        }
    });
}

function getAnswers() {
    $.ajax({
        url: "/handle/getAnswersAdmin.php",
        type: "POST",
        success: function(data) {
            console.log("Returned: " + data);
            splitData = data.split("#-#");
            for (var i = 0; i < splitData.length; i++) {
                finalData = splitData[i].split("---");
                document.getElementById("answer_" + finalData[0] + "_container").className = "";
                if (finalData[2] == "0") {
                    document.getElementById("answer_" + finalData[0] + "_container").classList.add("shown");
                }
                else {
                    document.getElementById("answer_" = finalData[0] + "_container").classList.add("hidden");
                }
                document.getElementById("answer_" + finalData[0]).innerHTML = finalData[1];
            }           
        }
    });
}

getAnswers();