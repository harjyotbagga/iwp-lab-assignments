<!DOCTYPE html>
<html>

<head>
    <title>Delete Page</title>
</head>

<body>
    <centre>
        <?php

        $DB_HOSTNAME = "db";
        $DB_USERNAME = "root";
        $DB_PASSWORD = "root";
        $DB_NAME = "IWP";
        $conn = new mysqli($DB_HOSTNAME, $DB_USERNAME, $DB_PASSWORD, $DB_NAME);
        
        // Check connection
        if($conn->connect_error){
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }
        
        // Taking all 2 values from the form data(input)
        $cust_id = $_REQUEST['cust_id'];
        
        // Performing update query execution
        // here our table name is IWPFAT
        $sql = "DELETE FROM people WHERE cust_id='$cust_id'";
		
		if ($conn->query($sql) === TRUE) {
            echo "Record deleted successfully";
        } else {
            echo "Error deleting record: " . $conn->error;
        }
          
        $conn->close();
    ?>
    </centre>
</body>

</html>

