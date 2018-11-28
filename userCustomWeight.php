<!DOCTYPE html>
<html>
<head>
<title>User Custom Weighting - HeSheEat</title>
<link rel="icon" href="https://i.imgur.com/nLtvyR5.png">
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
            crossorigin="anonymous">
</script>
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
function genTable()
{
	var word = "";
	$.post("getWeighting.php",
		{eatwhatC:"all",eatwhatD:"all",eatwhatP:"all"},
		function(data)
		{
			console.log("EEE");
			data = JSON.parse(data);
			console.log(data[0]);
			word+="<table><tr>";
			word+="<th> Restaurant </th><th> Weighting (0-10)</th></tr>";
			for(var i = 0 ; i < data.length ;i++)
			{
				word+="<tr>";
				word+="<td style='font-weight:bold'>"+data[i].N+"</td>";
				word+="<td><input type='text' class='centerize' placeholder="+data[i].W+"></td>";
				word+="</tr>";
			}
			word+="</table><br />";
			console.log(word);
			$("#UTable").html(word);
		}
	);
}
function submitWeighting()
{
	
}
</script>
</head>

<body onload="genTable()">
<div id="sitebody">
	<nav id="header" class="header navbar navbar-expand-lg bg-info">
		<a href="index.html"><img src="https://i.imgur.com/nLtvyR5.png" alt="logo" style="height:100px"></a>
		<ul class="navbar-nav mr-auto">
		<a href="index.html"><button class="btn btn-outline-light">Home</button></a> 
		<a href="restaurantListJS.html"><button class="btn btn-outline-light">Restaurant</button></a>
		<a href="random.html"><button class="btn btn-outline-light">Random</button></a>
		<a href="aboutUs.html"><button class="btn btn-outline-light">About Us</button></a>
		</ul>
		<div>
			<form name="UForm" action="search.php" method="post" class="form-inline">
			<input class="form-control mr-sm-2" type="search" name="eatwhat" placeholder="Type here" aria-label="Search">
			<input class="btn btn-dark my-2 my-sm-0" type="submit" value="Search">
			</form>
			<a href="Login.php" class="btn btn-outline-light my-2 Brighterize">Login in</a><br>
		</div>
		<a href="javascript:void(0);" class="icon mx-2" onclick="verticalNav()">
			<i class="fa fa-bars" style="font-size: 30px; color: #343a40;"></i>
		</a>
	</nav>
	
	<div id="content" class="content">
		<form name="UCForm" action="#" method="post">
			<div id="userCWinterface" class="card transparentBg border-danger" style="padding: 1rem;margin-bottom: 1rem">
				<div class="row">
					<div class="col-sm-5">
						<h2>Hi user XXXXXXX! I am using HeSheEat!</h2><br />
						<div id="UTable">
						</div>
						<input class="btn btn-outline-danger" type="submit" value="Enter">
					</div>
					<div class="col-sm-7">
						<div><h4>
						Instruction:<br><br><br>
						There is a random function in this website.<br><br>
						By default, weighting of all restaurants are 5.<br><br>
						Higher the weighting, the restaurant will be more often called by the random function.<br><br>
						On opposite, lower the weighting the restaurant will be less called.<br><br>
						If the weighting is 0, that restaurant will never be called.<br><br>
						You can modify the weighting as you like.<br><br>
						After enter is pressed, your preference will be saved and you can use it when you use the random function next time.
						</h4></div>
					</div>
				</div>
			</div>
		</form>
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