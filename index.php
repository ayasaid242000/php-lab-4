<!DOCTYPE html>
<html lang="en">
<head>
	<title>GFG- Store Data</title>
</head>
<body>
	<center>
		<h1>User Registeration Form</h1>
		<form action="insert.php" method="post">
			
<p>
			<label for="firstName"> First Name:</label>
			<input type="text" name="first_name" id="firstName">
			</p>

			
<p>
			<label for="lastName">Last Name:</label>
			<input type="text" name="last_name" id="lastName">
			</p>

 <p>
			<label for="emailAddress">Email Address:</label>
			<input type="email" name="email" id="emailAddress">
			</p>

<!-- <p>
			<label for="Address">Address:</label>
			<input type="text" name="address" id="Address">
			</p> -->

			
<p>          
            <label for="Gender">Gender:</label>
            <input type='radio' id="Gender" name='gender' value='male' >male 
            <input type='radio' id="Gender" name='gender' value='female'>female </br></br>

			<!-- <label for="Gender">Gender:</label>
			<input type="text" name="gender" id="Gender"> -->
			</p>

			


			<input type="submit" value="Submit">
            <button type='reset'> cancel </button>
		</form>
	</center>
</body>
</html>
