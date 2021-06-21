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
    
    $sql = "SELECT * FROM student;";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "<strong>ID:</strong>  " . $row["stu_id"]. " - <strong>Name:</strong> " . $row["stu_name"]. " - <strong>Course:</strong>  " . $row["course"]. "<br>";
        }
    } else {
    echo "0 results";
    }
    $conn->close();
?>