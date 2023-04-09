<!DOCTYPE html>
<html>

<head>
	<title>Insert Page page</title>
</head>

<body>
	<center>
     <h1> User Details</h1>
    <a href='index.php' >  <button >  Add  New User</button>  </a> <br>
		<?php

		

        $dbhost = 'localhost';
        $dbuser = 'root';
        $dbpass = '';
        $dbname = 'staff';
        $conn = mysqli_connect("localhost", "root", "", "staff");
		
		
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
	
		$first_name = $_REQUEST['first_name'];
		$last_name = $_REQUEST['last_name'];
		$gender = $_REQUEST['gender'];
        
		// $mailstatus= $_REQUEST['malestatus'];
		$email = $_REQUEST['email'];
		
	   //////////////////
		$sql = "INSERT INTO college VALUES ('$first_name',
			'$last_name','$gender','$email')";
		
			

        $sql = 'SELECT * FROM college';
        mysqli_select_db($conn,$dbname);
        $result = mysqli_query($conn,$sql );
        
        if(! $result ) {
           die('Could not get data: ' . mysqli_error($conn));
        }
     
     
        if (mysqli_num_rows($result) > 0) {
        
           while($row = mysqli_fetch_assoc($result)) {
              echo "First name :{$row['first_name']}  <br> ".
              "Last name : {$row['last_name']} <br> ".
              "Email Address : {$row['email']} <br> ".
            
            //   "male stsyus : {$row['mailstatus']} <br> ".
              "Gender : {$row['gender']} <br><br> ";
            
           }
        
     
         } else {
           echo "0 results";
         }
        
        echo "Fetched data successfully\n";
        
        
    



		
	
		mysqli_close($conn);
		?>
	</center>
</body>

</html>
