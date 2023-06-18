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

function getAnswers() {
    
}