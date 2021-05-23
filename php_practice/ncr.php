<html>
<body>
	<h1> Finding the Combination Values </h1>
	<form method="get"> <input type="number" name="n" placeholder="N value" /> <input type="number" name="r" placeholder="R value" /> <input type="submit" name="submit" /> </form> 
</body>
</html>
<?php
 
function nCr( $n, $r)
{
    return fact($n) / (fact($r) * fact($n - $r));
}
 
function fact( $n)
{
    $res = 1;
    for ( $i = 2; $i <= $n; $i++)
        $res = $res * $i;
    return $res;
}
 
    $n = $_GET['n'];
    $r = $_GET['r'];
    print $n . "C" . $r . " = ";
    echo nCr($n, $r);
     
?>