<!DOCTYPE html>
<html>
<head>
<title>Random - HeSheEat</title>
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
var HiscardN = 1;
function ranGenCard(x,y,z,r)
{
	console.log(x+y+z+"eee");
	var index = 0;
	var target = "";
	var link="";
	var store = [];
	if(r=="user")
	{
		link = "getUserRanWeight.php";
	}else
	{
		link = "getWeighting.php";
	}
	$.post(link,
		{eatwhatC:x,eatwhatD:y,eatwhatP:z},
		function(data)
		{
			data = JSON.parse(data);
			console.log(data);
			for(var i = 0 ; i < data.length ; i++)
			{
				for(var k = 0 ; k < data[i].W ; k++)
				{
					store[index]=data[i].N;
					index++;
				}
			}
			console.log(index);
			var ran = Math.floor(Math.random()*index);
			console.log(ran);
			target = store[ran];
			console.log(target);
			if(typeof target == "undefined")
			{
				var word ="";
				word+='<div class="card Rcard border-danger transparentBg">';
				word+='<img src="https://i.imgur.com/nLtvyR5.png" alt="Image">';
				word+='<div id="CH'+1+'" class="card-header text-danger">404Not found</div>';
				word+='<div class="card-body text-danger">';
				word+='<div id="CC'+1+'" class="card-title"></div><p>';
				word+='<span id="CD'+1+'"></span><br/>';
				word+='<span id="CP'+1+'"></span></p>';
				word+='</div></div>';
				document.getElementById("Rancard").innerHTML = word;
			}else
			{
				$.post("getRestaurant.php",
					{eatwhat:target},
				function(data)
				{
					var i = 0;
					var j = 1;
					data = JSON.parse(data);
					console.log(data);
					var word="";
					var his=document.getElementById("RanCHistory").innerHTML;
					var tempHis="";
					word+='<div class="card Rcard border-danger transparentBg">';
					word+='<img src="https://i.imgur.com/'+data[0].I+'.png" alt="Image">';
					word+='<div id="CH'+j+'" class="card-header text-danger"></div>';
					word+='<div class="card-body text-danger">';
					word+='<div id="CC'+j+'" class="card-title"></div><p>';
					word+='<span id="CD'+j+'"></span><br/>';
					word+='<span id="CP'+j+'"></span></p>';
					word+='</div></div>';
					$("#Rancard").html(word);
					$("#CH"+j).html(data[0].N);
					$("#CC"+j).html(data[0].C);
					$("#CD"+j).html(data[0].D);
					$("#CP"+j).html(data[0].P);
					tempHis+='<div class="card Hiscard border-danger transparentBg">';
					tempHis+='<img src="https://i.imgur.com/'+data[0].I+'.png" alt="Image">';
					tempHis+='<div id="CHH'+HiscardN+'" class="text-danger"></div></div>';
					his = tempHis + his;
					$("#RanCHistory").html(his);
					$("#CHH"+HiscardN).html(data[0].N);
					HiscardN++;
					}
				);
			}
		}
	);	
}
</script>
</head>

<body>
	<nav id="header" class="header navbar navbar-expand-lg bg-info">
		<a href="index.php"><img src="https://i.imgur.com/nLtvyR5.png" alt="logo" style="height:100px"></a>
		<ul class="navbar-nav mr-auto">
		<a href="index.php"><button class="btn btn-outline-light">Home</button></a> 
		<a href="restaurantListJS.php"><button class="btn btn-outline-light">Restaurant</button></a>
		<a href="random.php"><button class="btn btn-outline-light active">Random</button></a>
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
		</div>
		<a href="javascript:void(0);" class="icon mx-2" onclick="verticalNav()">
			<i class="fa fa-bars" style="font-size: 30px; color: #343a40;"></i>
		</a>
	</nav>
	
	<div id="content" class="Rancontent">
		<div class = "card Ransidebar transparentBg border-danger">
			<div>
				<div class="Bcenterize">	
					<button class="btn btn-outline-danger" onclick="ranGenCard(RanFormC.Choice.value,RanFormD.Choice.value,RanFormP.Choice.value,RanDorU.Choice.value)">Random</button>
				</div>
				<form name="RanFormC" onsubmit="return false">
					</br>
					<input type="radio" name="Choice" value="all" checked/><title1>Cuisine</title1></br>
					<input type="radio" name="Choice" value="Chinese"/>Chinese</br>
					<input type="radio" name="Choice" value="Dessert"/>Dessert</br>
					<input type="radio" name="Choice" value="France"/>France</br>
					<input type="radio" name="Choice" value="Italian"/>Italian</br>			
					<input type="radio" name="Choice" value="Japanese"/>Japanese</br>
					<input type="radio" name="Choice" value="Taiwan"/>Taiwan</br>	
					<input type="radio" name="Choice" value="Western"/>Western</br></br>	
				</form>	
				<form name="RanFormD" onsubmit="return false">
					<input type="radio" name="Choice" value="all" checked/><title1>District</title1></br>
					<input type="radio" name="Choice" value="Hung Hom"/>Hung Hom</br>
					<input type="radio" name="Choice" value="Whampoa"/>Whampoa</br>
					<input type="radio" name="Choice" value="Tsim Sha Tsui"/>Tsim Sha Tsui</br></br>
				</form>	
				<form name="RanFormP" onsubmit="return false">
					<input type="radio" name="Choice" value="all" checked/><title1>Price</title1></br>
					<input type="radio" name="Choice" value="<$50"/><$50</br>
					<input type="radio" name="Choice" value="$51-100"/>$51-100</br>
					<input type="radio" name="Choice" value="$101-200"/>$101-200</br>
					<input type="radio" name="Choice" value="$201-400"/>$201-400</br></br>
				</form>
				<form name="RanDorU" onsubmit="return false" style="font-weight:bold">
					<input type="radio" name="Choice" value="default" checked/>Ran by default</br>
					<?php
					if(isset($_COOKIE["userName"]))
					{echo '<input type="radio" name="Choice" value="user"/>Ran by user preference</br>';}
					?>
				<form>
			</div>
		</div>
		<div id = "Rancard" class = "RanCcontent"></div>
		<div id="RanHistory" class="card RanHistory transparentBg border-danger">
			<div style="color:#dc3545"><h5>Random History:</h5></div>
			<div id="RanCHistory" class="RanCHistory"></div>
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
</body>
</html>