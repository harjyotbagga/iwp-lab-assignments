<!DOCTYPE html>
<html>
<body>

<?php
//Indexed Arrays
$fruits= array("apple", "bananna", "kiwi","orange");
echo count($fruits);

echo "<br>";

echo "I like " . $fruits[0] . ", " . $fruits[1] . " and " . $fruits[2] . ".";
echo "<br>";

//Associative Array
$age = array("Peter"=>"35", "sam"=>"37", "kavin"=>"43");
echo "Peter is " . $age['Peter'] . " years old.";
echo "<br>";

$age = array("Peter"=>"35", "sam"=>"37", "paul"=>"43");

foreach($age as $x => $x_value) {
  echo "Key=" . $x . ", Value=" . $x_value;
  echo "<br>";
//unset($age["kavin"]);
//print_r($age);
}
?>

</body>
</html> 