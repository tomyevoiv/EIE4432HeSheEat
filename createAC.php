<html>
<title>Create Account - HeSheEat</title>
<link rel="icon" href="https://i.imgur.com/nLtvyR5.png">
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
<script type="text/javascript">
    /*
    function checkInput(){
        var UserNameCheck = /^[a-zA-Z0-9]{5,20}$/
        if(!(document.getElementById("userName").value.match(UserNameCheck))){
            alert("Username not correct");
            document.getElementById("CheckUserName").innerHTML="Username not valid. ";
            return false;
        }

    }*/
</script>
</header>
<body>
<div id="sitebody">
	<nav id="header" class="header navbar navbar-expand-lg bg-info">
		<a href="index.html"><img src="https://i.imgur.com/nLtvyR5.png" alt="logo" style="height:100px"></a>
		<ul class="navbar-nav mr-auto">
		<a href="index.html"><button class="btn btn-outline-light active">Home</button></a> 
		<a href="restaurantListJS.html"><button class="btn btn-outline-light">Restaurant</button></a>
		<a href="random.html"><button class="btn btn-outline-light">Random</button></a>
		<a href="aboutUs.html"><button class="btn btn-outline-light">About Us</button></a>
		</ul>
		<div>
			<form name="UForm" action="search.php" method="post" class="form-inline">
			<input class="form-control mr-sm-2" type="search" name="eatwhat" placeholder="Type here" aria-label="Search">
			<input class="btn btn-dark my-2 my-sm-0" type="submit" value="Search">
			</form>
			<a href="Login.php" class="btn btn-outline-light Brighterize">Login in</a><br>
		</div>
		<a href="javascript:void(0);" class="icon mx-2" onclick="verticalNav()">
			<i class="fa fa-bars" style="font-size: 30px; color: #343a40;"></i>
		</a>
	</nav>
	
	<div id="content" class="content">
		<div class="card transparentBg border-danger" style="padding:1rem">
<form name="formA" action="AddUser.php"  method="post" class="needs-validation" novalidate style="width: 600px" >
    <h4 style="align-content: center;width: 100%">New Account</h4>
    <div class="form-row">
        <div class="col-md-4 mb-3">
            <label for="FName">First name</label>
            <input type="text" class="form-control" name="FName" id="FName" placeholder="First name*" required>

            <div class="invalid-feedback">
                Please enter your name.
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <label for="LName">Last name</label>
            <input type="text" class="form-control" name="LName" id="LName" placeholder="Last name*" required>

            <div class="invalid-feedback">
                Please enter your name.
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <label for="birthday">Birthday</label>
            <div class="input-group">
                <input type="text" class="form-control" name="birthday" id="birthday" placeholder="YYYY-MM-DD" required>

                <div class="invalid-feedback">
                    Please enter your birthday.
                </div>
            </div>
        </div>
    </div>
    <div class="form-row">
        <div class="col-md-7 mb-3">
            <label for="email">Email</label>
            <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp"
                   placeholder="Email*" required>

            <div class="invalid-feedback">
                Please provide a valid email.
            </div>
        </div>
        <div class="col-md-5 mb-3">
            <label for="phoneNum">Phone Number</label>
            <div class="input-group">
                <input type="text" class="form-control" name="phoneNum" id="phoneNum" placeholder="Phone number*"
                       aria-describedby="inputGroupPrepend" required>

                <div class="invalid-feedback">
                    Please enter phone number.
                </div>
            </div>
        </div>


        <div class="col-md-4 mb-3">
            <label for="userName">Username</label>
            <div class="input-group">
                <input type="text" class="form-control" name="userName" id="userName" placeholder="Username*"
                       aria-describedby="inputGroupPrepend" required>
                <small id="userNameHelp" class="form-text text-muted">NO symbol like @ # * _ and length should be between 5-20</small>
                <span id="checkUserName"></span>
                <div class="invalid-feedback">
                    Username not valid.
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <label for="password">Password</label>
            <input type="password" class="form-control" name="password" id="password" placeholder="Password*" required>
            <small id="passwordHelp" class="form-text text-muted">NO symbol like @ # * _ and password length should be between 5-20</small>

            <div class="invalid-feedback">
                Password not valid.
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <label for="passwordC">Confirm Password</label>
            <input type="password" class="form-control" name="passwordC" id="passwordC" placeholder="Confirm password*" required>
            <small id="passwordCHelp" class="form-text text-muted">Same with password</small>

            <div class="invalid-feedback">
                Password not valid.
            </div>

        </div>
    </div>

    <div class="form-group">
        <div class="form-check">
            <input type="checkbox" class="form-check-input" id="Iagree" required>
            <label class="form-check-label" for="Iagree">I agree to be an ON9 <span>*</span></label>
            <div class="invalid-feedback">
                You must agree before submitting.
            </div>
        </div>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
    <button type="button" class="btn btn-primary" onclick="onClickBack()">Back</button>
</form>
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
<script>

    (function () {
        'use strict';
        window.addEventListener('load', function () {

            var forms = document.getElementsByClassName('needs-validation');

            var validation = Array.prototype.filter.call(forms, function (form) {
                form.addEventListener('submit', function (event) {
                    if (form.checkValidity() == false) {
                            event.preventDefault();
                            event.stopPropagation();

                    }
                    form.classList.add('was-validated');
                }, false);
            });
        }, false);
    })();

    function onClickBack() {
        window.location.replace("LogIn.php");
    }
</script>
</body>
</html>


