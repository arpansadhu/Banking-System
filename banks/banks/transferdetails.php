<html>
	<head>
		<title>GRIP</title>
		<link rel="stylesheet" href="style1.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
		<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&display=swap" rel="stylesheet">
	</head>

	<body background="banks.jpg">
	<div class="topnav">
  
  <div class="topnav-right">
  	<a class="active" href="index.php">Home</a>
  <a class="active" href="transferdetails.php">Transaction History</a>
  <a class="active" href="viewusers.php">Users</a>
   <a class="active" href="about.php">About Us</a>


  </div>
</div>
</div>  <br><br><br><br><br>
<table class="viewusers">
	<center><h1>Tranaction History</h1></center>
	<tr>
		<th>Sender</th>
		<th>Reciever</th>
		<th>Amount</th>
	</tr>
	<?php
	$conn = mysqli_connect("localhost", "root", "", "bank");
	if($conn-> connect_error){
		die("connection failed:". $conn-> connect_error);
	}

	$sql = "SELECT * FROM transfers";
	$result = $conn-> query($sql);

	if($result-> num_rows > 0){

		while ( $row = $result -> fetch_assoc()) {
			echo "<tr><td>". $row["from_user"] ."</td><td>".  $row["to_user"] ."</td><td>" .  $row["Credit"] ."</td></tr>";
		}
		echo "</table>";

	}
	else {
		echo "no result";
	}
    $conn-> close();
	?>
</table>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<b><p>
Contact: 6005297603,
Email: arp.an7214@gmail.com<br>
© Arpan
</p>	</b>
</body>
</html>