<?php 

echo "<pre>";
    print_r($_POST);
    echo "</pre>";
    echo "Username : {$_POST['name']}<br>";
    echo "Password : {$_POST['password']}<br>";
    echo "Gender : {$_POST['gender']}<br>";
    echo "Month : {$_POST['month']}<br>";
    echo "Date : {$_POST['date']}<br>";
    echo "Year : {$_POST['year']}<br>";
    echo "Course : {$_POST['course']}<br>";
    echo "E-Mail : {$_POST['email']}";

?>