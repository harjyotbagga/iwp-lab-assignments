<html>
<body>
<?php
$x = 100;  
$y = 50;

if ($x == 100 or $y == 50) {
    echo "Hello world!";
}
echo "<br>";
$x = 10;  
$y = 50;

if ($x == 1000 || $y == 50) 
{
    echo "Hello world!";
    }
    
    else 
    {
    echo "welcome";
}

echo "<br>";

//Ternary operator
 // if empty($user) = TRUE, set $status = "anonymous"
   echo $status = (empty($user)) ? "anonymous" : "logged in";
   echo("<br>");

   $user = "John Doe";
   // if empty($user) = FALSE, set $status = "logged in"
   echo $status = (empty($user)) ? "anonymous" : "logged in";

?>  
</body>
</html>