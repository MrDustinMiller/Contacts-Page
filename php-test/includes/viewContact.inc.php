<?php
    require "header.inc.php";

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

//CREATE SQL QUERY
$sql = "SELECT * FROM contacts";
		
//RUN QUERY AND GET RESULT
$result = $conn->query($sql);

//CHECK TO SEE IF WE HAVE ANY RESULTS
if ($result->num_rows > 0) {
    // OUTPUT DATA OF EACH ROW AS HTML TO THE PAGE
    while($row = $result->fetch_assoc()) {
        echo "<br> id: ". $row["cid"]. " - Name: ". $row["firstName"]. " - Email: ". $row["email"] ." - Phone: ". $row["phoneNumber"]. " - Zip: ". $row["zip"] . "<br>";
    }//end while
}else{
    echo "0 results";
}//end if

//CLOSE CONNECTION
$conn->close();
?>


    
