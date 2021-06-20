    <?php

    $DB_HOSTNAME = "db";
    $DB_USERNAME = "root";
    $DB_PASSWORD = "root";
    $DB_NAME = "IWP";
    $conn = new mysqli($DB_HOSTNAME, $DB_USERNAME, $DB_PASSWORD);

    // Check connection
    if ($conn->connect_error) {
        die("ERROR: Could not connect. "
            . mysqli_connect_error());
    }

    $sql = "CREATE DATABASE if not exists IWP";
    if ($conn->query($sql) === TRUE) {
    echo "Database created successfully";
    } else {
    echo "Error creating database: " . $conn->error;
    }

    $sql = "use IWP";
    if ($conn->query($sql) === TRUE) {
    echo "Database created successfully";
    } else {
    echo "Error creating database: " . $conn->error;
    }
    
    $sql = "CREATE TABLE if not exists student (
        stu_id VARCHAR(10),
        stu_name VARCHAR(10),
        course VARCHAR(10)
        );";
    if ($conn->query($sql) === TRUE) {
    echo "Table created successfully";
    } else {
    echo "Error creating table: " . $conn->error;
    }


    $sql = "CREATE TABLE if not exists faculty (
        faculty_id VARCHAR(10),
        faculty_name VARCHAR(10),
        course_handled VARCHAR(10)
        )";
    if ($conn->query($sql) === TRUE) {
    echo "Table created successfully";
    } else {
    echo "Error creating table: " . $conn->error;
    }

    $conn->close();

    ?>
