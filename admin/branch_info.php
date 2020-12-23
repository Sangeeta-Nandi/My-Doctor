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
<form method="post" action="branch_info.php" enctype="multipart/form-data" accept-charset="utf-8">
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
                <div style="font-weight: bold; font-size: 18px; text-align:center;" class="panel-heading">Branch Info Entry</div>
                <div class="panel-body"> 
                  <!--table-->
                  <div>
                    <div class="form-group">
                      <label for="cname" class="col-sm-4 control-label">Branch Name:</label>
                      <div class="col-sm-6">
                        <input name="branch_name" type="text" class="form-control" id="inputEmail3" placeholder="Enter Branch Name">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputPassword3" class="col-sm-4 control-label">Branch Type:</label>
                      <div class="col-sm-6">
                        <select class="form-control" id="inputEmail3" name="ddl_btype">
                          <option value="" selected disabled>Please Select Company</option>
                          <option value="Diagnostics">Diagnostics</option>
                          <option value="Hospital">Hospital</option>
                        </select>
                      </div>
                    </div>
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
                      <td><strong>Branch Name</strong></td>
                      <td><strong>Branch Type</strong></td>
                      <td><strong>Edit</strong></td>
                      <td><strong>Delete</strong></td>
                    </tr>
                    <tr></tr>
                    <?php  
							   include("include/connect.php");
												   
		  $queryOne="SELECT d.company_name,branch_name,b.branch_id,branch_type FROM d_branch b INNER JOIN d_company d on b.company_id=d.company_id";
							  
		       $resultOne = $conn->query($queryOne);
	
	          if ($resultOne->num_rows > 0){
	
	         while($rowOne = $resultOne->fetch_assoc())
	          {
							        $id = $rowOne['branch_id'];
								$branch_name = $rowOne['branch_name'];
								$company_name = $rowOne['company_name'];
								$branch_type=$rowOne['branch_type'];
								
								$table = "d_branch";
								
								?>
                    <tr>
                      <td><?php echo $company_name; ?></td>
                      <td><?php echo $branch_name; ?></td>
                      <td><?php echo $branch_type; ?></td>
                      <td><a href="edit_branch.php?id=<?php echo $id; ?>">Edit</a></td>
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
	 $post_branch = $_POST['branch_name'];
	 $company_id= $_POST['ddl_company'];
	 $branch_type=$_POST['ddl_btype'];
	 
if($post_branch==''  &&  $company_id==''){
	
	echo "<script>alert('Any of the fields is empty')</script>";
	exit();
	} else {
		
	//	move_uploaded_file($image_tmp,"../news_file/$post_image");
		$insert_query = "insert into d_branch(branch_id,branch_name,branch_type,company_id) values ('','$post_branch','$branch_type','$company_id')";
		mysqli_query($conn,$insert_query);
	
		}
		
	if($insert_query !=''){
	
	echo "<script>alert('post published successfuly')</script>";
	echo "<script>window.open('branch_info.php','_self')</script>";
	
	}

}
?>
<?php } ?>
