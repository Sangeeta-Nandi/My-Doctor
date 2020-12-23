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
<form method="post" action="edit_price.php" enctype="multipart/form-data" accept-charset="utf-8">
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
							  $query="select D.Company_id,D.company_name, T.city, TN.d_test_id, TN.test_name, T.price FROM test_price T LEFT JOIN d_company D on T.company_id= D.company_id LEFT JOIN d_test_name TN on T.d_test_id=TN.d_test_id  where  T.test_price_id=$page_id";
						 
							  $result = $conn->query($query);
										
								 if ($result->num_rows > 0)
								 {
										
								   while($row = $result->fetch_assoc())
								   {
									  $Company_id=$row['Company_id'];
									  $company_name = $row['company_name'];
									  $city = $row['city'];
									  $d_test_id=$row['d_test_id'];
									  $test_name=$row['test_name'];
									  $price=$row['price'];
									
									
								   }
								    $selected = $company_name ;
								    
									$selectedTest=$test_name;
									
									$query2 = "SELECT DISTINCT M.d_test_id,M.test_name FROM  d_test_name M LEFT JOIN test_price T on M.d_test_id=T.d_test_id";
                                    $result2 = mysqli_query($conn, $query2);
                                    $test_array = array();
                                    while ($row2 = mysqli_fetch_assoc($result2))
									{
                                    $test_array[$row2['d_test_id']] = $row2['test_name'];
                                    }
									
									
									$query3 = "SELECT DISTINCT C.company_id,C.company_name FROM  d_company C LEFT JOIN test_price T on C.company_id=T.company_id";
                                    $result3 = mysqli_query($conn, $query3);
                                    $data_array = array();
                                    while ($row3 = mysqli_fetch_assoc($result3))
									{
                                    $data_array[$row3['company_id']] = $row3['company_name'];
                                    }
									
								    
								   ?>
                    <div class="form-group">
                      <label for="inputEmail3" class="col-sm-4 control-label">ID</label>
                      <div class="col-sm-6">
                        <input required type="text" readonly="true" name="id" class="form-control" id="inputEmail3" value="<?php echo $page_id; ?>">
                      </div>
                    </div>
               
					
					   <div class="form-group">
                      <label for="cname" class="col-sm-4 control-label">Company Name:</label>
                      <div class="col-sm-6">
                        <select class="form-control" id="inputEmail3" name="ddl_mtype">
			
						<?php

							foreach($data_array as $p => $w):
							   
								if($selected == $w)
								{
													 
									echo '<option selected="selected" value="'.$p.'">'.$w.'</option>';
								}
								else
								{
									echo '<option value="'.$p.'">'.$w.'</option>';
								}
							endforeach;
                       
                      ?>
                       
                        </select>
									
                      </div>
                    </div>
					
                    <div class="form-group">
                      <label for="inputEmail3" class="col-sm-4 control-label">City:</label>
                      <div class="col-sm-6">
                        <input name="pCity" type="text" class="form-control" id="inputEmail3" value="<?php echo $city; ?>">
                      </div>
                    </div>
                  
					
					   <div class="form-group">
                      <label for="cname" class="col-sm-4 control-label">Test Name:</label>
                      <div class="col-sm-6">
                        <select class="form-control" id="inputEmail3" name="ddl_testName">
			
						<?php

							foreach($test_array as $test => $testName):
							   
								if($selectedTest == $testName)
								{
													 
									echo '<option selected="selected" value="'.$test.'">'.$testName.'</option>';
								}
								else
								{
									echo '<option value="'.$test.'">'.$testName.'</option>';
								}
							endforeach;
                       
                      ?>
                       
                        </select>
									
                      </div>
                    </div>
					
                    <div class="form-group">
                      <label for="inputEmail3" class="col-sm-4 control-label">Price:</label>
                      <div class="col-sm-6">
                        <input name="pPrice" type="text" class="form-control" id="inputEmail3" value="<?php echo $price; ?>">
                      </div>
                    </div>
             
                  
                    <div class="form-group">
                      <div class="col-sm-6 col-sm-offset-4">
                        <input type="submit" name="submit" value="Update" class="btn btn-default">
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
	 $pCompanyName = $_POST['ddl_mtype'];
	 $pCity=$_POST['pCity'];
	 
	 $pTestName=$_POST['ddl_testName'];
	 $pPrice=$_POST['pPrice'];
	
	 
	 $date = date("Y-m-d  H:i:s");
	
if($pCompanyName=='' &&  $pTestName=='' && $pPrice==''){
	
	echo "<script>alert('Any of the fields is empty')</script>";
	exit();
	} else {
		
		
			$update_query = "update test_price set company_id='$pCompanyName' ,city='$pCity',d_test_id='$pTestName',price='$pPrice',update_date='$date' where test_price_id =$pageid";
		    mysqli_query($conn,$update_query);
	
		}
		
	if($update_query !=''){
	
	echo "<script>alert('post update successfully')</script>";
	echo "<script>window.open('test_price.php','_self')</script>";
	
	}

}
?>
<?php } ?>