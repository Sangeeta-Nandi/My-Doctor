<?php 
session_start();

if(!isset($_SESSION['user_name'])){

header("location: index.php");
}
else {

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>my doctor</title>
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="css/img_popup.css" rel="stylesheet" type="text/css">
<script src="js/jquery.js"></script>
<script src="js/bootstrap-hover-dropdown.js"></script>
<script src="js/bootstrap.min.js"></script>
<style>
a:active, a:focus, a:hover {
	outline: 0;
}
</style>
</head>

<body>
<div id="header">
  <div class="row" style="margin-top:0px;">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"> <img width="100%" height="220px" src="images/bacslide.png"/> </div>
  </div>
</div>
<div class="container-fluid">
  <div class="row">
    <div class="menu"> <!-- Menu Start-->
      <div class="navbar navbar-default navbar-static-top" role="navigation">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
          </div>
          <div style="height: 1px;" aria-expanded="false" class="navbar-collapse collapse">
            <?php  include("include/menu.php"); ?>
          </div>
        </div>
      </div>
      
      <!--Header End--> 
    </div>
    <div class="row" style="min-height:550px;">
      <marquee>
      Welcome To My doctor Admin Panel
      </marquee>
    </div>
    <div class="row footer" style="background-color:#297233;">
      <div class="col-lg-11 col-md-11 col-sm-11 col-xs-10">
        <p style="color:#FFF; text-align:center; margin-top:10px;">Copyright &copy; 2015 ETechno Service Limited. All rights reserved.</p>
      </div>
      <div class="col-lg-1 col-md-1 col-sm-1 col-xs-2" style="margin-top:5px"> <a href="#" class="pull-right hidden-lg hidden-md hidden-sm" style="margin:10px 10px 0px 0px;"> <img src="../image/up_button.png" style="border-radius:2px;"/></a> <a href="#" class="hidden-xs"><img src="../image/up_button.png" style="border-radius:2px;"/></a> </div>
    </div>
  </div>
</div>
<!--container-fluid End-->
</body>
</html>
<?php } ?>