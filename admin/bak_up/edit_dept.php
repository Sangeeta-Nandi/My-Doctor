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
<form method="post" action="edit_dept.php" enctype="multipart/form-data" accept-charset="utf-8">
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
								
								 							   
								 $view_priciple_msg_query=mysql_query("select * from  d_department where d_dept_id ='$page_id'");
							     $row = mysql_fetch_array($view_priciple_msg_query);
							    
								
								$dept_name = $row['dept_name'];
								$dept_title=$row['dept_title'];
								$d_depart_image = $row['d_depart_image'];
								
								   
								   ?>
                    <div class="form-group">
                      <label for="inputEmail3" class="col-sm-4 control-label">ID</label>
                      <div class="col-sm-6">
                        <input required type="text" readonly="true" name="id" class="form-control" id="inputEmail3" value="<?php echo $page_id; ?>">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputEmail3" class="col-sm-4 control-label">Department Name:</label>
                      <div class="col-sm-6">
                        <input name="depname" type="text" class="form-control" id="inputEmail3" value="<?php echo $dept_name; ?>">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputEmail3" class="col-sm-4 control-label">Department Title:</label>
                      <div class="col-sm-6">
                        <input name="deptitle" type="text" class="form-control" id="inputEmail3" value="<?php echo $dept_title; ?>">
                      </div>
                    </div>
                    
                    <div class="form-group">
                      <label for="inputEmail3" class="col-sm-4 control-label"></label>
                      <div class="col-sm-6">
                        <img src="department/<?php echo $d_depart_image;?>" width="130" height="130" alt="" border="0">
                        <input style="display:none;" type="text" name="pre_image"  class="form-control" id="inputEmail3" value="<?php echo $d_depart_image; ?>">
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
	 $deptName = $_POST['depname'];
	 $updat_title=$_POST['deptitle'];
	 
	 $post_pre_image=$_POST['pre_image'];
	 
	 $post_image= $_FILES['image']['name'];
	 $image_tmp= $_FILES['image']['tmp_name'];
	 
	 
	 $date = date("Y-m-d  H:i:s");
	
if($deptName=='' &&  $post_image==''){
	
	echo "<script>alert('Any of the fields is empty')</script>";
	exit();
	} else {
		
		
		if(!$post_image=='')
		{
		
	   $uploaddir = 'C:/xampp/htdocs/mydoctor/admin/department/';
       $uploadfile = $uploaddir . basename($_FILES['image']['name']);
		move_uploaded_file($_FILES['image']['tmp_name'], $uploadfile);
		
		$update_query = "update d_department set dept_name='$deptName',dept_title='$updat_title',d_depart_image='$post_image' where d_dept_id = '$pageid'";
		mysql_query($update_query);
		
		}
		
		else
		{
			
			$update_query = "update d_department set dept_name='$deptName',dept_title='$updat_title',d_depart_image='$post_pre_image' where d_dept_id = '$pageid'";
		mysql_query($update_query);
		}
	
		}
		
	if($update_query !=''){
	
	echo "<script>alert('post update successfully')</script>";
	echo "<script>window.open('deptname.php','_self')</script>";
	
	}

}
?>
<?php } ?>