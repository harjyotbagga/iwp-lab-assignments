<html>

<head>
    <title>PHP Function</title>
</head>

<body>
    <?php

        //Function 1 - without argument
        function writeMessage()
        {
            echo "<h2 align=\"center\">Function Call - Example 1</h2>";
            writeMessage();
        }


        //Function 2 - with arguments
        function addFunction($num1, $num2)
        {
            $sum = $num1 + $num2;
            echo "Sum of the two numbers is : $sum.<br>";
        }
        addFunction(10, 20);

                
        //Function 3 - Passing Arguments by Reference
        function addSix(&$num)
        {
            $num += 6;
        }
        
        // Here passing by Value
        function addFive($num)
        {
            $num += 5;
        }
        $orignum = 10;
        addFive($orignum);
        echo "Original Value is $orignum<br>";
        addSix($orignum);
        echo "Changed value after passing by reference is $orignum<br>";


        //Function 4 - with return statement
        function addFunction2($num1, $num2)
        {
            $sum = $num1 + $num2;
            return $sum;
        }
        $return_value = addFunction2(10, 20);
        echo "Returned value from the function : $return_value<br>";

        
        //Function 5 - with default value
        function printMe($param = 1)
        {
            echo "The argument value is $param<br>";
        }
        printMe(100);
        printMe();
    ?>
</body>

</html>