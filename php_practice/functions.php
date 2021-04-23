<!DOCTYPE html>
<html>

<body>

    <?php

    function writeMsg()
    {
        echo "Hello world!";
    }

    writeMsg();

    echo "<br>";
    echo "<br>";

    function colorsName($fname)
    {
        echo "$fname color.<br>";
    }

    colorsName("red");
    colorsName("green");
    colorsName("black");
    colorsName("blue");
    colorsName("yellow");
    echo "<br>";
    echo "<br>";
    function familyName($fname, $year)
    {
        echo "$fname Born in $year <br>";
    }

    familyName("siva", "1975");
    familyName("Sam", "1978");
    familyName("Kavin", "1983");

    ?>

</body>

</html>