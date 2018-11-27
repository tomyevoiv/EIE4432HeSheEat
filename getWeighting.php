<?php
	$conn=mysqli_connect("localhost","root","","restaurantList");
	if($conn->connect_error)
	{
		echo "Unable to connect to database.";
		exit;
	}
	
	$returndata=[];
	if(!isset($_POST['eatwhatC']))
	{
		$query1="SELECT * FROM restaurant ";
	}elseif($_POST['eatwhatC']=="all" && $_POST['eatwhatD']=="all" && $_POST['eatwhatP']=="all")
	{
		$query1="SELECT * FROM restaurant ";
	}elseif($_POST['eatwhatC']=="all" && $_POST['eatwhatD']=="all")
	{
		$query1="SELECT * FROM restaurant WHERE Price='".$_POST['eatwhatP']."'";
	}elseif($_POST['eatwhatC']=="all" && $_POST['eatwhatP']=="all")
	{
		$query1="SELECT * FROM restaurant WHERE District='".$_POST['eatwhatD']."'";
	}elseif($_POST['eatwhatD']=="all" && $_POST['eatwhatP']=="all")
	{
		$query1="SELECT * FROM restaurant WHERE Cuisine='".$_POST['eatwhatC']."'";
	}elseif($_POST['eatwhatC']=="all")
	{
		$query1="SELECT * FROM restaurant WHERE
		District='".$_POST['eatwhatD']."' and 
		Price='".$_POST['eatwhatP']."'";
	}elseif($_POST['eatwhatD']=="all")
	{
		$query1="SELECT * FROM restaurant WHERE
		Cuisine='".$_POST['eatwhatC']."' and 
		Price='".$_POST['eatwhatP']."'";
	}elseif($_POST['eatwhatP']=="all")
	{
		$query1="SELECT * FROM restaurant WHERE
		Cuisine='".$_POST['eatwhatC']."' and 
		District='".$_POST['eatwhatD']."'";
	}else
	{
		$query1="SELECT * FROM restaurant WHERE 
		Cuisine='".$_POST['eatwhatC']."' and
		District='".$_POST['eatwhatD']."' and 
		Price='".$_POST['eatwhatP']."'";
	}
	
	
	$result1=$conn->query($query1);
	if(!$result1) die("No information.");
    $result1->data_seek(0);
	
	$i=0;
	while($row=$result1->fetch_assoc())
	{ 
		$returndata[$i]["ID"]=$i;
		$returndata[$i]["N"] = $row["Name"];
		$returndata[$i]["W"] = $row["Weighting"];
		$i++;
	}
	echo(json_encode($returndata));
?>