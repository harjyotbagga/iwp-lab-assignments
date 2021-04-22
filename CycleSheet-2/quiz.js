var problems = [
    {"Who is the PM of India?": "Narendra Modi"},
    {"Who is the captain of the Indian Cricket Team?": "Virat Kohli"},
    {"Which is the National Sport of India?": "Hockey"}
];


var questionDisplayed;
var questionNumber = 0;
var userAnswers = [];

function loadQuestion() {
    var l = problems.length;
    var e = document.getElementById("question-text");
    questionDisplayed = Object.entries(problems[questionNumber]);
    e.textContent = questionDisplayed[0][0];
    var user_ans = document.getElementById("user-answer");
    user_ans.value = "";
    user_ans.focus();
}

function nextQuestion() {
    questionNumber++;
    var ans = document.getElementById("user-answer").value;
    if (ans=="")
        ans = "NaN";
    userAnswers.push(ans);
    if (questionNumber >= problems.length) {
        displaySolutions();
    } else {
        loadQuestion();
    }
}

function displaySolutions() {
    document.body.innerHTML = "";
    document.writeln(`<h2>QUIZ ANSWERS</h2>`)
    var score = 0;
    for(var i=0;i<userAnswers.length;i++) {
        questionDisplayed = Object.entries(problems[i]);
        document.writeln(`<p>QUESTION: ${questionDisplayed[0][0]}</p>`);
        document.writeln(`<p>YOUR ANS: ${userAnswers[i]}</p>`);
        document.writeln(`<p>ACTUAL ANS: ${questionDisplayed[0][1]}</p>`)
        document.writeln("<br>");
        if (questionDisplayed[0][1]==userAnswers[i])
            score++;
    }
    document.writeln(`FINAL SCORE: ${score}`);
}