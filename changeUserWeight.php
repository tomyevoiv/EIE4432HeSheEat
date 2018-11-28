<link rel="icon" href="https://i.imgur.com/nLtvyR5.png">
<?php
	$conn=mysqli_connect("localhost","root","","restaurantList");
		if($conn->connect_error)
		{
			echo "Unable to connect to database.";
			exit;
		}
		
	$drop = "drop table if exists ".$_COOKIE['userName']."_Weight";
	$create = "CREATE TABLE ".$_COOKIE['userName']."_Weight 
	(
		`Name` varchar(30) NOT NULL,
		`Weighting` int(2) DEFAULT NULL
	)";
	
	$dropResult = $conn->query($drop);
	$createResult = $conn->query($create);
	
	/* if($dropResult !== FALSE)
	{
		echo "Drop success";
	}else
	{
		echo "Drop fail";
	}
	if($createResult !== FALSE)
	{
		echo "Create success";
	}else
	{
		echo "Create fail";
	} */
	
	$receiveDataN = $_POST["Cname"];
	$receiveDataW = $_POST["Cweight"];
	for($i = 0; $i < count($receiveDataN) ; $i++)
	{
		$insert = "INSERT INTO ".$_COOKIE['userName']."_Weight (Name, Weighting)
		VALUES ('$receiveDataN[$i]','$receiveDataW[$i]')";
		$conn->query($insert);
	}
?>