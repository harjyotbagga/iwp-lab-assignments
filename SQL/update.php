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
    $new_name = "Amay";
    
    $sql = "UPDATE student SET stu_name='$new_name' where stu_id='$stu_id';";
    
    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . $conn->error;
    }
        
    $conn->close();
?>