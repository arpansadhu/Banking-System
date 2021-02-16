<html>
<head>
	<title>GRIP</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style1.css">

	</style>
</head>
<body>
	<body background="banks.jpg">
	<div class="topnav">
  <div class="topnav-left">
  	<a class="active" href="index.php">Home</a>
  <a class="active" href="transferdetails.php">Transaction History</a>
  <a class="active" href="viewusers.php">Users</a>
  <a class="active" href="about.php">About Us</a>
</div>
</div>
</div><br>
<br>  
<table class="viewusers">
	<center><h1>Customer Details</h1></center>
	<tr>
		<th>Name</th>
		<th>Email</th>
		<th>Amount</th>
		
	</tr>
	<?php
	$conn = mysqli_connect("localhost", "root", "", "bank");
	if($conn-> connect_error){
		die("connection failed:". $conn-> connect_error);
	}

	$sql = "SELECT name, email, credit FROM bank";
	$result = $conn-> query($sql);

	if($result-> num_rows > 0){

		while ( $row = $result -> fetch_assoc()) {
			echo "<tr><td>". $row["name"] ."</td><td>".  $row["email"] ."</td><td>" .  $row["credit"] ."</td></tr>";
		}
		echo "</table>";

	}
	else {
		echo "no result";
	}
    $conn-> close();
	?>
</table>
<br><br><br><br><br><br><br>
<b><p>
Contact: 6005297603,
Email: arp.an7214@gmail.com<br>
© Arpan
</p>	</b>
</body>
</html>