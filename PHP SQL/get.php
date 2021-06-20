<!DOCTYPE html>
<html>

<head>
    <title>Get Page</title>
</head>

<body>
    <centre>
    <h2>Printing All records</h2>
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
        // $cust_id = $_REQUEST['cust_id'];
        // $Ticket = $_REQUEST['Tickets'];
        
        // Performing update query execution
        // here our table name is IWPFAT
        $sql = "SELECT * FROM people";
		$result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                // print_r($row) ;
                // echo "<br>";
                  echo "id: " . $row["cust_id"]. " - Name: " . $row["first_name"]. " " . $row["last_name"]. "<br>";
            }
          } else {
            echo "0 results";
          }
          $conn->close();
    ?>
    </centre>
</body>

</html>

