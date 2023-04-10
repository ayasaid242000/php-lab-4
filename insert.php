<!DOCTYPE html>
<html>

<head>
	<title>Insert Page page</title>
</head>

<body>
	<center>
	<h1> User Details</h1>
    <a href='index.php' >  <button >  Add  New User</button>  </a> <br>


	<table border=1 >
        <thead>
            <tr >
                <th>First Name</th>
                <th>Last Name</th>
                <th>Address</th>
				<th>Email Address</th>
				<th>Gender</th>
                <th>Mail Status</th>
            </tr>
        </thead>
        <tbody>

		<?php

		$dbhost = 'localhost';
		$dbuser = 'root';
		$dbpass = '';
		$dbname = 'university';
		$conn = mysqli_connect("localhost", "root", "", "university");
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		
		$first_name = $_REQUEST['first_name'];
		$last_name = $_REQUEST['last_name'];
		$gender = $_REQUEST['gender'];
		$address = $_REQUEST['address'];
		$email = $_REQUEST['email'];
		$mail_status = isset($_POST['receive']) ? $_POST['receive'] : '';
		
		/////////////////////
		$sql = "INSERT INTO teachers VALUES ('$first_name',
			'$last_name','$gender','$address','$email','$mail_status')";

		////////////
		// $sql = "INSERT INTO teachers VALUES ('reem',
		// 'ahmed','mail','delta','reem@gmail.com')";

		
		if(mysqli_query($conn, $sql)){
			echo "<h3>User Data</h3>";

			echo nl2br('<span style=color:darkblue>User First Name:</span>'."$first_name\n" . '<span style=color:darkblue>User Last Name</span>'. " $last_name\n" 
				.'<span style=color:darkblue>User Gender:</span>'. "$gender\n ".'<span style=color:darkblue>User Address:</span>'."$address\n".'<span style=color:darkblue>E-Mail:</span>'. "$email\n" .'<h3> Users DataBase </h3>');             
		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}


		$sql = "SELECT * FROM teachers";
		$result = $conn->query($sql);

		if ($result->num_rows > 0) {
			while ($row = $result->fetch_assoc()) {
				echo "<tr >";
				echo "<td >" .$row['first_name'] . "</td> ";
				echo "<td >" .$row['last_name'] . "</td>";
				echo "<td >" .$row['address'] . "</td>";
				echo "<td >" .$row['email'] . "</td>";
				echo "<td >" .$row['gender'] . "</td>";
				echo "<td >" .($row['mail_status'] ? $row['mail_status'] : 'dont receive') . "</td>";
			   
				echo "</tr>";
			}
		} else {
			echo "<tr><td colspan='5'>0 results</td></tr>";
		}
		
		// Close connection
		mysqli_close($conn);
		?>
	</center>
</body>

</html>
