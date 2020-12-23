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
<title>my doctor</title>
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
<!--<link href="CSS/bootstrap-theme.min.css" rel="stylesheet" type="text/css">-->
<!--<link href="CSS/customcss.css" rel="stylesheet" type="text/css">-->
<link href="css/img_popup.css" rel="stylesheet" type="text/css">
<!--<script src="http://code.jquery.com/jquery-2.1.4.min.js"></script>-->

<script src="js/jquery.js"></script>
<script src="js/bootstrap-hover-dropdown.js"></script>
<script src="js/bootstrap.min.js"></script>
<style>
a:active, a:focus, a:hover {
	outline: 0;
}
</style>
<script>
window.onload=function() {
  setTimeout(function() {
    location.replace("home.php");
  },1000000); // wait 9 seconds
}
</script>
</head>

<body>
<form method="post" action="deptname.php" enctype="multipart/form-data" accept-charset="utf-8">
  <div id="header">
    <div class="row" style="margin-top:0px;">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"> <img width="100%" height="220px" src="images/bacslide.png"/> </div>
    </div>
  </div>

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
                        <div style="font-weight: bold; font-size: 18px;" class="panel-heading">Delete Admin Panel</div>
                        <div class="panel-body">
							<!--table-->
                            <div>
                                 <?php  
							   include("include/connect.php");
							   if(isset($_GET['id'])&&isset($_GET['table'])){
								   $page_id = $_GET['id'];
								    $table= $_GET['table'];
									
									if($table=='d_company')
									{
									
									mysqli_query($conn,"delete from $table where company_id='$page_id'");
									
							  	     echo "<script>alert('post delete successfully')</script>";
									 echo "<script>window.open('CompanyInfo.php','_self')</script>";
										
										
									}
									
								    else if($table=='d_branch')
									{
									
									  mysqli_query($conn,"delete from $table where branch_id='$page_id'");
									
							  	     echo "<script>alert('post delete successfully')</script>";
									 echo "<script>window.open('branch_info.php','_self')</script>";
										
										
									}
									
									else if($table=='d_department')
									{
									
									  mysqli_query($conn,"delete from $table where d_dept_id='$page_id'");
									
							  	     echo "<script>alert('post delete successfully')</script>";
									 echo "<script>window.open('deptname.php','_self')</script>";
										
										
									}
									
									else if($table=='govt_hospital')
									{
										
										mysqli_query($conn,"delete from $table where gov_hs_id='$page_id'");
									
							  	     echo "<script>alert('post delete successfully')</script>";
									 echo "<script>window.open('govt_hospital.php','_self')</script>";
										
										
									}
									
									
									else if($table=='private_hospital')
									{
										
										mysqli_query($conn,"delete from $table where pri_hs_id='$page_id'");
									
							  	     echo "<script>alert('post delete successfully')</script>";
									 echo "<script>window.open('private_hospital.php','_self')</script>";
										
										
									}
									
									
									else if($table=='blood_bank')
									{
										
										mysqli_query($conn,"delete from $table where blood_bank_id='$page_id'");
									
							  	     echo "<script>alert('post delete successfully')</script>";
									 echo "<script>window.open('blood_bank.php','_self')</script>";
										
										
									}
									else if($table=='ambulance')
									{
										
										mysqli_query($conn,"delete from $table where ambulance_id='$page_id'");
									
							  	     echo "<script>alert('post delete successfully')</script>";
									 echo "<script>window.open('ambulance.php','_self')</script>";
										
										
									}
									else if($table=='foreign_hospital')
									{
										
										mysqli_query($conn,"delete from $table where fore_hs_id='$page_id'");
									
							  	     echo "<script>alert('post delete successfully')</script>";
									 echo "<script>window.open('foreign_hospital.php','_self')</script>";
										
										
									}
									else if($table=='d_test_name')
									{
										
										mysqli_query($conn,"delete from $table where d_test_id='$page_id'");
									
							  	     echo "<script>alert('post delete successfully')</script>";
									 echo "<script>window.open('test_info.php','_self')</script>";
										
										
									}
									
									
									else if($table=='test_price')
									{
										
										mysqli_query($conn,"delete from $table where test_price_id='$page_id'");
									
							  	     echo "<script>alert('post delete successfully')</script>";
									 echo "<script>window.open('test_price.php','_self')</script>";
										
										
									}
									
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
