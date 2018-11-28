<?php
	$conn=mysqli_connect("localhost","root","","restaurantList");
	if($conn->connect_error)
	{
		echo "Unable to connect to database.";
		exit;
	}
	
	$returndata=[];
	$query = "SELECT * FROM user WHERE UserName='".$_POST['who']."'";
	$result=$conn->query($query);
	if(!$result) die("No information.");
    $result->data_seek(0);
	$row=$result->fetch_assoc();
	$returndata["ID"]= $row["UserID"];
	$returndata["F"] = $row["FirstName"];
	$returndata["L"] = $row["LastName"];
	$returndata["B"] = $row["Birthday"];
	$returndata["P"] = $row["PhoneNum"];
	$returndata["E"] = $row["Email"];
	echo(json_encode($returndata));
?>