<link rel="icon" href="https://i.imgur.com/nLtvyR5.png">
<?php
$conn=mysqli_connect("us-cdbr-iron-east-01.cleardb.net","b7edc7dcef5916","bae20f4b","heroku_b82a63fd777a03c");
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
    $userName_set = setcookie('userName', $cookie_userName, time()+(86400 * 30), '/');
    echo "Welcome";
}else
{
	echo 'Wrong Username or Password';
}
?>
