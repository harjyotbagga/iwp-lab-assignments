<!DOCTYPE html>
<html>

<body>

    <?php
    $x = 1;

    while ($x <= 5) {
        echo "The number is: $x <br>";
        $x++;
    }

    echo "<br>";
    $x = 6;

    do {
        echo "The number is: $x <br>";
        $x++;
    } while ($x <= 5);

    echo "<br>";

    for ($x = 0; $x <= 3; $x++) {
        echo "The number is: $x <br>";
    }
    /*The foreach loop works only on arrays, and is used to loop through each key/value pair in an array.

Syntax
foreach ($array as $value) {
  code to be executed;
}
the current array element is assigned to $value and the array pointer is moved by one, until it reaches the last array element.
*/
    echo "<br>";
    $colors = array("red", "green", "blue", "yellow");

    foreach ($colors as $v) {
        echo "$v <br>";
    }
    /*The foreach loop works only on arrays, and is used to loop through each key/value pair in an array. */
    echo "<br>";
    $age = array("siva" => "35", "Rose" => "37", "Ram" => "43");

    foreach ($age as $x => $val) {
        echo "$x = $val<br>";
    }
    ?>

</body>

</html>