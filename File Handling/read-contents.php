<?php
    $myfile = fopen("source.txt", "r") or die("Unable to open file!");
    echo fread($myfile,filesize("source.txt"));
    fclose($myfile);
?>