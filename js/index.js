function getAnswers() {
    $.ajax({
        url: "/handle/getAnswersUser.php",
        type: "GET",
        success: function(data) {
            splitData = data.split("#-#");
            for (var i = 0; i < splitData.length - 1; i++) {
                finalData = splitData[i].split("---");
                if (finalData[2] == "1") {
                    document.getElementById("answer_" + finalData[0]).innerHTML = "";
                    document.getElementById("answer_" + finalData[0] + "_container").classList.remove("shown");
                    document.getElementById("answer_" + finalData[0] + "_container").classList.add("hidden");
                }
                else {
                    document.getElementById("answer_" + finalData[0]).innerHTML = finalData[1];
                    document.getElementById("answer_" + finalData[0] + "_container").classList.remove("hidden");
                    document.getElementById("answer_" + finalData[0] + "_container").classList.add("shown");
                }
            }
        }
    });
}
function getQuestion() {
    $.ajax({
        url: "/handle/getQuestion.php",
        type: "GET",
        success: function(data) {
            document.getElementById("question").innerHTML = "Question: " + data;
        }
    });
}
function checkWrong() {
    $.ajax({
        url: "/handle/checkWrong.php",
        type: "GET",
        success: function data() {
            if (data == "1") {
                document.getElementById("main_container").classList.add("wrong");
            }
            else {
                document.getElementById("main_container").classList.remove("wrong");
            }
        }
    });
}
getQuestion();
getAnswers();
checkWrong();

var time = 1;
function timeLoop() {
    setTimeout(function() {
        getQuestion();
        getAnswers();
        checkWrong();
        time++;
        if (time < 10) {
            timeLoop();
        }
    }, 500)
}

timeLoop();