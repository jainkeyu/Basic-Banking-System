<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>People's Bank/Pay Money</title>
  <link href="img/portfolio/ic2.png" rel="icon" type="image/x-icon type">
  </head>
  <body>
  	<body bgcolor="#737CA1" align="center" text="white">
	<img src="img/portfolio/final.jpg" width="400px" height="200px" alt="bank logo">
    <p><h2><a href="cus.php">View Customer Details</a><br>
       <a href="transfer.php">Transfer Again</a></h2></p>
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
$amount=$_POST['amount'];
//$sql ="UPDATE customer SET Balance-=$amount WHERE Name=$_POST['fromname']";
//$result = $conn->query($sql);
//$sql1 ="UPDATE customer"."SET Balance+=$amount"."WHERE Name=$_POST['toname']";
//$result = $conn->query($sql1);
  echo "<h2>Money Transfer Successfull!!!</h2>";

$conn->close();
?>
