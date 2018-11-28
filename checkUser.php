<?php
$conn=mysqli_connect("localhost","root","","restaurantList");
if($conn->connect_error)
{
	echo "Unable to connect to database.";
	exit;
}

$UserName = $_GET["userName"];
$Password = $_GET["password"];

$query="SELECT * FROM user";
$result=$conn->query($query);
$i = 0;$bool = 0;
while($row=$result->fetch_assoc())
{
	if($row["UserName"]==$UserName && $row["Password"]==$Password)
	{
		$bool+=1;
		break;
	}else
	{
		$i++;
	}
}

if($bool!=0)
{
	$cookie_userName = $_GET["userName"];
    $userName_set = setcookie('userName', $cookie_userName, time()+60000, '/');
    echo "Welcome ".$UserName."!<br />Cookie is set";
}else
{
	echo 'Wrong Username or Password';
}

/* //AJAX
if($UserName!="admin"||$Password!="admin"){
    echo 'Wrong Username or Password';
}else{
    //set cookie and
    $cookie_userName = $_GET["userName"];
    $userName_set = setcookie('userName', $cookie_userName, time()+60000, '/');
    echo "cookie set";
} */

?>
