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
<form method="post" action="govt_hospital.php" enctype="multipart/form-data" accept-charset="utf-8">
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
                <div style="font-weight: bold; font-size: 18px; text-align:center;" class="panel-heading">Govt Hospital Info Entry</div>
                <div class="panel-body"> 
                  <!--table-->
                  <div class="row">
                    <div class="form-group">
                      <label for="hname" class="col-sm-4 control-label">Hospital Name:</label>
                      <div class="col-sm-6">
                        <input name="hname" type="text" class="form-control" id="inputEmail3" placeholder="Enter Hospital Name" required>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="hcity" class="col-sm-4 control-label">Hospital City:</label>
                      <div class="col-sm-6">
                        <input name="hcity" type="text" class="form-control" id="inputEmail3" placeholder="Enter City" required>
                      </div>
                    </div>
                    
                    
                    <div class="form-group">
                      <label for="haddress" class="col-sm-4 control-label">Address:</label>
                      <div class="col-sm-6">
                        <input name="haddress" type="text" class="form-control" id="inputEmail3" placeholder="Enter Address" required>
                      </div>
                    </div>
                    
                    <div class="form-group">
                      <label for="hphone" class="col-sm-4 control-label">Phone:</label>
                      <div class="col-sm-6">
                        <input name="hphone" type="text" class="form-control" id="inputEmail3" placeholder="Enter Phone" required>
                      </div>
                    </div>
                    
                    <div class="form-group">
                      <label for="hlink" class="col-sm-4 control-label">Website Name:</label>
                      <div class="col-sm-6">
                        <input name="hlink" type="text" class="form-control" id="inputEmail3" placeholder="Enter Website">
                      </div>
                    </div>
                    
                    <!--    
                  <div class="form-group">
                    <label for="inputPassword3" class="col-sm-4 control-label">Message Type:</label>
                    <div class="col-sm-4">
                      <select class="form-control" name="msg_type">
                        <option>Select New Option</option>
                        <option value="Transportation">Transportation</option>
                        <option value="Exclusive-Offers ">Exclusive Offers</option>
                      </select>
                    </div>
                  </div>--> 
                    <!--  <div class="form-group">
                                        <label for="inputPicture" class="col-sm-6 control-label">File/Picture:</label>
                                        <div class="col-sm-3">
                                           <input type="file" id="exampleInputFile" name="image">
                                        </div>
                                      </div>-->
                    <div class="form-group">
                      <div class="col-sm-6 col-sm-offset-4">
                        <input type="submit" name="submit" value="Submit" class="btn btn-default">
                        </input>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- End Left Content--> 
        
      </div>
      <!--End row--> 
           
    </div>
    <div class="row">
<div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 col-xs-12"><!-- left Content Start-->
<div class="row principal_msg"> <!-- Principal Massage Start-->
                <div class="col-md-12">
                    <div class="panel panel-primary">
                        <!--<div style="font-weight: bold; font-size: 18px;" class="panel-heading">Company List</div>-->
                        <div class="panel-body">
							<!--table-->
                            <div class="table-responsive"> 
                            <table class="table">
                                
                                <tr style="background: #02204d none repeat scroll 0 0; color: #fff;">
								    <td><strong>Hospital Name</strong></td>
                                    <td><strong>City</strong></td>
                                    <td><strong>Address</strong></td>
                                    <td><strong>Phone</strong></td>
                                    <td><strong>Website Link</strong></td>
                                    
                                    <td><strong>Edit</strong></td>
									<td><strong>Delete</strong></td>
									
                                    
                                </tr> 
								<tr></tr>
								 <?php  
							   include("include/connect.php");
							   $query="select * FROM govt_hospital  order by 1 DESC LIMIT 50";
							   
							    $result = $conn->query($query);
										
										if ($result->num_rows > 0)
										{
										
										  while($row = $result->fetch_assoc())
							  
							            {
											$id = $row['gov_hs_id'];
											$name = $row['gov_hs_name'];
											$city = $row['gov_hs_city'];
											$address=$row['gov_hs_address'];
											$phone=$row['gov_hs_phone'];
											$website=$row['gov_hs_website'];
								
								
								            $table = "govt_hospital";
								
								?>
                                <tr>
								    <td><?php echo $name; ?></td>
                                    <td><?php echo $city; ?></td>
							        <td><?php echo $address; ?></td>
                                    <td><?php echo $phone; ?></td>
                                    <td><?php echo $website; ?></td>
                                    
                                    
                                    <td><a href="edit_govt_hospital.php?id=<?php echo $id;?>">Edit</a></td>
                                    <td><a href="delete_processing.php?id=<?php echo $id; ?>&table=<?php echo $table; ?>">Delete</a></td>
                                    
                                </tr>
								
							  <?php     }  } ?>				                                
                           
                           					
                                                              
                            </table>
                            </div>
						</div>
					</div> 
				</div>

</div>

</div><!-- End Left Content-->

</div>
    <div class="row footer" style="background-color:#1E5225;">
      <?php include("include/footer.php") ?>
    </div>
  </div>
  <!--container-fluid End-->
</form>
</body>
</html>
<?php 

include("include/connect.php");
if(isset($_POST['submit'])){
	 $post_hname = $_POST['hname'];
	 $post_city= $_POST['hcity'];
	 
	 $post_address = $_POST['haddress'];
	 $post_phone= $_POST['hphone'];
	 
	 $post_hlink = $_POST['hlink'];
	

		
	//	move_uploaded_file($image_tmp,"../news_file/$post_image");
		$insert_query = "insert into govt_hospital(gov_hs_id,gov_hs_name,gov_hs_city,gov_hs_address,gov_hs_phone,gov_hs_website) values ('','$post_hname','$post_city','$post_address','$post_phone','$post_hlink')";
		mysqli_query($conn,$insert_query);
	
	if($insert_query !=''){
	
	echo "<script>alert('post inserted successfuly')</script>";
	 echo "<script>window.open('govt_hospital.php','_self')</script>";
	//header("location: home.php");
	}

}
?>
<?php } ?>
