<html>    
<title> Log In - HeSheEat</title>
<link rel="icon" href="https://i.imgur.com/nLtvyR5.png">
<?php
if(isset($_COOKIE["userName"]))
{
	echo "<script type='text/javascript'>
	alert('You have logged in');
	</script>";
	echo "<script type='text/javascript'>setTimeout('', 10000);</script>";
	echo "<script type='text/javascript'>window.location.replace(\"UserInfo.php\");</script>";
}
?>
<style>
    span{color: red;}
</style>
<header>
<!-- Main CSS -->
<link rel="stylesheet" href="main.css"/>
<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js" integrity="sha256-T0Vest3yCU7pafRw9r+settMBX6JkKN06dqBnpQ8d30=" crossorigin="anonymous"></script>
<!-- Boostrap -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
            integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
            crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
            integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
            crossorigin="anonymous"></script>		
<!-- W3School Font -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script type = "text/javascript">
function verticalNav() {
    var x = document.getElementById("header");
    if (x.className === "header navbar navbar-expand-lg bg-info") {
        x.className += " responsive";
    } else {
        x.className = "header navbar navbar-expand-lg bg-info";
    }
}
function AJAXCheckUser() {
    var xmlHttp;
    try 
	{
		xmlHttp = new XMLHttpRequest();
    }
    catch (e) 
	{
		try 
		{
			xmlHttp = new ActiveXObject("Msxml2.XMLHTTP");
        }
		catch (e) 
		{
            try 
			{
				xmlHttp = new ActiveXObject("Microsoft.XMLHTTP");
            } 
			catch (e) 
			{
                alert("Error!");
                return;
            }
        }
    }
        var userName = document.getElementById("userName").value;
        var password = document.getElementById("password").value;

        var  url = "checkUser.php?userName="+userName+"&password=" + password;

        xmlHttp.onreadystatechange=function()  {

            if (xmlHttp.readyState == 4) {
                var temp = xmlHttp.responseText;
                if (temp=="Welcome"){
                    //redirect to home page if correct
                    window.location.replace("userInfo.php");
                }else {
                    document.getElementById("disInfo").innerHTML = temp+"<br>";
                }
            }
        }
        xmlHttp.open("GET", url, true);
        xmlHttp.send(null);
    }
</script>
</header>
<body>
<div id="sitebody">
	<nav id="header" class="header navbar navbar-expand-lg bg-info">
		<a href="index.php"><img src="https://i.imgur.com/nLtvyR5.png" alt="logo" style="height:100px"></a>
		<ul class="navbar-nav mr-auto">
		<a href="index.php"><button class="btn btn-outline-light">Home</button></a> 
		<a href="restaurantListJS.php"><button class="btn btn-outline-light">Restaurant</button></a>
		<a href="random.php"><button class="btn btn-outline-light">Random</button></a>
		<a href="aboutUs.php"><button class="btn btn-outline-light">About Us</button></a>
		</ul>
		<div>
			<form name="UForm" action="search.php" method="post" class="form-inline">
			<input class="form-control mr-sm-2" type="search" name="eatwhat" placeholder="Type here" aria-label="Search">
			<input class="btn btn-dark my-sm-0" type="submit" value="Search">
			</form>
			<?php
				if(isset($_COOKIE["userName"]))
				{
					echo '<a id="userB" href="userInfo.php" class="btn btn-outline-light my-2 Brighterize">';
					echo "Welcome ".$_COOKIE["userName"]."</a><br>";
				}else
				{
					echo '<a id="userB" href="LogIn.php" class="btn btn-outline-light Brighterize active" style="margin-top:-0.5rem">';
					echo "Login</a><br>";
				}
			?>
		</div>
		<a href="javascript:void(0);" class="icon mx-2" onclick="verticalNav()">
			<i class="fa fa-bars" style="font-size: 30px; color: #343a40;"></i>
		</a>
	</nav>
	
	<div id="content" class="content">
		<div class="card transparentBg border-danger" style="padding:1rem">
		<form name="formA" method="get" class="needs-validation" novalidate style="width: 600px" onsubmit="AJAXCheckUser()">
			<h4 style="align-content: center;width: 100%">Log In</h4>
			<div class="form-row">
				<div class="col-md-6 mb-3">
					<label for="userName">Username</label>
					<div class="input-group">
						<input type="text" class="form-control" name="userName" id="userName"
							placeholder="Username*"
							aria-describedby="inputGroupPrepend" required>
						<span id="checkUserName"></span>
						<div class="invalid-feedback">
							Username not valid.
						</div>
					</div>
				</div>
			</div>
			<div class="form-row">
				<div class="col-md-6 mb-3">
					<label for="password">Password</label>
					<input type="password" class="form-control" name="password" id="password"  placeholder="Password*" required>

					<div class="invalid-feedback">
						Password not valid.
					</div>
				</div>
			</div>
			<button type="button" class="btn btn-danger" onclick="AJAXCheckUser()">Submit</button>
		</form>
		<span id="disInfo" name="disInfo"></span>
		<a href="createAC.php" style="color:#dc3545">Create Account</a><br>
		</div>
	</div>
	
	<div id="footer" class="footer">
		<div class="FCreator">
		<i>Designed by:</i><br/>
			Hui Ka Hung,&nbsp
			Kwan Wai Kin,&nbsp
			Li King Wai,<br/>
			Ng Chi Chun,&nbsp
			Tsang Chi Kin.
		</div>
	</div>
</div>

</body>
</html>
