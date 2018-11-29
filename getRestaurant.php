<?php
	$conn=mysqli_connect("us-cdbr-iron-east-01.cleardb.net","b7edc7dcef5916","bae20f4b","heroku_b82a63fd777a03c");
	if($conn->connect_error)
	{
		echo "Unable to connect to database.";
		exit;
	}
	
	$returndata=[];
	if(!isset($_POST['eatwhat']))
	{
		$query1="SELECT * FROM restaurant ";
	}elseif($_POST['eatwhat']=="all")
	{
		$query1="SELECT * FROM restaurant";
	}elseif($_POST['eatwhat']=="undefined")
	{
		$query1="SELECT * FROM restaurant";
	}else
	{
		$query1="SELECT * FROM restaurant WHERE 
		Cuisine='".$_POST['eatwhat']."' or
		Name='".$_POST['eatwhat']."' or 
		District='".$_POST['eatwhat']."' or 
		Price='".$_POST['eatwhat']."'";
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