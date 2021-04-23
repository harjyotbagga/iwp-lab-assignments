<?php
    $str = "Hello world!";
    //Split the string after each character and add a "." after each split
    // H.e.l.l.o. .w.o.r.l.d.!.
    echo chunk_split($str,1,".")."<br>";

    $str = "Hello world. It's a beautiful day.";
    //Break a string into an array
    // Array ( [0] => Hello [1] => world. [2] => It's [3] => a [4] => beautiful [5] => day. )
    print_r (explode(" ",$str));
    echo "<br>";
    
    
    $arr = array('Hello','World!','Beautiful','Day!');
    //Join array elements with a string
    // Hello World! Beautiful Day!
    echo implode(" ",$arr);
    echo "<br>";

    // Hello- World!- Beautiful- Day!
    echo join("- ",$arr);
    echo "<br>";
    echo "<br>";

    echo lcfirst("Hello world!")."<br>";
    echo ucfirst("hello world!")."<br>";
    echo ucwords("hello world")."<br>";
    echo strtoupper("Hello WORLD!")."<br>";
    echo strtolower("Hello WORLD.")."<br>";
    echo "<br>";

    $str = " Hello World! ";
    echo trim($str). "<br>";
    echo rtrim($str,"World!"). "<br>";
    echo ltrim($str,"Hello") . "<br>";
    echo "<br>";


    
?>
