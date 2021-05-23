<?php
$arr = array(1,3,5,7,9,2,4,6,8,9,10,9);
function remove($a, $x) 
{ 
    $c = 0; 
    
    foreach($a as $a_key => $a_value) 
    { 
        if ( ($c > 0) && ($a_value == $x) ) 
        { 
            unset($a[$a_key]); 
        } 
        
        if ($a_value == $x) $c++; 
    } 
    
    return array_filter($a); 
} 
echo "After removing duplicate ","<br>";
print_r(remove($arr, 9));
array_splice($arr,6,1); 
echo "<br>";
echo "After removing index 6 value of array: ";
print_r( $arr);
?>