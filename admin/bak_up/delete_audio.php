<?php session_start();

if(!isset($_SESSION['user_name'])){

header("location: index.php");
}
else {
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Visa Processing</title>
<link href="../CSS/bootstrap.min.css" rel="stylesheet" type="text/css">
<!--<link href="CSS/bootstrap-theme.min.css" rel="stylesheet" type="text/css">-->
<!--<link href="CSS/customcss.css" rel="stylesheet" type="text/css">-->
<link href="../CSS/img_popup.css" rel="stylesheet" type="text/css">
<!--<script src="http://code.jquery.com/jquery-2.1.4.min.js"></script>-->
   
   <script src="../jquery/jquery.js"></script>
 <script src="../jquery/bootstrap-hover-dropdown.js"></script>
 <script src="../js/bootstrap.min.js"></script>

</head>

<body>
<form class="form-horizontal" action="delete_audio.php" method="POST" enctype="multipart/form-data" accept-charset="utf-8">
		<div id="header">
        <div class="row" style="margin-top:0px;">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <img width="100%" height="150px" src="../image/1281189452_web.jpeg"/>
        </div></div></div>

<div class="container-fluid" >
      <div class="row" style="min-height:550px;">
     <div class="menu"> <!-- Menu Start-->
    <div class="navbar navbar-default navbar-static-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div style="height: 1px;" aria-expanded="false" class="navbar-collapse collapse">
                <?php include("include/menu.php"); ?>
            </div>
        </div>
    </div>
    

        	<!--Header End-->
</div> 
<div class="row">
<div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 col-xs-12"><!-- left Content Start-->
<div class="row principal_msg"> <!-- Principal Massage Start-->
                <div class="col-md-12">
                    <div class="panel panel-primary">
                        <div style="font-weight: bold; font-size: 18px;" class="panel-heading">Audio Delete Admin Panel</div>
                        <div class="panel-body">
							<!--table-->
                            <div>
                                 <?php  
							   include("include/connect.php");
							   if(isset($_GET['id'])&&isset($_GET['table'])){
								   $page_id = $_GET['id'];
								    $table= $_GET['table'];
								    $view_priciple_msg_query=mysql_query("delete from $table where AudioID='$page_id'");
									
							  	     echo "<script>alert('post delete successfully')</script>";
									 echo "<script>window.open('view_audio.php','_self')</script>";
								   ?>
								   
							   <?php } ?>    
                            </div>
						</div>
					</div> 
				</div>

</div>

</div><!-- End Left Content-->

</div>
</div>
<!--End row-->
<div class="row footer" style="background-color:#1E5225;">
	 <?php include("include/footer.php") ?>
</div>
</div>
 </form>
<!--container-fluid End-->
</body>
</html>
	 
<?php  }?>
