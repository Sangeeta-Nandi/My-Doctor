<?php 
session_start();




  $db = new mysqli('localhost','root','','mydoctor_db');//set your database handler
  $query = "SELECT company_id, company_name FROM d_company";
  $result = $db->query($query);

  while($row = $result->fetch_assoc()){
    $categories[] = array("id" => $row['company_id'], "val" => $row['company_name']);
  }

  $query = "SELECT branch_id,company_id,branch_name FROM d_branch";
  $result = $db->query($query);

  while($row = $result->fetch_assoc()){
    $subcats[$row['company_id']][] = array("id" => $row['branch_id'], "val" => $row['branch_name']);
  }

  $jsonCats = json_encode($categories);
  $jsonSubCats = json_encode($subcats);






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
<script type='text/javascript'>
      <?php
        echo "var categories = $jsonCats; \n";
        echo "var subcats = $jsonSubCats; \n";
      ?>
      function loadCategories(){
        var select = document.getElementById("categoriesSelect");
        select.onchange = updateSubCats;
        for(var i = 0; i < categories.length; i++){
          select.options[i] = new Option(categories[i].val,categories[i].id);          
        }
      }
      function updateSubCats(){
        var catSelect = this;
        var catid = this.value;
        var subcatSelect = document.getElementById("subcatsSelect");
        subcatSelect.options.length = 0; //delete all options if any present
        for(var i = 0; i < subcats[catid].length; i++){
          subcatSelect.options[i] = new Option(subcats[catid][i].val,subcats[catid][i].id);
        }
      }
    </script>
<script>
window.onload=function() {
  setTimeout(function() {
    location.replace("home.php");
  },1000000); // wait 9 seconds
}
</script>
</head>

<body onload='loadCategories()'>
<form method="post" action="doctor_info.php" enctype="multipart/form-data" accept-charset="utf-8">
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
                <div style="font-weight: bold; font-size: 18px; text-align:center;" class="panel-heading">Doctor Info Entry</div>
                <div class="panel-body"> 
                  <!--table-->
                  <div>
                    <div class="form-group">
                      <label for="cname" class="col-sm-4 control-label">Dotor Name:</label>
                      <div class="col-sm-6">
                        <input name="doctorname" type="text" class="form-control" id="inputEmail3" placeholder="Enter Doctor Name">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputPassword3" class="col-sm-4 control-label">Dept Name:</label>
                      <div class="col-sm-6">
                        <?php
    // LOGIN TO DATABASE SCRIPT WRITTEN FOR MYSQLI
    $mysqli = new mysqli("localhost", "root", "", "mydoctor_db");
    if ($mysqli->connect_errno) {
        echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " .            $mysqli->connect_error;
     }
    // END OF LOGIN TO DB SCRIPT
 
    $query_ak='SELECT d_dept_id, dept_name FROM d_department';
    $result = $mysqli->query($query_ak);
    ?>
                        <select class="form-control" name="ddl_dept">
                          <option value="" selected disabled>Please Select Department</option>
                          <?php
        while ($row =  mysqli_fetch_assoc($result)) {
            
			$c_id=$row['d_dept_id'];
			$c_name=$row['dept_name']; 
      
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
                        <input name="city" type="text" class="form-control" id="inputEmail3" placeholder="Enter City">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputMessage" class="col-sm-4 control-label">Chamber Address:</label>
                      <div class="col-sm-6">
                        <textarea class="form-control" rows="13" name="chamberAddress" placeholder="Enter Chamber Address"></textarea>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="companytype" class="col-sm-4 control-label">Phone:</label>
                      <div class="col-sm-6">
                        <input name="docphone" type="text" class="form-control" id="inputEmail3" placeholder="Enter Phone No">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="companytype" class="col-sm-4 control-label">Mobile:</label>
                      <div class="col-sm-6">
                        <input name="docMobile" type="text" class="form-control" id="inputEmail3" placeholder="Enter Mobile No">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="companytype" class="col-sm-4 control-label">Doctor Experience:</label>
                      <div class="col-sm-6">
                        <input name="docexperience" type="number" class="form-control" id="inputEmail3" placeholder="Enter doctor Experience">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputPassword3" class="col-sm-4 control-label">Company Name:</label>
                      <div class="col-sm-6">
                        <select id='categoriesSelect' class='form-control' name='ddl_company'>
                        </select>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="ddl_branch" class="col-sm-4 control-label">Branch Name:</label>
                      <div class="col-sm-6">
                        <select id='subcatsSelect' class="form-control" name="ddl_branch">
                        </select>
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
                      <td><strong>Doctor Name</strong></td>
                      
                       <td><strong>Doctor City</strong></td>
                      
                      <td><strong>Address</strong></td>
                      <td><strong>Mobile</strong></td>
                      <td><strong>Experience</strong></td>
                      <td><strong>Image</strong></td>
                      <td><strong>Edit</strong></td>
                      <td><strong>Delete</strong></td>
                    </tr>
                    <tr></tr>
                    <?php  
							   include("include/connect.php");
							   $query="select * FROM doctor_info  order by 1 DESC LIMIT 50";
							   
							   
							  $result = $conn->query($query);
										
										if ($result->num_rows > 0)
										{
										
										  while($row = $result->fetch_assoc())
							   
							  
											  {
													$id = $row['doctor_id'];
													$name = $row['doctor_name'];
													$doctor_address = $row['d_address'];
													$d_mobile=$row['d_mobile'];
													$doctor_eperience=$row['doctor_eperience'];	
													$doctor_city=$row['city'];
													
													$d_image=$row['d_image'];	
													
													$table = "doctor_info";
								
								?>
                    <tr>
                      <td><?php echo $name; ?></td>
                        <td><?php echo $doctor_city; ?></td>
                      <td><?php echo $doctor_address; ?></td>
                     
                      
                       <td><?php echo $d_mobile; ?></td>
                      <td><?php echo $doctor_eperience; ?></td>
                      
                     
                      <td><img src="department/<?php echo $d_image;?>" width="130" height="130" alt="" border="0"></td>
                      
                      
                      <td><a href="edit_doctor_info.php?id=<?php echo $id; ?>">Edit</a></td>
                      <td><a href="delete_processing.php?id=<?php echo $id; ?>&table=<?php echo $table; ?>">Delete</a></td>
                    </tr>
                    <?php                       }
					
										}
					?>
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
	 $post_doctor = $_POST['doctorname'];
	 $post_dept= $_POST['ddl_dept'];
	 $post_city = $_POST['city'];
	 $chamberAddress= $_POST['chamberAddress'];
	 
	 
	 $post_docphone = $_POST['docphone'];
	 $post_docMobile= $_POST['docMobile'];
	 
	 $docexperience=$_POST['docexperience'];
	 
	 $ddl_company = $_POST['ddl_company'];
	 $ddl_branch= $_POST['ddl_branch'];
	 
	 $post_image= $_FILES['image']['name'];
	 $image_tmp= $_FILES['image']['tmp_name'];
	 
	 
if($post_doctor==''  &&  $post_type==''){
	
	echo "<script>alert('Any of the fields is empty')</script>";
	exit();
	} else {
		
	    //move_uploaded_file($image_tmp,"../department/$post_image");
		$uploaddir = 'C:/xampp/htdocs/mydoctor/admin/department/';
        $uploadfile = $uploaddir . basename($_FILES['image']['name']);
		move_uploaded_file($_FILES['image']['tmp_name'], $uploadfile);
		
		$insert_query = "insert into doctor_info(doctor_id,doctor_name,company_id,branch_id,d_dept_id,d_address,doctor_phone,d_mobile,doctor_eperience,city,d_image) values ('','$post_doctor','$ddl_company','$ddl_branch','$post_dept','$chamberAddress','$post_docphone','$post_docMobile','$docexperience','$post_city','$post_image')";
		mysqli_query($conn,$insert_query);
	
		}
		
	if($insert_query !=''){
	
	echo "<script>alert('post published successfuly')</script>";
	 echo "<script>window.open('doctor_info.php','_self')</script>";
	//header("location: home.php");
	}

}
?>
<?php  ?>
