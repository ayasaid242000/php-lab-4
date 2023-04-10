<!DOCTYPE html>
<html lang="en">
<head>
	<title>GFG- Store Data</title>
</head>
<body>
	<center>
		<h1>User Registration Form</h1>
		<p> please fill this form and submit to add user record to the database </p>
		<form action="insert.php" method="post">
			
<p>
			<label for="firstName">First Name:</label>
			<input type="text" name="first_name" id="firstName">
			</p>

			
<p>
			<label for="lastName">Last Name:</label>
			<input type="text" name="last_name" id="lastName">
			</p>

			
<p>
			
			</p>

			
<p>
			<label for="Address">Address:</label>
			<input type="text" name="address" id="Address">
			</p>

			
<p>
			<label for="emailAddress">Email Address:</label>
			<input type="text" name="email" id="emailAddress">
			</p>

			
            <label for="Gender">Gender:</label>
            <input type='radio' id="Gender" name='gender' value='male' >male 
            <input type='radio' id="Gender" name='gender' value='female'>female </br></br>
<p>
			<label  for="gridCheck1">Receive E-mail from us</label>
			<input  type="checkbox" id="gridCheck1" name ='receive'>
            </p>

			<input type="submit" value="Submit">
			<button type='reset'> cancel </button>
		</form>
	</center>
</body>
</html>

