<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Ques 4</title>
</head>

<body>
    <br>
    <form name="myForm" id="" onsubmit="return validateForm()" method="post">
        <input type="text" id="" placeholder="Enter Name" name="fname">
        <input type="submit" id="" value="submit">
    </form>

</body>
<script>
    function caseChal(val) {
        var answer = "";
        switch (val) {
            case "a":
            case "i":
            case "j":
            case "q":
            case "y":
            case "A":
            case "I":
            case "J":
            case "Q":
            case "Y":
                answer = 1;
                break;
            case "b":
            case "k":
            case "r":
            case "B":
            case "K":
            case "R":
                answer = 2;
                break;
            case "c":
            case "g":
            case "l":
            case "s":
            case "C":
            case "G":
            case "L":
            case "S":
                answer = 3;
                break;
            case "d":
            case "m":
            case "t":
            case "D":
            case "M":
            case "T":
                answer = 4;
                break;
            case "e":
            case "h":
            case "n":
            case "x":
            case "E":
            case "H":
            case "N":
            case "X":
                answer = 5;
                break;
            case "u":
            case "v":
            case "w":
            case "U":
            case "V":
            case "W":
                answer = 6;
                break;
            case "o":
            case "z":
            case "O":
            case "Z":
                answer = 7;
                break;
            case "f":
            case "p":
            case "F":
            case "P":
                answer = 8;
                break;
            default:
                answer = 0;
        }
        return answer;
    }

    function validateForm() {
        var x = document.forms["myForm"]["fname"].value;
        if (x == "") {
            alert("Name must be filled out");
            return false;
        } else {
            var sumChal = 0;
            for (countletter = 0; countletter < x.length; countletter++) {
                sumChal += caseChal(x[countletter]);
            }

            var finStringChal = "\"" + x + "\" (in Chaldean Numerology)<br><br>equals to " + sumChal;

        }
        var arr = [11, 22, 33];
        var n = sumChal;

        function getSum(n) {
            var sum = 0;
            if (arr.includes(n) == true)
                sum = n;
            else {
                while (n > 0 || sum > 9) {
                    if (n == 0) {
                        n = sum;
                        sum = 0;
                    }
                    sum = sum + n % 10;
                    n = Math.floor(n / 10);
                }
            }
            return sum;
        }
        document.write("The chaldean destiny number of the name is: ")
        var destnum = getSum(n);
        document.write(destnum);
        document.write("<br> Your Personality: ");
        switch (destnum) {
            case 1:
                document.write("<h4>You radiate with a dynamic and efficient energy.</h4>");
                break;
            case 2:
                document.write("<h4>You appear friendly and unpretentious.</h4>");
                break;
            case 3:
                document.write("<h4>You are uplifting, inspiring, and charming.</h4>");
                break;
            case 4:
                document.write("<h4>You love the intimacy, consistency, and the security a family provides.</h4>");
                break;
            case 5:
                document.write("<h4>You are a stimulating person.</h4>");
                break;
            case 6:
                document.write("<h4>You radiate understanding and compassion</h4>");
                break;
            case 7:
                document.write("<h4>You seem mysterious and different.</h4>");
                break;
            case 8:
                document.write("<h4>You appear strong and powerful.</h4>");
                break;
            case 9:
                document.write("<h4>You have an impressive and aristocratic bearing.</h4>");
                break;
            case 11:
                document.write("<h4>You have worked hard to gain confidence and overcome, at least to some extent, an in-born shyness.</h4>");
                break;
            case 22:
                document.write("<h4>You radiate reliability and consistency.</h4>");
                break;
            case 33:
                document.write("<h4>You inspire confidence.</h4>");
                break;
            default:
                document.write("INVALID NUMBER");
                break;
        }
    }
</script>

</html>