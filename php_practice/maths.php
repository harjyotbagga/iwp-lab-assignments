<!DOCTYPE html>
<html>

<body>

    <?php
    echo (pi() . "<br>");
    echo (min(0, 150, 30, 20, -8, -200) . "<br>");
    echo (max(0, 150, 30, 20, -8, -200) . "<br>");
    echo (abs(-6.7) . "<br>");
    echo (sqrt(63) . "<br>");
    echo (round(0.60) . "<br>");  // returns 1
    echo (round(0.49) . "<br>");  // returns 0
    echo (rand(10, 100) . "<br>");

    // Check if the type of a variable is integer   
    $x = 5985;
    var_dump(is_int($x));

    echo "<br>";

    // Check again... 
    $x = 59.85;
    var_dump(is_int($x));
    ?>

</body>

</html>