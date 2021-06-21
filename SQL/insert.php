<?php
    $DB_HOSTNAME = "db";
    $DB_USERNAME = "root";
    $DB_PASSWORD = "root";
    $DB_NAME = "IWP";
    $conn = new mysqli($DB_HOSTNAME, $DB_USERNAME, $DB_PASSWORD, $DB_NAME);
    
    if($conn->connect_error){
        die("ERROR: Could not connect. "
            . mysqli_connect_error());
    }
    
    $stu_id = "18BCE0001";
    $stu_name = "Aman";
    $course = "Computer Science";
    
    $sql = "INSERT INTO student VALUES ('$stu_id', '$stu_name','$course');";
    
    if ($conn->query($sql) === TRUE) {
        echo "New student added successfully";
        } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
        }
        
        $conn->close();
?>