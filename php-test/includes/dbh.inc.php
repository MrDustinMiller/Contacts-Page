    <?php

    
		$servername = "localhost";
		$username   = "root";
		$password   = "";
		$dbname     = "loginsystem";

		// CREATE CONNECTION
		$conn= mysqli_connect($servername, $username, $password, $dbname);
		
		// CHECK CONNECTION
		if (!$conn) {
			die("Connection failed: " .mysqli_connect_error());
		}//end if

	

