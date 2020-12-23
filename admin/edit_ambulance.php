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
<form method="post" action="edit_ambulance.php" enctype="multipart/form-data" accept-charset="utf-8">
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
							     if(isset($_GET['id']))
								 {
								 $page_id = $_GET['id'];
								 
								 
								 $query="select * from ambulance where ambulance_id =$page_id";
							     $result = $conn->query($query);
										
										if ($result->num_rows > 0)
										{
										
										  while($row = $result->fetch_assoc())
								 
								              {
								             		$id = $row['ambulance_id'];
													$name = $row['ambulance_service_name'];
													$city = $row['ambulance_city'];
													$address=$row['ambulance_address'];
													$phone=$row['ambulance_phone'];
													$website=$row['ambulance_website'];

											  }
								
							     
								   
								   ?>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-4 control-label">ID</label>
                    <div class="col-sm-6">
                      <input required type="text" readonly="true" name="id" class="form-control" id="inputEmail3" value="<?php echo $page_id; ?>">
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-4 control-label">Ambulance Provider Name:</label>
                    <div class="col-sm-6">
                      <input name="hosname" type="text" class="form-control" id="inputEmail3" value="<?php echo $name; ?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-4 control-label">City:</label>
                    <div class="col-sm-6">
                      <input name="hoscity" type="text" class="form-control" id="inputEmail3" value="<?php echo $city; ?>">
                    </div>
                  </div>
                  
                  
                  
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-4 control-label">Address:</label>
                    <div class="col-sm-6">
                      <input name="hosaddress" type="text" class="form-control" id="inputEmail3" value="<?php echo $address; ?>">
                    </div>
                  </div>
                  
                  
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-4 control-label">Phone:</label>
                    <div class="col-sm-6">
                      <input name="hosphone" type="text" class="form-control" id="inputEmail3" value="<?php echo $phone; ?>">
                    </div>
                  </div>
                  
                  
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-4 control-label">Website:</label>
                    <div class="col-sm-6">
                      <input name="hoswebsite" type="text" class="form-control" id="inputEmail3" value="<?php echo $website; ?>">
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <div class="col-sm-6 col-sm-offset-4">
                      <input type="submit" name="submit" value="Submit" class="btn btn-default">
                      </input>
                    </div>
                  </div>
                  <?php 
				  
								 }
								 
					}
				  ?>
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
	 $hosp_name = $_POST['hosname'];
	 $hosp_city = $_POST['hoscity'];
	 $hosp_address = $_POST['hosaddress'];
	 $hosp_phone = $_POST['hosphone'];
	 $hosp_weblink = $_POST['hoswebsite'];
	 
	 $date = date("Y-m-d  H:i:s");
	
if($hosp_name=='' &&  $hosp_city=='' && $hosp_address=='' &&  $hosp_phone==''){
	
	echo "<script>alert('Any of the fields is empty')</script>";
	exit();
	} else {
		
		
		$update_query = "update ambulance set ambulance_service_name='$hosp_name',ambulance_city='$hosp_city',ambulance_address='$hosp_address',ambulance_phone='$hosp_phone', ambulance_website='$hosp_weblink' where ambulance_id = '$pageid'";
		mysqli_query($conn,$update_query);
		
		
	
		}
		
	if($update_query !=''){
	
	echo "<script>alert('post update successfully')</script>";
	echo "<script>window.open('ambulance.php','_self')</script>";
	
	}

}
?>
<?php } ?>