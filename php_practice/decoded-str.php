<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Question 5</title>
</head>

<body>
    <h3>Enter String to be decoded</h3>
    <input type="text" id="msg"><br><br>
    <button onclick="ques5()">Find</button>
</body>
<script>
    function ques5() {
        var a = document.getElementById("msg").value;

        let a_length = a.length;

        a = a.toLowerCase();

        let dictionary = {
            "a": 1,
            "b": 2,
            "c": 3,
            "d": 4,
            "e": 5,
            "f": 6,
            "g": 7,
            "h": 8,
            "i": 9,
            "j": 10,
            "k": 11,
            "l": 12,
            "m": 13,
            "n": 14,
            "o": 15,
            "p": 16,
            "q": 17,
            "r": 18,
            "s": 19,
            "t": 20,
            "u": 21,
            "v": 22,
            "w": 23,
            "x": 24,
            "y": 25,
            "z": 26
        };

        let converted_array = [];

        for (let i = 0; i < a_length; i++) {
            converted_array.push(dictionary[a[i]])
        }
        var str = converted_array.join("");
        (function() {
            output = [];
            var c = 0;
            var alphabets = ['', 'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z']

            function StringDecodeProblem(str, index) {
                var oneDigitcharacter = parseInt(str[index]),
                    twoDigitCharacter,
                    s;

                if (!isNaN(oneDigitcharacter)) {
                    if (index + 1 < str.length) {
                        twoDigitCharacter = parseInt(str[index] + str[index + 1]);
                        if (!isNaN(twoDigitCharacter) && twoDigitCharacter < 27) {
                            s = str.join('').replace(twoDigitCharacter, alphabets[twoDigitCharacter]);
                            StringDecodeProblem(s.split(''), index + 1);
                        }
                    }
                    str[index] = alphabets[oneDigitcharacter];
                    StringDecodeProblem(str, ++index);
                } else {
                    output.push(str.join(''));
                    c++;
                }
            }

            StringDecodeProblem(str.split(''), 0);
            document.write("The decoded strings are: ", "<br>");
            document.write(output.join('<br>'));
            document.write("<br>The no. of decoded strings are: ", c);
        })()
    }
</script>

</html>