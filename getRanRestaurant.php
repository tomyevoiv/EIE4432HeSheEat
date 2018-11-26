<?php
	$conn=mysqli_connect("localhost","root","","restaurantList");
	if($conn->connect_error)
	{
		echo "Unable to connect to database.";
		exit;
	}
	
	$returndata=[];
	$query1="SELECT * FROM restaurant WHERE Name='".$_POST['eatwhat']."'";
	$result1=$conn->query($query1);
	if(!$result1) die("No information.");
    $result1->data_seek(0);
	
	while($row=$result1->fetch_assoc())
	{ 
		$returndata["ID"]= 0;
		$returndata["I"] = $row["Code"];
		$returndata["N"] = $row["Name"];
		$returndata["C"] = $row["Cuisine"];
		$returndata["D"] = $row["District"];
		$returndata["P"] = $row["Price"];
		$returndata["W"] = $row["Weighting"];
	}
	echo(json_encode($returndata));
?>