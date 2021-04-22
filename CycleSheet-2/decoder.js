var shuffledWord =  [
    {'FODO': 'FOOD'},
    {'MBIOLE': 'MOBILE'},
    {'DPAI': 'IPAD'}
];

var word;

function getShuffledWord() {
    var l = shuffledWord.length;
    var idx = Math.floor(Math.random()*l)
    var e = document.getElementById("shuffled-word");
    word = Object.entries(shuffledWord[idx]);
    e.textContent = word[0][0];
    var user_ans = document.getElementById("user-word");
    user_ans.focus();
}

function checkAns() {
    var user_ans = document.getElementById("user-word");
    if ((user_ans.value).toUpperCase() == word[0][1]) {
        alert("Correct Answer!");
        location.reload();    
    } else {
        alert("Sorry Incorrect Answer :(");
        user_ans.value = "";
        user_ans.focus();
    }
}   