<link rel="icon" href="https://i.imgur.com/nLtvyR5.png">
<?php
$conn=mysqli_connect("localhost","root","","restaurantList");
if($conn->connect_error)
{
	echo "Unable to connect to database.";
	exit;
}

$create = "CREATE TABLE IF NOT EXISTS user
	(
		UserID int PRIMARY KEY NOT NULL AUTO_INCREMENT,
		FirstName varchar(45) NOT NULL,
		LastName varchar(45) NOT NULL,
		Birthday date NOT NULL,
		PhoneNum varchar(10) NOT NULL,
		Email varchar(100) NOT NULL,
		UserName varchar(45) NOT NULL,
		Password varchar(45) NOT NULL
	)";
$createResult = $conn->query($create);

$bool = 0;
$query="SELECT UserName FROM user";
$result=$conn->query($query);
while($row2=$result->fetch_assoc())
{
	if($_POST["userName"]==$row2["UserName"])
	{
		echo "<script type='text/javascript'>alert('UserName is used');</script>";
		echo"<script type='text/javascript'>setTimeout('', 10000);</script>";
		echo "<script type='text/javascript'>window.location.replace(\"createAC.php\");</script>";
		$bool=$bool+1;
	}
}

$query1="SELECT UserID FROM user";
$result1=$conn->query($query1);
if(!$result1) die("No information.");
$row=mysqli_num_rows($result1)+1;
echo $row;

//userInput
$FName = $_POST["FName"];
$LName = $_POST["LName"];
$Birthday = $_POST["birthday"];
$PhoneNum = $_POST["phoneNum"];
$Email = $_POST["email"];
$UserName = $_POST["userName"];
$Password = $_POST["password"];

if($bool==0)
{
	$query2 = "INSERT INTO `user`(`UserID`, `FirstName`, `LastName`, `Birthday`, `PhoneNum`, `Email`, `UserName`, `Password`)
	VALUES ('".$row."','".$FName."','".$LName."','".$Birthday."','".$PhoneNum."','".$Email."','".$UserName."','".$Password."')";
	$result2=$conn->query($query2);
}

//redirect to home page
echo "<script type='text/javascript'>alert('Registered, please log in your account');</script>";
echo"<script type='text/javascript'>setTimeout('', 10000);</script>";
echo "<script type='text/javascript'>window.location.replace(\"LogIn.php\");</script>";

?>

