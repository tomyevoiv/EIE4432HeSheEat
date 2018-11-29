<!DOCTYPE html>
<html>
<head>
<title>HeSheEat</title>
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
function hot()
{
	console.log("eee");
	cat = "all";

	$.post("getRestaurant.php",
		{eatwhat:cat},
		function(data)
		{
			var numOfCards = Math.floor(window.screen.availWidth/295);
			var numOfSlide = Math.ceil(12/numOfCards);
			var p = 1;
			var i = -4+4*p;
			var y = 1;
			data = JSON.parse(data);
			console.log(data[0]);
			
			var word="";
			word+='<div class="Hslide">';
			//Fat Girl Chicken
			word+='<div class="card Hcard border-danger transparentBg">';
			word+='<img src="https://i.imgur.com/'+data[3].I+'.png" alt="Image">';
			word+='<div id="CHchick" class="card-header text-danger"></div>';
			word+='<div class="card-body text-danger">';
			word+='<div id="CCchick" class="card-title"></div><p>';
			word+='<span id="CDchick"></span><br/>';
			word+='<span id="CPchick"></span><br/>';
			word+='<span id="CDichick"></span></p>';
			word+='</div></div>';
			
			//Genki
			word+='<div class="card Hcard border-danger transparentBg">';
			word+='<img src="https://i.imgur.com/'+data[4].I+'.png" alt="Image">';
			word+='<div id="CHgenki" class="card-header text-danger"></div>';
			word+='<div class="card-body text-danger">';
			word+='<div id="CCgenki" class="card-title"></div><p>';
			word+='<span id="CDgenki"></span><br/>';
			word+='<span id="CPgenki"></span><br/>';
			word+='<span id="CDigenki"></span></p>';
			word+='</div></div>';
			
			//Saizeiya
			word+='<div class="card Hcard border-danger transparentBg">';
			word+='<img src="https://i.imgur.com/'+data[22].I+'.png" alt="Image">';
			word+='<div id="CHSaizeiya" class="card-header text-danger"></div>';
			word+='<div class="card-body text-danger">';
			word+='<div id="CCSaizeiya" class="card-title"></div><p>';
			word+='<span id="CDSaizeiya"></span><br/>';
			word+='<span id="CPSaizeiya"></span><br/>';
			word+='<span id="CDiSaizeiya"></span></p>';
			word+='</div></div></div>';
			
			$("#h").html(word);
			
			$("#CHchick").html(data[3].N);
			$("#CCchick").html(data[3].C);
			$("#CDchick").html(data[3].D);
			$("#CPchick").html(data[3].P);
			document.getElementById("CDichick").innerHTML="Description:<br> Fat Girl Chicken is a Chinese Skewers Restaurant which is most famous in HungHom. The working hours of Fat Girl Chicken is 11:00-03:00. ";
			
			$("#CHgenki").html(data[4].N);
			$("#CCgenki").html(data[4].C);
			$("#CDgenki").html(data[4].D);
			$("#CPgenki").html(data[4].P);
			document.getElementById("CDigenki").innerHTML="Description:<br> Genki is a famous Janpanese food Restaurant in Hong Kong. The main dishes of genki are Sushi and Sashimi. This restaurant using a very special delivery service, electronic train delivery.";
			
			$("#CHSaizeiya").html(data[22].N);
			$("#CCSaizeiya").html(data[22].C);
			$("#CDSaizeiya").html(data[22].D);
			$("#CPSaizeiya").html(data[22].P);
			document.getElementById("CDiSaizeiya").innerHTML="Description:<br> Saizeiya is a Italian restaurant which is very cheap. Although the price of food is low, the quality is not bad. Moreover, the drink bar of Saizeiya is economical, it allow consumer refill drink unlimited and only charge $13.";

		}
	);
}
function slide()
{
	console.log("eee");
	cat = "all";

	$.post("getRestaurant.php",
		{eatwhat:cat},
		function(data)
		{
			var numOfCards = Math.floor(window.screen.availWidth/295);
			var numOfSlide = Math.ceil(12/numOfCards);
			var p = 1;
			var i = -4+4*p;
			var x = 1;
			data = JSON.parse(data);
			console.log(data[0]);
			
			var word = ""
			for(var o = 0; o < numOfSlide; o++)
			{
				if(o==0)
					word+='<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>';
				else
					word+='<li data-target="#carouselExampleIndicators" data-slide-to="'+o+'"></li>';
			}
			$("#c").html(word);
			
			var word = ""
			for(var s = 0; s < numOfSlide; s++)
			{
				if(s==0)
					word+='<div  class="carousel-item active" >';
				else
					word+='<div  class="carousel-item" >';
				word+='<div id="'+s+'Slide" class="Scontent Scenterize"></div>';
				word+='</div>';
				
			}
			$("#slide").html(word);
			
			var word="";
			word+='<div class="Rslide">';
			for(var k = 0;k<4;k++)
			{
				if(!data[k])break;
				word+='<div class="card Scard border-danger transparentBg">';
				word+='<img src="https://i.imgur.com/'+data[k+i].I+'.png" alt="Image">';
				word+='<div id="CH'+x+'" class="card-header text-danger"></div>';
				word+='<div class="card-body text-danger">';
				word+='<div id="CC'+x+'" class="card-title"></div><p>';
				word+='<span id="CD'+x+'"></span><br/>';
				word+='<span id="CP'+x+'"></span></p>';
				word+='</div></div>';
				x++;
			}word+='</div>';
			$("#0Slide").html(word);
			console.log(x);
			
			var word="";
			word+='<div class="Rslide">';
			for(var k = 4;k<9;k++)
			{
				if(!data[k])break;
				word+='<div class="card Scard border-danger transparentBg">';
				word+='<img src="https://i.imgur.com/'+data[k].I+'.png" alt="Image">';
				word+='<div id="CH'+x+'" class="card-header text-danger"></div>';
				word+='<div class="card-body text-danger">';
				word+='<div id="CC'+x+'" class="card-title"></div><p>';
				word+='<span id="CD'+x+'"></span><br/>';
				word+='<span id="CP'+x+'"></span></p>';
				word+='</div></div>';
				x++;
			}word+='</div>';
			$("#1Slide").html(word);
			
			var word="";
			word+='<div class="Rslide">';
			for(var k = 9;k<13;k++)
			{
				if(!data[k])break;
				word+='<div class="card Scard border-danger transparentBg">';
				word+='<img src="https://i.imgur.com/'+data[k].I+'.png" alt="Image">';
				word+='<div id="CH'+x+'" class="card-header text-danger"></div>';
				word+='<div class="card-body text-danger">';
				word+='<div id="CC'+x+'" class="card-title"></div><p>';
				word+='<span id="CD'+x+'"></span><br/>';
				word+='<span id="CP'+x+'"></span></p>';
				word+='</div></div>';
				x++;
			}word+='</div>';
			$("#2Slide").html(word);
			
			var x = 1;
			for(var k = 0;k<13;k++)
			{
				if(!data[k])break;
				$("#CH"+x).html(data[k].N);
				$("#CC"+x).html(data[k].C);
				$("#CD"+x).html(data[k].D);
				$("#CP"+x).html(data[k].P);
				x++;
			}
		}
	);
}
function start()
{
	hot();
	slide();
}
</script>
</head>

<body onload="start()">
<div id="sitebody">
	<nav id="header" class="header navbar navbar-expand-lg bg-info">
		<a href="index.php"><img src="https://i.imgur.com/nLtvyR5.png" alt="logo" style="height:100px"></a>
		<ul class="navbar-nav mr-auto">
		<a href="index.php"><button class="btn btn-outline-light active">Home</button></a> 
		<a href="restaurantListJS.php"><button class="btn btn-outline-light">Restaurant</button></a>
		<a href="random.php"><button class="btn btn-outline-light">Random</button></a>
		<a href="aboutUs.php"><button class="btn btn-outline-light">About Us</button></a>
		</ul>
		<div>
			<form name="UForm" action="search.php" method="post" class="form-inline">
			<input class="form-control mr-sm-2" type="search" name="eatwhat" placeholder="Type here" aria-label="Search">
			<input class="btn btn-dark my-2 my-sm-0" type="submit" value="Search">
			</form>
			<?php
				if(isset($_COOKIE["userName"]))
				{
					echo '<a id="userB" href="userInfo.php" class="btn btn-outline-light my-2 Brighterize">';
					echo "Welcome ".$_COOKIE["userName"]."</a><br>";
				}else
				{
					echo '<a id="userB" href="LogIn.php" class="btn btn-outline-light my-2 Brighterize">';
					echo "Login</a><br>";
				}
			?>
			</a><br>
		</div>
		<a href="javascript:void(0);" class="icon mx-2" onclick="verticalNav()">
			<i class="fa fa-bars" style="font-size: 30px; color: #343a40;"></i>
		</a>
	</nav>
	
	<div id="content" class="content">
		<div class="card Ransidebar transparentBg border-danger">
			<h3>Hot Restaurant</h3>
			<div>
				<div id="h" class=""></div>
			</div>
		</div>
		<br>
		<div class="card Ransidebar transparentBg border-danger">
			<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" >
			<h3>Featured Restaurant</h3>
			<ol class="carousel-indicators" id="c">
			</ol>
			<div class="carousel-inner" id="slide">
			</div>
			<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
			</div>
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