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
    
    $sql = "DELETE FROM student WHERE stu_id='$stu_id';";
    
    if ($conn->query($sql) === TRUE) {
        echo "Record deleted successfully";
    } else {
        echo "Error deleting record: " . $conn->error;
    }
        
    $conn->close();
?>