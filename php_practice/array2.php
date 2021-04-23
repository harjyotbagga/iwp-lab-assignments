<!DOCTYPE html>
<html>

<body>

    <?php
    $fruits = array("apple", "kiwi", "orange", "bananna");
    sort($fruits);

    $clength = count($fruits);
    for ($x = 0; $x < $clength; $x++) {
        echo $fruits[$x];
        echo "<br>";
    }
    echo "<br>";

    /*sort() and rsort() — For sorting indexed arrays
    asort() and arsort() — For sorting associative arrays by value
    ksort() and krsort() — For sorting associative arrays by key   */

    rsort($fruits);
    for ($x = 0; $x < $clength; $x++) {
        echo $fruits[$x];
        echo "<br>";
    }
    echo "<br>";
    //sorts an associative array in ascending order, according to the value
    $age = array("Peter" => "40", "sam" => "53", "siva" => "43");
    asort($age); //Ascending Order by Value

    foreach ($age as $x => $x_value) {
        echo "Key=" . $x . ", Value=" . $x_value;
        echo "<br>";
    }
    echo "<br>";
    //sorts an associative array in ascending order, according to the key
    $age = array("siva" => "35", "sanjay" => "37", "arun" => "43");
    ksort($age);
    //krsort($age);  Descending Order

    foreach ($age as $x => $x_value) {
        echo "Key=" . $x . ", Value=" . $x_value;
        echo "<br>";
    }
    ?>

</body>

</html>