<?php
	session_start();
  
	$conn=mysqli_connect("localhost","root","","restaurantList");
	if($conn->connect_error)
	{
		echo "Unable to connect to database.";
		exit;
	}
	
	$returndata=[];
	if(!isset($_POST['eatwhere']))
	{
		$query1="SELECT * FROM restaurant";
	}else if($_POST['eatwhere']=="")
	{
		$query1="SELECT * FROM restaurant";
	}else if ($_POST['eatwhere']==" ")
	{
		$query1="SELECT * FROM restaurant";
	}else
	{
		$query1="SELECT * FROM restaurant WHERE Cuisine='".$_POST['eatwhere']."'";
	}
	$result1=$conn->query($query1);
	if(!$result1) die("No information.");
    $result1->data_seek(0);
	
	$i=0;
	while($row=$result1->fetch_assoc())
	{ 
		$returndata[$i]["ID"]=$i;
		$returndata[$i]["I"] = $row["Code"];
		$returndata[$i]["N"] = $row["Name"];
		$returndata[$i]["C"] = $row["Cuisine"];
		$returndata[$i]["D"] = $row["District"];
		$returndata[$i]["P"] = $row["Price"];
		$returndata[$i]["W"] = $row["Weighting"];
		$i++;
	}
	echo(json_encode($returndata));
?>