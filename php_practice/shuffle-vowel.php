<?php
   $str = readline('Enter a string: ');
   $count = 0;
   $str = str_shuffle($str);
   while($str[1] != 'a' && $str[1] != 'e'&& $str[1] != 'i' && $str[1] != 'o'&& $str[1] != 'u'){
       $count++;
       $str = str_shuffle($str);
   }
   $chars = str_split($str);
   $count_vowels = 0;
   foreach ($chars as $char) {
       if($char == 'a' || $char == 'e' || $char == 'i' || $char == 'o' || $char == 'u'){
           $count_vowels++;
       }
    }
   echo "The shuffled string is : ",$str," has been shuffled ",$count," times.\n";
   echo "The total number of vowels in the string is : ",$count_vowels;
?>