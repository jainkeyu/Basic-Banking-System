<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>People's Bank/Transfer Money</title>
  <link href="img/portfolio/ic2.png" rel="icon" type="image/x-icon type">
  </head>
  <body>
  	<body bgcolor="#737CA1" align="center" text="white">
	<img src="img/portfolio/final.jpg" width="400px" height="200px" alt="bank logo">
    <p><h2><font color="white">Transfer Money</font></h2></p>
    <form method="post" action="pay.php">
      From Name:<input type="text" name="fromname" required>&nbsp;&nbsp;
      From CID:<input type="text" name="fromcid" required><br><br>
      To Name:<input type="text" name="toname" required>&nbsp;&nbsp;
      To CID:<input type="text" name="tocid" required><br><br>
      Amount:<input type="text" name="amount" required><br><br>
      <input type="submit" name="submit" value="Transfer Money">&nbsp;&nbsp; <input type="reset" name="clear" value="Clear">
    </form>
  </body>
  </html>