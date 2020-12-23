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
<form method="post" action="test_info.php" enctype="multipart/form-data" accept-charset="utf-8">
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
                <div style="font-weight: bold; font-size: 18px; text-align:center;" class="panel-heading">Test Info Entry</div>
                <div class="panel-body"> 
                  <!--table-->
                  <div>
                    <div class="form-group">
                      <label for="cname" class="col-sm-4 control-label">Test Name:</label>
                      <div class="col-sm-6">
                        <input name="cname" type="text" class="form-control" id="inputEmail3" placeholder="Enter Test Name" required>
                      </div>
                    </div>
                    <!--<div class="form-group">
                      <label for="companytype" class="col-sm-4 control-label">Company Type:</label>
                      <div class="col-sm-6">
                        <input name="companytype" type="text" class="form-control" id="inputEmail3" placeholder="Enter Company Type">
                      </div>
                    </div>-->
                    
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
                                    <td><strong>SL Number</strong></td>
								    <td><strong>Test Name</strong></td>
                                  
                                    <td><strong>Edit</strong></td>
									<td><strong>Delete</strong></td>
									
                                    
                                </tr> 
								<tr></tr>
								 <?php  
							   include("include/connect.php");
							   $i=1;
							   $query="select * FROM d_test_name  order by 1 DESC LIMIT 50";
							     $result = $conn->query($query);
										
										if ($result->num_rows > 0)
										{
										
										  while($row = $result->fetch_assoc())
												{
												$id = $row['d_test_id'];
												$name = $row['test_name'];
												
												
												$table = "d_test_name";
								
								?>
                                <tr>
								    <td><?php echo $i; ?></td>
                                    <td><?php echo $name; ?></td>
							
                                    <td><a href="edit_test_info.php?id=<?php echo $id; ?>">Edit</a></td>
                                    <td><a href="delete_processing.php?id=<?php echo $id; ?>&table=<?php echo $table; ?>">Delete</a></td>
                                    
                                </tr>
								
							  <?php 
											$i=$i+1;
											} 
													  
									}
							  
							  ?>				                                
                           
                           					
                                                              
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
	 $post_cname = $_POST['cname'];

	 

		
	//	move_uploaded_file($image_tmp,"../news_file/$post_image");
		$insert_query = "insert into d_test_name(d_test_id,test_name) values ('','$post_cname')";
		mysqli_query($conn,$insert_query);
	
	if($insert_query !=''){
	
	echo "<script>alert('post published successfuly')</script>";
	 echo "<script>window.open('test_info.php','_self')</script>";
	//header("location: home.php");
	}

}
?>
<?php } ?>
