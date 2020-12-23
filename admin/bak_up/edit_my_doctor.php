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
<form method="post" action="edit_my_doctor.php" enctype="multipart/form-data" accept-charset="utf-8">
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
              <div style="font-weight: bold; font-size: 18px; text-align:center;" class="panel-heading">Admin Panel</div>
              <div class="panel-body"> 
                <!--table-->
                <div>
                  <?php
                            	 include("include/connect.php");
							     if(isset($_GET['id'])){
								 $page_id = $_GET['id'];
								 $table_name =$_GET['content'];	 
								 
								 							   
								 $view_priciple_msg_query=mysql_query("select * from $table_name where company_id ='$page_id'");
							     $row = mysql_fetch_array($view_priciple_msg_query);
							    
								
								$company_name = $row['company_name'];
								$company_type = $row['company_type'];
								
								   
								   ?>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-4 control-label">ID</label>
                    <div class="col-sm-6">
                      <input required type="text" readonly="true" name="id" class="form-control" id="inputEmail3" value="<?php echo $page_id; ?>">
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-4 control-label">Company Name:</label>
                    <div class="col-sm-6">
                      <input name="comname" type="text" class="form-control" id="inputEmail3" value="<?php echo $company_name; ?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-4 control-label">Company Type:</label>
                    <div class="col-sm-6">
                      <input name="comtype" type="text" class="form-control" id="inputEmail3" value="<?php echo $company_type; ?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-6 col-sm-offset-4">
                      <input type="submit" name="submit" value="Submit" class="btn btn-default">
                      </input>
                    </div>
                  </div>
                  <?php } ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- End Left Content--> 
      
    </div>
    <!--End row-->
    <div class="row footer" style="background-color:#1E5225;">
      <?php include("include/footer.php") ?>
    </div>
  </div>
  </div>
  
  <!--container-fluid End-->
</form>
</body>
</html>
<?php 

include("include/connect.php");
if(isset($_POST['submit'])){
	 $pageid = $_POST['id'];
	 $companyName = $_POST['comname'];
	 $companyType = $_POST['comtype'];
	 $date = date("Y-m-d  H:i:s");
	
if($companyName=='' &&  $companyType==''){
	
	echo "<script>alert('Any of the fields is empty')</script>";
	exit();
	} else {
		
		
		$update_query = "update d_company set company_name='$companyName',company_type='$companyType' where company_id = '$pageid'";
		mysql_query($update_query);
		
		
	
		}
		
	if($update_query !=''){
	
	echo "<script>alert('post update successfully')</script>";
	echo "<script>window.open('company_info.php','_self')</script>";
	
	}

}
?>
<?php } ?>