<!DOCTYPE html>
<html lang="en">

<head>
	<title>Feedback</title>
</head>

<body>
	<centre>
		<h1>Give Feedback</h1>

		<form action="updt.php" method="post">
			
			<p>
				<label for="stu_id">ID:</label>
				<input type="text" name="stu_id" id="stu_id">
			</p>
			<button>GET Student Info</button>
		</form> 
		<?PHP
			$stu_id = $_POST['stu_id'];

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
			
			$sql = "SELECT * FROM student WHERE stu_id='$stu_id'";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
				// output data of each row
				while($row = $result->fetch_assoc()) {
					// print_r($row) ;
					// echo "<br>";
					echo "id: " . $row["stu_id"]. " - Name: " . $row["stu_name"]. " " . " - Course: " . $row["course"]. "<br>";
				}
			} else {
				echo "0 results";
			}
			$conn->close();
		?>
		<form action="updt.php" method="post">
			<input type="hidden" name="stu_id" value="<?php echo $stu_id;?>" id="stu_id">
			<p>
				<label for="course">Course:</label>
				<select id="course" name="course">
					<option value="English">English</option>
					<option value="Maths">Maths</option>
					<option value="CS">Computer Science</option>
					<option value="Hindi">Hindi</option>
				</select>
			</p>
			<button>GET Faculty Info</button>
		</form> 
		<?PHP
			$course = $_POST['course'];
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
			
			$sql = "SELECT * FROM faculty WHERE course_handled='$course'";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
				// output data of each row
				while($row = $result->fetch_assoc()) {
					// print_r($row) ;
					// echo "<br>";
					echo "id: " . $row["faculty_id"]. " - Name: " . $row["faculty_name"]. " " . " - Course Handled: " . $row["course_handled"]. "<br>";
				}
				echo "Course Feedback: ";
				echo "<br>";
				echo "<textarea name='feedback' id='' cols='30' rows='10'></textarea>";

			} else {
				echo "0 results";
			}
			$conn->close();
		?>
	</centre>
</body>

</html>

