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
<form method="post" action="edit_doctor_info.php" enctype="multipart/form-data" accept-charset="utf-8">
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
							  $query="select * FROM doctor_info  where doctor_id=$page_id";
						 
							  $result = $conn->query($query);
										
								 if ($result->num_rows > 0)
								 {
										
								   while($row = $result->fetch_assoc())
								   {

									  $name = $row['doctor_name'];
									  $degree = $row['doctor_degree'];
								      $designation = $row['doctor_designation'];
								      $organization=$row['doctor_organization'];
									  $doctor_address = $row['d_address'];
									  $doctor_phone=$row['doctor_phone'];
									  $d_mobile=$row['d_mobile'];
									  $doctor_eperience=$row['doctor_eperience'];	
									  $doctor_city=$row['city'];
									  
									  $d_image=$row['d_image'];	
								
								   }
								   ?>
                    <div class="form-group">
                      <label for="inputEmail3" class="col-sm-4 control-label">ID</label>
                      <div class="col-sm-6">
                        <input required type="text" readonly="true" name="id" class="form-control" id="inputEmail3" value="<?php echo $page_id; ?>">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputEmail3" class="col-sm-4 control-label">Doctor Name:</label>
                      <div class="col-sm-6">
                        <input name="pdoctorName" type="text" class="form-control" id="inputEmail3" value="<?php echo $name; ?>">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputEmail3" class="col-sm-4 control-label">doctor degree:</label>
                      <div class="col-sm-6">
                        <input name="pDegree" type="text" class="form-control" id="inputEmail3" value="<?php echo $degree; ?>">
                      </div>
					  </div>
					  <div class="form-group">
                      <label for="inputEmail3" class="col-sm-4 control-label">Designation:</label>
                      <div class="col-sm-6">
                        <input name="pDesignation" type="text" class="form-control" id="inputEmail3" value="<?php echo $designation; ?>">
                      </div>
					  </div>
					  <div class="form-group">
                      <label for="inputEmail3" class="col-sm-4 control-label">Organization:</label>
                      <div class="col-sm-6">
                        <input name="pOrganization" type="text" class="form-control" id="inputEmail3" value="<?php echo $organization; ?>">
                      </div>
					  </div>
					  <div class="form-group">
                      <label for="inputEmail3" class="col-sm-4 control-label">City:</label>
                      <div class="col-sm-6">
                        <input name="pCity" type="text" class="form-control" id="inputEmail3" value="<?php echo $doctor_city; ?>">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputEmail3" class="col-sm-4 control-label">Address:</label>
                      <div class="col-sm-6">
                        <input name="pAddress" type="text" class="form-control" id="inputEmail3" value="<?php echo $doctor_address; ?>">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputEmail3" class="col-sm-4 control-label">Phone:</label>
                      <div class="col-sm-6">
                        <input name="pPhone" type="text" class="form-control" id="inputEmail3" value="<?php echo $doctor_phone; ?>">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputEmail3" class="col-sm-4 control-label">Mobile:</label>
                      <div class="col-sm-6">
                        <input name="pMobile" type="text" class="form-control" id="inputEmail3" value="<?php echo $d_mobile; ?>">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputEmail3" class="col-sm-4 control-label">Experience:</label>
                      <div class="col-sm-6">
                        <input name="pExperience" type="text" class="form-control" id="inputEmail3" value="<?php echo  $doctor_eperience; ?>">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputEmail3" class="col-sm-4 control-label"></label>
                      <div class="col-sm-6"> <img src="department/<?php echo $d_image;?>" width="130" height="130" alt="" border="0">
                        <input style="display:none;" type="text" name="pre_image"  class="form-control" id="inputEmail3" value="<?php echo $d_image; ?>">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputPicture" class="col-sm-6 control-label">Or Choose New Picture:</label>
                      <div class="col-sm-3">
                        <input type="file" id="InputFile" name="image">
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
	 $doctorName = $_POST['pdoctorName'];
	 $doctorDegree = $_POST['pDegree'];
	 $doctorDesignation = $_POST['pDesignation'];
	 $doctorOrganization = $_POST['pOrganization'];
	 $post_city=$_POST['pCity'];
	 
	 $post_pAddress=$_POST['pAddress'];
	 $post_pPhone=$_POST['pPhone'];
	 $post_pMobile=$_POST['pMobile'];
	 $post_experience=$_POST['pExperience'];
	 
	 
	 $post_pre_image=$_POST['pre_image'];
	 
	 $post_image= $_FILES['image']['name'];
	 $image_tmp= $_FILES['image']['tmp_name'];
	 
	 
	 $date = date("Y-m-d  H:i:s");
	
if($doctorName=='' &&  $post_image==''){
	
	echo "<script>alert('Any of the fields is empty')</script>";
	exit();
	} else {
		
		if(!$post_image=='')
		
		{
	   $uploaddir = '/home/mydoctor/public_html/admin/department/$post_image';
       $uploadfile = $uploaddir . basename($_FILES['image']['name']);
		move_uploaded_file($_FILES['image']['tmp_name'], $uploadfile);
		
		$update_query = "update doctor_info set doctor_name='$doctorName' ,doctor_degree='$doctorDegree',doctor_designation='$doctorDesignation',doctor_Organization='$doctorOrganization',d_address='$post_pAddress',doctor_phone='$post_pPhone',d_mobile='$post_pMobile',city='$post_city',doctor_degree='$post_experience',d_image='$post_image' where d_dept_id =$pageid";
		mysqli_query($conn,$update_query);
		
		}
		else
		{
			$update_query = "update doctor_info set doctor_name='$doctorName' ,doctor_degree='$doctorDegree',doctor_designation='$doctorDesignation',doctor_Organization='$doctorOrganization',d_address='$post_pAddress',doctor_phone='$post_pPhone',d_mobile='$post_pMobile',city='$post_city',doctor_degree='$post_experience',
			d_image='$post_pre_image' where d_dept_id =$pageid";
		mysqli_query($conn,$update_query);
			
		}
	
		}
		
	if($update_query !=''){
	
	echo "<script>alert('post update successfully')</script>";
	echo "<script>window.open('doctor_info.php','_self')</script>";
	
	}

}
?>
<?php } ?>