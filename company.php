<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dbms";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql= "SELECT * FROM company";
$result = mysqli_query($conn,$sql);
$check = mysqli_fetch_array($result);
if(isset($check))
{
	//redirect user
       echo '"SELECT * FROM company"';
       exit();
}
else
{
echo 'SORRY NO DATA AVAILABLE';
}
 


$conn->close();

?>