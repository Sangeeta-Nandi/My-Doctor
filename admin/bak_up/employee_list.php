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
<title>Teacher's Admin</title>
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
<form class="form-horizontal" action="employee_list.php" method="post" enctype="multipart/form-data" accept-charset="utf-8">
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
                        <div style="font-weight: bold; font-size: 18px;" class="panel-heading">Employees Admin Panel</div>
                        <div class="panel-body">
							<!--table-->
                            <div>
                            	
                                     
                                      <div class="form-group">
                                        <label for="inputPassword3" class="col-sm-4 control-label">ID NO</label>
                                        <div class="col-sm-6">
                                          <input required type="text" name="id" class="form-control" id="inputPassword3" placeholder="Number">
                                        </div>
                                      </div>
                                      <div class="form-group">
                                        <label for="inputEmail3" class="col-sm-4 control-label">Full Name</label>
                                        <div class="col-sm-6">
                                          <input required type="text" name="name" class="form-control" id="inputEmail3" placeholder="Type your name....">
                                        </div>
                                      </div>
                                      <div class="form-group">
                                        <label for="inputPassword3" class="col-sm-4 control-label">Father/Husband Name</label>
                                        <div class="col-sm-6">
                                          <input required type="text" name="gardian" class="form-control" id="inputPassword3" placeholder="Type your father/husband name....">
                                        </div>
                                      </div>
                                       <div class="form-group">
                                        <label for="inputEmail3" class="col-sm-4 control-label">Mother Name</label>
                                        <div class="col-sm-6">
                                          <input required type="text" name="mother" class="form-control" id="inputEmail3" placeholder="Type your mother name....">
                                        </div>
                                      </div>
                                      <div class="form-group">
                                        <label for="inputPassword3" class="col-sm-4 control-label">Birth Date</label>
                                        <div class="col-sm-2">
                                       
                                           <select class="form-control" name="day" required>
<option>Date</option><option value="01">01</option><option value="02">02</option><option value="03">03</option><option value="04">04</option><option value="05">05</option><option value="06">06</option><option value="07">07</option>
<option value="08">08</option><option value="09">09</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option>
<option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option>
<option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option><option value="28">28</option><option value="29">29</option><option value="30">30</option>
<option value="31">31</option>
                                            </select>
                                        </div>
                                         <div class="col-sm-2">
                                           <select class="form-control" name="month" required>
<option>Month</option><option value="01">01</option><option value="02">02</option><option value="03">03</option><option value="04">04</option><option value="05">05</option><option value="06">06</option><option value="07">07</option>
<option value="08">08</option><option value="09">09</option><option value="10">10</option><option value="11">11</option><option value="12">12</option>
                                            </select>
                                        </div>
                                         <div class="col-sm-2">
                                           <select class="form-control" name="year" required>
 <option>Years</option><option value="2015">2015</option><option value="2014">2014</option><option value="2013">2013</option><option value="2012">2012</option><option value="2011">2011</option><option value="2010">2010</option><option value="2009">2009</option>
 <option value="2008">2008</option><option value="2007">2007</option><option value="2006">2006</option><option value="2005">2005</option><option value="2004">2004</option><option value="2003">2003</option><option value="2002">2002</option>
 <option value="2001">2001</option><option value="2000">2000</option><option value="1999">1999</option><option value="1998">1998</option><option value="1997">1997</option><option value="1996">1996</option><option value="1995">1995</option>
 <option value="1994">1994</option><option value="1993">1993</option><option value="1992">1992</option><option value="1991">1991</option><option value="1990">1990</option><option value="1989">1989</option><option value="1988">1988</option>
 <option value="1987">1987</option><option value="1986">1986</option><option value="1985">1985</option><option value="1984">1984</option><option value="1983">1983</option><option value="1982">1982</option><option value="1981">1981</option>
 <option value="1980">1980</option><option value="1979">1979</option><option value="1978">1978</option><option value="1977">1977</option><option value="1976">1976</option><option value="1975">1975</option><option value="1974">1974</option>
 <option value="1973">1973</option><option value="1972">1972</option><option value="1971">1971</option><option value="1970">1970</option>
 <option value="1969">1969</option><option value="1968">1968</option><option value="1967">1967</option><option value="1966">1966</option><option value="1965">1965</option><option value="1964">1964</option>
 <option value="1963">1963</option><option value="1962">1962</option><option value="1961">1961</option><option value="1960">1960</option>
                                              
                                            </select>
                                        </div>
                                      </div>
                                      <div class="form-group">
                                        <label for="inputEmail3" class="col-sm-4 control-label">Gender</label>
                                        <div class="col-sm-3">
                                           <select class="form-control" name="gender" required>
                                              <option>Select Gender Option</option>
                                              <option value="male">Male</option>
                                              <option value="female">Female</option></select>
                                        </div>
                                      </div>
                                      <div class="form-group">
                                        <label for="inputPassword3" class="col-sm-4 control-label">Religion</label>
                                        <div class="col-sm-6">
                                          <input required type="text" name="religion" class="form-control" id="inputPassword3" placeholder="Type your religion....">
                                        </div>
                                      </div>
                                      
                                      <div class="form-group">
                                        <label for="inputPassword3" class="col-sm-4 control-label">Profile Picture</label>
                                        <div class="col-sm-6">
                                           <input type="file" name="image" id="exampleInputFile">
                                        </div>
                                      </div>
                                      <!--<div class="form-group">
                                        <label for="inputPassword3" class="col-sm-4 control-label">Teacher Status</label>
                                        <div class="col-sm-4">
                                          <select class="form-control" name="status" required>
                                              <option>Select New Option</option>
                                              <option value="running">Running</option>
                                              <option value="ex.teacher">Ex. Employee</option>
                                              <option>Empolyees</option>
                                            </select>
                                        </div>-->
                                      </div>
                                      <!-- <div class="form-group">
                                        <label for="inputEmail3" class="col-sm-4 control-label">Subject</label>
                                        <div class="col-sm-6">
                                          <input required type="text" name="subject" class="form-control" id="inputEmail3" placeholder="Teacher's Subject">
                                        </div>
                                      </div>-->
                                       <div class="form-group">
                                        <label for="inputPassword3" class="col-sm-4 control-label">Designation:</label>
                                        <div class="col-sm-4">
                                          <select class="form-control" name="designation" required>
                                              <option>Select Designation</option>
                                              <option value="2">2nd Class</option>
                                              <option value="3">3rd Class</option>
                                              <option value="4">4th Class</option>
                                              
                                            </select>
                                        </div>
                                      </div>
                                       <div class="form-group">
                                        <label for="inputPassword3" class="col-sm-4 control-label">BloodGroup:</label>
                                        <div class="col-sm-6">
                                          <input name="blood" type="text" class="form-control" id="inputPassword3" placeholder="Type post author....">
                                        </div>
                                      </div>
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
         $id = $_POST['id'];
		 $name = $_POST['name'];
		 $gardian = $_POST['gardian'];
		 $mother = $_POST['mother'];
		 $day = $_POST['day'];
		 $month = $_POST['month'];
		 $year = $_POST['year'];
		 $bof = $day."/".$month."/".$year;
		 $gender = $_POST['gender'];
		 $religion = $_POST['religion'];
		 
		 $status = $_POST['designation'];
		 $blood = $_POST['blood'];
		 $post_image= $_FILES['image']['name'];
	     $image_tmp= $_FILES['image']['tmp_name'];
		 $Designation = $_POST['designation'];
		 //echo $bof;
		 $date = date("Y-m-d");
		 move_uploaded_file($image_tmp,"../news_file/$post_image");
		 $insert_query="INSERT INTO `tbl_employee`(`id`, `FullName`, `FatherName`, `MotherName`, `BirthDate`, `Gender`, `Religion`, `BloodGroup`, `usertype`, `picture`, `date`)
		  VALUES ('$id','$name','$gardian','$mother','$bof','$gender','$religion','$blood','$status','$post_image','$date')";
		 mysql_query($insert_query);
		if($insert_query !=''){
	
	echo "<script>alert('post published successfuly')</script>";
	//header("location: home.php");
	}
}
 ?>
<?php } ?>