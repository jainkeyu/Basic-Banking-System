<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>People's Bank/Customer's Details</title>
  <link href="img/portfolio/ic2.png" rel="icon" type="image/x-icon type">
  </head>
  <body>
  	<body bgcolor="#737CA1" align="center" text="white">
	<img src="img/portfolio/final.jpg" width="400px" height="200px" alt="bank logo">
    <p> <h2><font color="white">Customer Details</font></h2>
    <h2><font color="white"><a href="transfer.php">Transfer Money</a></font></h2></p>
  </body>
  </html>

<?php
$servername = "localhost";
$username = "root";
$password = "Keyu1509";
$dbname = "banking";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) 
{
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM customer";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) 
    {
        echo "<br> Name:". $row["Name"]."<br>". "CID:". $row["CID"]. "<br>" ."EmailID: " .$row["Email ID"]. "<br>" ."Balance:".$row["Balance"]. "<br>";
    }
} 
else 
{
    echo "0 results";
}

$conn->close();
?>
