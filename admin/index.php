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
    <p id="profile-name" class="profile-name-card"> Please Login Here</p>
    <form class="form-signin" action="index.php" method="post">
     
      <input type="text" name="user" id="inputEmail" class="form-control" placeholder="User Name" required autofocus>
      <input type="password" name="pass" id="inputPassword" class="form-control" placeholder="Password" required>
      <div id="remember" class="checkbox">
        <label>
          <input type="checkbox" value="remember-me">
          Remember me </label>
      </div>
      <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit" name="login">Sign in</button>
    </form>
    <!-- /form --> 
    <a href="#" class="forgot-password"> Forgot the password? </a> </div>
  <!-- /card-container --> 
</div>
<?php 

$con = mysqli_connect("localhost","root","","mydoctor_db");

if (mysqli_connect_errno())

{

echo "MySQLi Connection was not established: " . mysqli_connect_error();

}

// checking the user

if(isset($_POST['login'])){

$email = mysqli_real_escape_string($con,$_POST['user']);

$pass = mysqli_real_escape_string($con,$_POST['pass']);

$sel_user = "select user_id,user_name, password from user_access where user_name='$email' AND password='$pass'";

$run_user = mysqli_query($con, $sel_user);

$check_user = mysqli_num_rows($run_user);

if($check_user>0){

$_SESSION['user_name']=$email;

echo "<script>window.open('home.php','_self')</script>";

}

else {

echo "<script>alert('Email or password is not correct, try again!')</script>";

}

}
?>

<?php /*?>include("database/connect.php");

if(isset($_POST['login']))
{
	
	$conn = mysqli_connect("localhost","root","","mydoctor_db");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
	$user_name = $_POST['user'];
	$user_pass = $_POST['pass'];
	
	
			$admin_query = "select user_id,user_name, password from user_access where user_name='$user_name' AND password='$user_pass'";
		
			$run = mysqli_query($conn,$admin_query); 
		 
				if(mysqli_num_rows($run)>0)
				{
				
				$_SESSION['user_name']=$user_name;
				
				
				echo "<script>window.open('home.php','_self')</script>";
				}
				else 
				{
				
				echo "<script>alert('User name or password is incorrect')</script>";
				
				}
		
}
<?php */?>
?>
</body>
</html>
