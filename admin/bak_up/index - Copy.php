<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<title>my doctor</title>

<!-- Bootstrap -->
<link href="css/bootstrap.min.css" rel="stylesheet">

<!-- Font Awesome 4.0 -->
<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

<style>
/*
		 * Specific styles of signin component
		 */
		/*
		 * General styles
		 */
		body, html {
	height: 100%;
	background-repeat: no-repeat;
	background-image: linear-gradient(rgb(104, 145, 162), rgb(12, 97, 33));/*background-image: linear-gradient(rgb(51, 153, 255), rgb(0, 128, 255));*/
}
.card-container.card {
	max-width: 350px;
	padding: 40px 40px;
}
.btn {
	font-weight: 700;
	height: 36px;
	-moz-user-select: none;
	-webkit-user-select: none;
	user-select: none;
	cursor: default;
}
/*
		 * Card component
		 */
		.card {
	background-color: #F7F7F7;
	/* just in case there no content*/
			padding: 20px 25px 30px;
	margin: 0 auto 25px;
	margin-top: 50px;
	/* shadows and rounded borders */
			-moz-border-radius: 2px;
	-webkit-border-radius: 2px;
	border-radius: 2px;
	-moz-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
	-webkit-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
	box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
}
.profile-img-card {
	width: 96px;
	height: 96px;
	margin: 0 auto 10px;
	display: block;
	-moz-border-radius: 50%;
	-webkit-border-radius: 50%;
	border-radius: 50%;
}
/*
		 * Form styles
		 */
		.profile-name-card {
	font-size: 16px;
	font-weight: bold;
	text-align: center;
	margin: 10px 0 0;
	min-height: 1em;
}
.reauth-email {
	display: block;
	color: #404040;
	line-height: 2;
	margin-bottom: 10px;
	font-size: 14px;
	text-align: center;
	overflow: hidden;
	text-overflow: ellipsis;
	white-space: nowrap;
	-moz-box-sizing: border-box;
	-webkit-box-sizing: border-box;
	box-sizing: border-box;
}
.form-signin #inputEmail, .form-signin #inputPassword {
	direction: ltr;
	height: 44px;
	font-size: 16px;
}
.form-signin input[type=email], .form-signin input[type=password], .form-signin input[type=text], .form-signin button {
	width: 100%;
	display: block;
	margin-bottom: 10px;
	z-index: 1;
	position: relative;
	-moz-box-sizing: border-box;
	-webkit-box-sizing: border-box;
	box-sizing: border-box;
}
.form-signin .form-control:focus {
	/*border-color: rgb(104, 145, 162);*/
	border-color: rgb(102, 178, 255);
	outline: 0;
	-webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 8px rgb(104, 145, 162);
	box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 8px rgb(104, 145, 162);
}
.btn.btn-signin {
	/*background-color: #4d90fe; */
			background-color: rgb(104, 145, 162);
	/* background-color: linear-gradient(rgb(104, 145, 162), rgb(12, 97, 33));*/
			padding: 0px;
	font-weight: 700;
	font-size: 14px;
	height: 36px;
	-moz-border-radius: 3px;
	-webkit-border-radius: 3px;
	border-radius: 3px;
	border: none;
	-o-transition: all 0.218s;
	-moz-transition: all 0.218s;
	-webkit-transition: all 0.218s;
	transition: all 0.218s;
}
.btn.btn-signin:hover, .btn.btn-signin:active, .btn.btn-signin:focus {
	/*background-color: rgb(12, 97, 33);*/
	background: rgb(0, 128, 255);
}
.forgot-password {
	color: rgb(104, 145, 162);
}
.forgot-password:hover, .forgot-password:active, .forgot-password:focus {
	color: rgb(12, 97, 33);
}
</style>
</head>
<body>
<!--
    you can substitue the span of reauth email for a input with the email and
    include the remember me checkbox
    -->
<div class="container">
  <div class="card card-container"> 
    <!--<img class="profile-img-card" src="//lh3.googleusercontent.com/-6V8xOA6M7BA/AAAAAAAAAAI/AAAAAAAAAAA/rzlHcD0KYwo/photo.jpg?sz=120" alt="" />--> 
    <img class="profile-img-card" src="http://yogaofrecovery.com/wp-content/uploads/2014/05/dependence-on-prescription-drugs.jpg" alt="" /> 
    <!--<img id="profile-img" class="profile-img-card" src="//ssl.gstatic.com/accounts/ui/avatar_2x.png" />-->
    <p id="profile-name" class="profile-name-card"></p>
    <form class="form-signin" action="home.php">
      <span id="reauth-email" class="reauth-email"></span>
      <input type="text" name="user" id="inputEmail" class="form-control" placeholder="User Name" required autofocus>
      <input type="password" name="pass" id="inputPassword" class="form-control" placeholder="Password" required>
      <div id="remember" class="checkbox">
        <label>
          <input type="checkbox" value="remember-me">
          Remember me </label>
      </div>
      <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit" name="submit">Sign in</button>
    </form>
    <!-- /form --> 
    <a href="#" class="forgot-password"> Forgot the password? </a> </div>
  <!-- /card-container --> 
</div>
<?php 

$error=''; // Variable To Store Error Message
if (isset($_POST['submit'])) {
if (empty($_POST['user']) || empty($_POST['pass'])) {
$error = "Username or Password is invalid";
}
else
{
// Define $username and $password
$username=$_POST['user'];
$password=$_POST['pass'];
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$connection = mysql_connect("localhost", "root", "");
// To protect MySQL injection for Security purpose
$username = stripslashes($username);
$password = stripslashes($password);
$username = mysql_real_escape_string($username);
$password = mysql_real_escape_string($password);
// Selecting Database
$db = mysql_select_db("mydoctor_db", $connection);
// SQL query to fetch information of registerd users and finds user match.
$query = mysql_query("select * from user_access where user_name='$username' AND password='$password'", $connection);
$rows = mysql_num_rows($query);
if ($rows == 1) {
$_SESSION['login_user']=$username; // Initializing Session
header("location: home.php"); // Redirecting To Other Page
} else {
$error = "Username or Password is invalid";
}
mysql_close($connection); // Closing Connection
}
}

?>

<!-- /container --> 

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> 
<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script src="js/bootstrap.min.js"></script> 
<script>
		$( document ).ready(function() {
		// DOM ready

		// Test data
		/*
		 * To test the script you should discomment the function
		 * testLocalStorageData and refresh the page. The function
		 * will load some test data and the loadProfile
		 * will do the changes in the UI
		 */
		// testLocalStorageData();
		// Load profile if it exits
		loadProfile();
	});

	/**
	 * Function that gets the data of the profile in case
	 * thar it has already saved in localstorage. Only the
	 * UI will be update in case that all data is available
	 *
	 * A not existing key in localstorage return null
	 *
	 */
	function getLocalProfile(callback){
		var profileImgSrc      = localStorage.getItem("PROFILE_IMG_SRC");
		var profileName        = localStorage.getItem("PROFILE_NAME");
	/*	var profileReAuthEmail = localStorage.getItem("PROFILE_REAUTH_EMAIL");*/

		if(profileName !== null
	/*			&& profileReAuthEmail !== null*/
				&& profileImgSrc !== null) {
			callback(profileImgSrc, profileName);
		}
	}

	/**
	 * Main function that load the profile if exists
	 * in localstorage
	 */
	function loadProfile() {
		if(!supportsHTML5Storage()) { return false; }
		// we have to provide to the callback the basic
		// information to set the profile
		getLocalProfile(function(profileImgSrc, profileName, profileReAuthEmail) {
			//changes in the UI
			$("#profile-img").attr("src",profileImgSrc);
			$("#profile-name").html(profileName);
			/*$("#reauth-email").html(profileReAuthEmail);
			$("#inputEmail").hide();*/
			$("#remember").hide();
		});
	}

	/**
	 * function that checks if the browser supports HTML5
	 * local storage
	 *
	 * @returns {boolean}
	 */
	function supportsHTML5Storage() {
		try {
			return 'localStorage' in window && window['localStorage'] !== null;
		} catch (e) {
			return false;
		}
	}

	/**
	 * Test data. This data will be safe by the web app
	 * in the first successful login of a auth user.
	 * To Test the scripts, delete the localstorage data
	 * and comment this call.
	 *
	 * @returns {boolean}
	 */
	function testLocalStorageData() {
		if(!supportsHTML5Storage()) { return false; }
		localStorage.setItem("PROFILE_IMG_SRC", "//lh3.googleusercontent.com/-6V8xOA6M7BA/AAAAAAAAAAI/AAAAAAAAAAA/rzlHcD0KYwo/photo.jpg?sz=120" );
		localStorage.setItem("PROFILE_NAME", "C�sar Izquierdo Tello");
		localStorage.setItem("PROFILE_REAUTH_EMAIL", "oneaccount@gmail.com");
	}
	</script>
</body>
</html>
