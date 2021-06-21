<?php
    $srcfile = "source.txt";
    $destfile = "dest.txt";
    echo "The existing file data : ","<br>";
    echo "source.txt: ",file_get_contents("source.txt"),"<br>"; 
    echo "dest.txt: ",file_get_contents("dest.txt"),"<br>"; 

    if (!copy($srcfile, $destfile)) {
        echo "File cannot be copied! ", "<br>";
    }
    else {
        echo "File has been copied!", "<br>";
    }
    echo "After copying from source to destination the data of dest.txt file: ","<br>";
    echo file_get_contents("dest.txt"); 
?>
