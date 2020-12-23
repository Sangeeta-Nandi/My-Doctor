<?php session_start();

if(!isset($_SESSION['user_name'])){

header("location: index.php");
}
else {
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Gallery Admin</title>
<link href="../CSS/bootstrap.min.css" rel="stylesheet" type="text/css">
<!--<link href="../CSS/bootstrap-theme.min.css" rel="stylesheet" type="text/css">-->
<!--<link href="../CSS/customcss.css" rel="stylesheet" type="text/css">-->
<link href="../CSS/img_popup.css" rel="stylesheet" type="text/css">
<!--<script src="http://code.jquery.com/jquery-2.1.4.min.js"></script>-->
   
   <script src="../jquery/jquery.js"></script>
 <script src="../jquery/bootstrap-hover-dropdown.js"></script>
 <script src="../js/bootstrap.min.js"></script>

</head>

<body>
<form class="form-horizontal" action="slider.php" method="post" enctype="multipart/form-data" accept-charset="utf-8">
		<div id="header">
        <div class="row" style="margin-top:0px;">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <img width="100%" height="150px" src="../image/1281189452_web.jpeg"/>
        </div></div></div>

<div class="container-fluid">
      <div class="row">
     <div class="menu"> <!-- Menu Start-->
    <div class="navbar navbar-default navbar-static-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
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
                        <div style="font-weight: bold; font-size: 18px;" class="panel-heading">Slider Admin Panel</div>
                        <div class="panel-body">
							<!--table-->
                            <div>
                            	
                                     
                                      
                                      <div class="form-group">
                                        <label for="inputEmail3" class="col-sm-4 control-label">Total Number of Student:</label>
                                        <div class="col-sm-6">
                                          <input required type="text" name="total" class="form-control" id="inputEmail3" placeholder="Type Total Number of Student....">
                                        </div>
                                      </div>
                                      
                                        <div class="form-group">
                                        <label for="inputEmail3" class="col-sm-4 control-label">Total Number of Present :</label>
                                        <div class="col-sm-6">
                                          <input required type="text" name="present" class="form-control" id="inputEmail3" placeholder="Type Total Number of Present Student....">
                                        </div>
                                      </div>
									  
									   <div class="form-group">
                                        <label for="inputEmail3" class="col-sm-4 control-label">Total Number of Absent :</label>
                                        <div class="col-sm-6">
                                          <input required type="text" name="absent" class="form-control" id="inputEmail3" placeholder="Type Total Number of Absent....">
                                        </div>
                                      </div>
                                      <div class="form-group">
                                        <label for="inputEmail3" class="col-sm-4 control-label">Select Class :</label>
                                        <div class="col-sm-4">
                                           <select class="form-control" name="type" required>
                                             <option>Select Class</option>
											<option value="six">Class-VI</option>
											<option value="seven">Class-VII</option>
											<option value="eight">Class-VIII</option>
											<option value="nine">Class-IX</option>
											<option value="ten">Class-X</option>
											<option value="eleven">Class-XI</option>
											<option value="twelve">Class-XII</option>
                                        </div>
                                      </div>
                                      
                                      <div class="form-group">
                                        <label for="inputEmail3" class="col-sm-4 control-label">Select Class :</label>
                                        <div class="col-sm-4">
                                           <select class="form-control" name="type" required>
                                           
                                        </div>
                                      </div>
                                      									  
                                       
										<div class="form-group">
                                        <label for="inputPassword3" class="col-sm-4 control-label">Select Group</label>
                                        <div class="col-sm-4">
                                          <select class="form-control" name="status" required>
                                              <option>Select New Option</option>
                                               <option value="humanities">Humanities</option>
												<option value="science">Science</option>
												<option value="commerce">Commerce</option>
                                            </select>
                                        </div>
                                      </div>
                                      <!-- <div class="form-group">
                                        <label for="inputEmail3" class="col-sm-4 control-label">Subject</label>
                                        <div class="col-sm-6">
                                          <input required type="text" name="subject" class="form-control" id="inputEmail3" placeholder="Teacher's Subject">
                                        </div>
                                      </div>-->
                                       
                                       
                                      <div class="form-group">
                                        <div class="col-sm-6 col-sm-offset-6">
                                          <input type="submit" name="submit" value="Submit" class="btn btn-default"></input>
                                        </div>
                                      </div>
                                    
                            </div>
						</div>
					</div> 
				</div>


</div>

</div><!-- End Left Content-->

</div>
<!--End row-->
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
         
		 $title = $_POST['title'];
		 
		 $type = $_POST['type'];
		
		 $post_image= $_FILES['image']['name'];
	     $image_tmp= $_FILES['image']['tmp_name'];
		 
		 //echo $bof;
		 $date = date("Y-m-d");
		 move_uploaded_file($image_tmp,"../news_file/$post_image");
		 $insert_query="INSERT INTO `photogallery`(`id`, `title`, `type`, `image`, `date`) 
		           VALUES ('','$title','$type','$post_image','$date')";
		 mysql_query($insert_query);
		if($insert_query !=''){
	
	echo "<script>alert('post published successfuly')</script>";
	//header("location: home.php");
	}
}
 ?>
<?php } ?>