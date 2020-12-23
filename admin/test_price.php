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
<form method="post" action="test_price.php" enctype="multipart/form-data" accept-charset="utf-8">
  <div id="header">
    <?php include("include/header.php") ?>
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
                      <label for="inputPassword3" class="col-sm-4 control-label">Company Name:</label>
                      <div class="col-sm-6">
                        <?php
    // LOGIN TO DATABASE SCRIPT WRITTEN FOR MYSQLI
    $mysqli = new mysqli("localhost", "root", "", "mydoctor_db");
    if ($mysqli->connect_errno) {
        echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " .            $mysqli->connect_error;
     }
    // END OF LOGIN TO DB SCRIPT
 
    $query_ak='SELECT company_id, company_name FROM d_company';
    $result = $mysqli->query($query_ak);
    ?>
                        <select class="form-control" name="ddl_company">
                          <option value="" selected disabled>Please Select Company</option>
                          <?php
        while ($row =  mysqli_fetch_assoc($result)) {
            
			$c_id=$row['company_id'];
			$c_name=$row['company_name']; 
      
        ?>
                          <option value="<?php echo $c_id;  ?>">
                          <?php  echo $c_name; ?>
                          </option>
                          <?php
}
?>
                        </select>
                      </div>
                    </div>
                    
                  
                    <div class="form-group">
                      <label for="cname" class="col-sm-4 control-label">City:</label>
                      <div class="col-sm-6">
                        <input name="city" type="text" class="form-control" id="inputEmail3" placeholder="Enter City Name">
                      </div>
                    </div>
                    
                    <div class="form-group">
                      <label for="inputPassword3" class="col-sm-4 control-label">Test Name:</label>
                      <div class="col-sm-6">
                        <?php
    // LOGIN TO DATABASE SCRIPT WRITTEN FOR MYSQLI
    $mysqli = new mysqli("localhost", "root", "", "mydoctor_db");
    if ($mysqli->connect_errno) {
        echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " .            $mysqli->connect_error;
     }
    // END OF LOGIN TO DB SCRIPT
 
    $query_ak='SELECT d_test_id, test_name FROM d_test_name';
    $result = $mysqli->query($query_ak);
    ?>
                        <select class="form-control" name="ddl_test">
                          <option value="" selected disabled>Please Test Name</option>
                          <?php
        while ($row =  mysqli_fetch_assoc($result)) {
            
			$c_id=$row['d_test_id'];
			$c_name=$row['test_name']; 
      
        ?>
                          <option value="<?php echo $c_id;  ?>"> <?php  echo $c_name; ?> </option>
                          <?php
}
?>
                        </select>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="cname" class="col-sm-4 control-label">Test Price:</label>
                      <div class="col-sm-6">
                        <input name="price" type="decimal" class="form-control" id="inputEmail3" placeholder="Enter Test Price">
                      </div>
                    </div>
                                   
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
                      <td><strong>Company Name</strong></td>
                      <td><strong>Test Name</strong></td>
                      <td><strong>Price</strong></td>
                      
                      <td><strong>Edit</strong></td>
                      <td><strong>Delete</strong></td>
                    </tr>
                    <tr></tr>
                    <?php  
							   include("include/connect.php");
												   
		  $queryOne="SELECT p.test_price_id,d.company_name,t.test_name,p.price FROM test_price p LEFT JOIN d_company d on p.company_id=d.company_id LEFT JOIN d_test_name t on p.d_test_id=t.d_test_id";
							  
		       $resultOne = $conn->query($queryOne);
	
	          if ($resultOne->num_rows > 0){
	
	         while($rowOne = $resultOne->fetch_assoc())
	          {
							    $id = $rowOne['test_price_id'];
								$company_name = $rowOne['company_name'];
								$test_name = $rowOne['test_name'];
								$price=$rowOne['price'];
								
								$table = "test_price";
								
								?>
                    <tr>
                      <td><?php echo $company_name; ?></td>
                      <td><?php echo $test_name; ?></td>
                      <td><?php echo $price; ?></td>
                      <td><a href="edit_price.php?id=<?php echo $id; ?>">Edit</a></td>
                      <td><a href="delete_processing.php?id=<?php echo $id; ?>&table=<?php echo $table; ?>">Delete</a></td>
                    </tr>
                    <?php } } ?>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- End Left Content--> 
      
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
	
	 $company_id= $_POST['ddl_company'];
	 $post_city = $_POST['city'];
	 $test_type=$_POST['ddl_test'];
	 $TestPrice = $_POST['price'];
	 $post_branch = $_POST['branch_name'];
	 
	 
	 
if($post_branch==''  &&  $company_id==''){
	
	echo "<script>alert('Any of the fields is empty')</script>";
	exit();
	} else {
		
	//	move_uploaded_file($image_tmp,"../news_file/$post_image");
		$insert_query = "insert into test_price(test_price_id,company_id,d_test_id,d_city_id,price) values ('','$company_id','$test_type','$post_city','$TestPrice')";
		mysqli_query($conn,$insert_query);
	
		}
		
	if($insert_query !=''){
	
	echo "<script>alert('post published successfuly')</script>";
	echo "<script>window.open('test_price.php','_self')</script>";
	
	}

}
?>
<?php } ?>
