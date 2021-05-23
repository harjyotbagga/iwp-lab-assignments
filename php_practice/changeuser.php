<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Ques 3</title>
    <style>
        body {
            font-size: larger;
            font-weight: 700;
            font-family: 'Lucida Sans';
        }
    </style>
</head>

<body>
    <form method="get">
        Username: <input type="text" name="name"><br><br>
        Background color: <input type="text" name="bg"><br><br>
        String: <input type="text" name="string"><br><br>
        <input type="submit" name="submit" formmethod="GET" value="submit">
    </form>
    <?php
    echo "Welcome ", $_GET["name"];
    echo "<br>";
    $Hour = date('G');

    if ($Hour >= 5 && $Hour <= 11) {
        echo "Good Morning";
    } else if ($Hour >= 12 && $Hour <= 18) {
        echo "Good Afternoon";
    } else if ($Hour >= 19 || $Hour <= 4) {
        echo "Good Evening";
    }
    echo "<br>";
    $ch = $_GET["bg"];
    switch ($ch) {
        case "r":
            echo '<body style="background-color:red">';
            break;
        case "b":
            echo '<body style="background-color:blue">';
            break;
        case "g":
            echo '<body style="background-color:green">';
            break;
        case "y":
            echo '<body style="background-color:yellow">';
            break;
        case "p":
            echo '<body style="background-color:pink">';
            break;
        case "o":
            echo '<body style="background-color:orange">';
            break;
        case "c":
            echo '<body style="background-color:crimson">';
            break;
    }
    $str = $_GET["string"];
    $reverse = '';
    $i = 0;
    while (!empty($str[$i])) {
        $reverse = $str[$i] . $reverse;
        $i++;
    }
    echo $str;
    if ($reverse == $str)
        echo " is Palindrome string";
    else
        echo " is Not palindrome ";
    ?>
</body>


</html>