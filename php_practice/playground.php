<?php
    $fruits = array("apple", "banana", "cheeku", "cherry");
    for($i=0;$i<count($fruits);$i++)  {
        echo "$fruits[$i]<br>";
    }
    echo "<br>";
    foreach($fruits as $item) {
        echo "$item <br>";
    }
    echo "<br>";


    $cars = array(
        "cheap" => "maruti",
        "reasonable" => "toyota",
        "expensive" => "audi"
    );
    foreach($cars as $key=>$value) {
        echo "$value is a $key car. <br>";
    }
    echo "<br>";

    ksort($cars);
    foreach($cars as $key=>$value) {
        echo "$value is a $key car. <br>";
    }
    echo "<br>";

    asort($cars);
    foreach($cars as $key=>$value) {
        echo "$value is a $key car. <br>";
    }
    echo "<br>";

    rsort($cars);
    foreach($cars as $key=>$value) {
        echo "$value is a $key car. <br>";
    }
    echo "<br>";


    $nos = array(1,2,3,4,5);
    echo "The count is " . count($nos) . "<br>";
    echo "The sum is " . array_sum($nos) . "<br>";
    echo "<br>";

    while($no = current($nos)) {
        echo "$no ";
        next($nos);
    }
    echo "<br>";

    $arr = array(0,1,2,3,4);
    print_r($arr);  // Array ( [0] => 0 [1] => 1 [2] => 2 [3] => 3 [4] => 4 )
    echo "<br>";
    $arr_s = array_splice($arr, 2);  
    print_r($arr);  // arr[0], arr[1]
    echo "<br>";
    print_r($arr_s);  // arr[2], arr[3], arr[4]
    echo "<br>";
    echo "<br>";

    print_r($fruits);
    echo "<br>";
    array_shift($fruits);  // Removes the first element
    print_r($fruits);
    echo "<br>";
    echo "<br>";

    $colors = array(
        0=>"red",
        1=>"green",
        2=>"blue",
        3=>"orange"
    );
    print_r($colors);
    echo "<br>";
    $color_key = array_search("green", $colors);
    echo "Green at key=$color_key <br>";
    echo "<br>";

    $arr_rev_keys_change = array_reverse($colors);  // Keys changes
    print_r($arr_rev_keys_change);
    echo "<br>";
    $arr_rev_no_keys_change = array_reverse($colors, true);
    print_r($arr_rev_no_keys_change);
    echo "<br>";
    echo "<br>";

    $arr1 = array(1,2,3);
    $arr2 = array('a','b','c');
    $arr_merged = array_merge($arr1, $arr2);
    print_r($arr_merged);
    echo "<br>";
    echo "<br>";

    print_r($colors);
    echo "<br>";
    $c = array_pop($colors);    // Removing last element
    echo "$c <br>";
    print_r($colors);
    echo "<br>";
    array_push($colors, "brown");
    print_r($colors);           // Adding in the end
    echo "<br>";
    echo "<br>";
    $replacement1 = array(3=>"Pink");
    $new_colors = array_replace($colors, $replacement1);
    print_r($colors);
    echo "<br>";
    print_r($new_colors);       // Original Array
    echo "<br>";                // Replaced Array

?>
