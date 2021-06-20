<!DOCTYPE html>
<html lang="en">

<head>
	<title>Register Student</title>
</head>

<body>
	<centre>
		<h1>Inseting Form data in Database</h1>

		<form action="insert.php" method="post">
			
			<p>
				<label for="stu_id">ID:</label>
				<input type="text" name="stu_id" id="stu_id">
			</p>


			
			<p>
				<label for="firstName">Name:</label>
				<input type="text" name="first_name" id="firstName">
			</p>


			<p>
				<label for="course">Course:</label>
				<select id="course" name="course">
    				<option value="English">English</option>
    				<option value="Maths">Maths</option>
    				<option value="CS">Computer Science</option>
    				<option value="Hindi">Hindi</option>
  				</select>
			</p>
		
			<input type="submit" value="Submit">
		</form>
	</centre>
</body>

</html>

