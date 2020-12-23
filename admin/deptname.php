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
<form method="post" action="deptname.php" enctype="multipart/form-data" accept-charset="utf-8">
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
                <div style="font-weight: bold; font-size: 18px; text-align:center;" class="panel-heading">Dept Info Entry</div>
                <div class="panel-body"> 
                  <!--table-->
                  <div>
                    <div class="form-group">
                      <label for="cname" class="col-sm-4 control-label">Department Name:</label>
                      <div class="col-sm-6">
                        <input name="dname" type="text" class="form-control" id="inputEmail3" placeholder="Enter Department Name">
                      </div>
                    </div>
                    
                    <div class="form-group">
                      <label for="dtitle" class="col-sm-4 control-label">Department Title:</label>
                      <div class="col-sm-6">
                        <input name="dtitle" type="text" class="form-control"  placeholder="Enter Department Title">
                      </div>
                    </div>
                    
                    <div class="form-group">
                      <label for="inputPicture" class="col-sm-6 control-label">File/Picture:</label>
                      <div class="col-sm-3">
                        <input type="file" id="exampleInputFile" name="image">
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
                      <td><strong>SL Number</strong></td>
                      <td><strong>Department Name</strong></td>
                      <td><strong>Department Title</strong></td>
                      <td><strong>Department Image</strong></td>
                      <td><strong>Edit</strong></td>
                      <td><strong>Delete</strong></td>
                    </tr>
                    <tr></tr>
                    <?php  
								 $i=1;
							   include("include/connect.php");
							   $query="select * FROM d_department  order by 1 asc LIMIT 50";
							   
							   $result = $conn->query($query);
										
										if ($result->num_rows > 0)
										{
										
										  while($row = $result->fetch_assoc())
							   
							           {
							     
								$id=$row['d_dept_id'];
								$name = $row['dept_name'];
								$title=$row['dept_title'];
							    $deptImage=$row['d_depart_image'];
								
								$table = "d_department";
								
								?>
                    <tr>
                      <td><?php echo $i; ?></td>
                      <td><?php echo $name; ?></td>
                       <td><?php echo $title; ?></td>
                      <td><img src="department/<?php echo $deptImage;?>" width="130" height="130" alt="" border="0"></td>
                      <td><a href="edit_dept.php?id=<?php echo $id; ?>">Edit</a></td>
                      <td><a href="delete_processing.php?id=<?php echo $id; ?>&table=<?php echo $table; ?>">Delete</a></td>
                    </tr>
                    <?php  $i=$i+1;} } ?>
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
	 $post_dname = $_POST['dname'];
	 $post_title=$_POST['dtitle'];
	 $post_image= $_FILES['image']['name'];
	 $image_tmp= $_FILES['image']['tmp_name'];
	 
if($post_dname==''){
	
	echo "<script>alert('Any of the fields is empty')</script>";
	exit();
	} else {
		
	    move_uploaded_file($image_tmp,"../department/$post_image");
		$insert_query = "insert into d_department(d_dept_id,dept_name,dept_title,d_depart_image) values ('','$post_dname','$post_title','$post_image')";
		mysqli_query($conn,$insert_query);
	
		}
		
	if($insert_query !=''){
	
	echo "<script>alert('post published successfuly')</script>";
	 echo "<script>window.open('deptname.php','_self')</script>";
	//header("location: home.php");
	}

}
?>
<?php } ?>
