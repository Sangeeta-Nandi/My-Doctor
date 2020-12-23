<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Images Admin</title>
<link href="CSS/bootstrap.min.css" rel="stylesheet" type="text/css">
<!--<link href="CSS/bootstrap-theme.min.css" rel="stylesheet" type="text/css">-->
<!--<link href="CSS/customcss.css" rel="stylesheet" type="text/css">-->
<link href="CSS/img_popup.css" rel="stylesheet" type="text/css">
<!--<script src="http://code.jquery.com/jquery-2.1.4.min.js"></script>-->
   
   <script src="jquery/jquery.js"></script>
 <script src="jquery/bootstrap-hover-dropdown.js"></script>
 <script src="js/bootstrap.min.js"></script>

</head>

<body>
		<div id="header">
        <div class="row" style="margin-top:0px;">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <img width="100%" height="150px" src="image/1281189452_web.jpeg"/>
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
                <ul class="nav navbar-nav nav">
                    <li><a href="index.php"><i class="fa fa-home fa-lg"></i>&nbsp; Home</a></li>
                    <li class="dropdown">
                        <a aria-expanded="false" href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="100" data-close-others="false">About Us<b class="caret"></b></a>
                      <ul class="dropdown-menu">
                      	<li><a href="about.php">About Us</a></li>
                         <li class="divider"></li>
                        <li><a href="history.php">College History</a></li>
                        <li class="divider"></li>
                        <li class=""><a href="photogallery.php">Photo Gallery</a></li>
                      </ul>  
                    </li>

                    <li class="dropdown">
                        <a aria-expanded="false" href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="100" data-close-others="false">Academic<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <!--<li><a href="#">Teachers Information</a></li>
                            <li class="divider"></li>
                            <li><a href="#">Student Information</a></li>
                            <li class="divider"></li>-->
                            <li><a href="holiday.php">Holiday  Calendar</a></li>
                            <li class="divider"></li>
                            <li><a href="academic.php">Academic Calendar</a></li>
                            <li class="divider"></li>
                            <li><a href="rules.php">Rules &amp; Regulation</a></li>
                            <li class="divider"></li>
                            <li><a href="class_routine.php">Class Routine</a></li>
                            <li class="divider"></li>
                           <!-- <li><a href="#">Examination Routine</a></li>
                            <li class="divider"></li>
                            <li><a href="#">3rd &amp; 4th Class Employee Information</a></li>-->
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a aria-expanded="false" href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="100" data-close-others="false">Department<b class="caret"></b></a>
                        <!--<ul class="dropdown-menu">
                                                                <li><a href="#">Accounting</a></li>
                                    <li class="divider"></li>
                                                                    <li><a href="#">Arabic and Islamic Studies</a></li>
                                    <li class="divider"></li>
                                                                    <li><a href="#">Bangla</a></li>
                                    <li class="divider"></li>
                                                                    <li><a href="#">Botany</a></li>
                                    <li class="divider"></li>
                                                                    <li><a href="#">Chemistry</a></li>
                                    <li class="divider"></li>
                                                                    <li><a href="#">Economics</a></li>
                                    <li class="divider"></li>
                                                                    <li><a href="#">English</a></li>
                                    <li class="divider"></li>
                                                                    <li><a href="#">Geography</a></li>
                                    <li class="divider"></li>
                                                                    <li><a href="#">History</a></li>
                                    <li class="divider"></li>
                                                                    <li><a href="#">HSC -Science</a></li>
                                    <li class="divider"></li>
                                                                    <li><a href="#">HSC-Business Studies</a></li>
                                    <li class="divider"></li>
                                                                    <li><a href="#">HSC-Humanities</a></li>
                                    <li class="divider"></li>
                                                                    <li><a href="#">Islamic History and Culture</a></li>
                                    <li class="divider"></li>
                                                                    <li><a href="#">Management</a></li>
                                    <li class="divider"></li>
                                                                    <li><a href="#">Mathematics</a></li>
                                    <li class="divider"></li>
                                                                    <li><a href="#">Philosophy</a></li>
                                    <li class="divider"></li>
                                                                    <li><a href="#">Physics</a></li>
                                    <li class="divider"></li>
                                                                    <li><a href="#">Political Science</a></li>
                                    <li class="divider"></li>
                                                                    <li><a href="#">Psychology</a></li>
                                    <li class="divider"></li>
                                                                    <li><a href="#">Sociology</a></li>
                                    <li class="divider"></li>
                                                                    <li><a href="#">Statistics</a></li>
                                    <li class="divider"></li>
                                                                    <li><a href="#">Zoology</a></li>
                                    <li class="divider"></li>
                                                        </ul>-->
                    </li>
                    <li class="dropdown"><a aria-expanded="false" href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="100" data-close-others="false">Faculty &#38; Students<b class="caret"></b></a>
                    		<ul class="dropdown-menu">
                            	<li><a href="teachers_info.php">Teachers Information</a></li>
                                <li class="divider"></li>
                                <li><a href="employee_info.php">Employees Information</a></li>
                                <li class="divider"></li>
                                <li><a href="student_info.php">Students Information</a></li>
                            </ul></li>
                    <li class="dropdown">
                        <a aria-expanded="false" href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="100" data-close-others="false">Facilities<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                                <!--<li><a href="#">Hostel</a></li>-->
                                	<li><a href="facilities.php">College Facilities</a></li>
                                    <li class="divider"></li>
                                    <!--<li><a href="#">Library</a></li>-->
                                   <!-- <li class="divider"></li>-->
                                    <li><a href="multimedia_classroom.php">Multimedia Classroom</a></li>
                                    <li class="divider"></li>
                                     <li><a href="library_info.php">Library Information </a></li>
                                                        </ul>
                    </li>

                    <li class=""><a href="notice.php">Notice</a></li>
                    <!--<li class=""><a href="#">Events</a></li>-->
                    <li><a href="admission.php">Admission</a></li>
                       <!-- <a aria-expanded="false" href="admission.php" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="100" data-close-others="false">Admission<b class="caret"></b></a>-->
                       <!-- <ul class="dropdown-menu">
                                                                <li><a href="#">Accounting</a></li>
                                    <li class="divider"></li>
                                                                    <li><a href="#">Arabic and Islamic Studies</a></li>
                                    <li class="divider"></li>
                                                                    <li><a href="#">Bangla</a></li>
                                    <li class="divider"></li>
                                                                    <li><a href="#">Botany</a></li>
                                    <li class="divider"></li>
                                                                    <li><a href="#">Chemistry</a></li>
                                    <li class="divider"></li>
                                                                    <li><a href="#">Economics</a></li>
                                    <li class="divider"></li>
                                                                    <li><a href="#">English</a></li>
                                    <li class="divider"></li>
                                                                    <li><a href="#">Geography</a></li>
                                    <li class="divider"></li>
                                                                    <li><a href="#">History</a></li>
                                    <li class="divider"></li>
                                                                    <li><a href="#">HSC -Science</a></li>
                                    <li class="divider"></li>
                                                                    <li><a href="#">HSC-Business Studies</a></li>
                                    <li class="divider"></li>
                                                                    <li><a href="#">HSC-Humanities</a></li>
                                    <li class="divider"></li>
                                                                    <li><a href="#">Islamic History and Culture</a></li>
                                    <li class="divider"></li>
                                                                    <li><a href="#">Management</a></li>
                                    <li class="divider"></li>
                                                                    <li><a href="#">Mathematics</a></li>
                                    <li class="divider"></li>
                                                                    <li><a href="#">Philosophy</a></li>
                                    <li class="divider"></li>
                                                                    <li><a href="#">Physics</a></li>
                                    <li class="divider"></li>
                                                                    <li><a href="#">Political Science</a></li>
                                    <li class="divider"></li>
                                                                    <li><a href="#">Psychology</a></li>
                                    <li class="divider"></li>
                                                                    <li><a href="#">Sociology</a></li>
                                    <li class="divider"></li>
                                                                    <li><a href="#">Statistics</a></li>
                                    <li class="divider"></li>
                                                                    <li><a href="#">Zoology</a></li>
                                    <li class="divider"></li>
                                                        </ul>-->
                    
                    <li class=""><a href="results.php">Result</a></li>
                    <li class="dropdown">
                        <a aria-expanded="false" href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="100" data-close-others="false">Archive<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Ex. Teacher List</a></li>
                            <li class="divider"></li>
                            <li><a href="#">Ex. Student List</a></li>
                            <li class="divider"></li>
                            <li><a href="#">Magazine</a></li>
                            <li class="divider"></li>
                            <li><a href="#">Add Teacher</a></li>
                            <li class="divider"></li>
                            <li><a href="#">Add Student</a></li>
                        </ul>
                    </li>
                     
                    <li class=""><a href="contact.php">Contact</a></li>
                </ul>
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
                            	<form class="form-horizontal">
                                      <div class="form-group">
                                        <label for="inputEmail3" class="col-sm-4 control-label">Post Title</label>
                                        <div class="col-sm-6">
                                          <input type="text" class="form-control" id="inputEmail3" placeholder="Post title">
                                        </div>
                                      </div>
                                       <div class="form-group">
                                        <label for="inputPassword3" class="col-sm-4 control-label">Post</label>
                                        <div class="col-sm-3">
                                          <select class="form-control">
                                              <option>Select New Option</option>
                                              <option>Slider</option>
                                              <option>Photo Gallery</option>
                                              <option>Marquee-Slider</option>
                                            </select>
                                        </div>
                                      </div>
                                      <div class="form-group">
                                        <label for="inputImage" class="col-sm-4 control-label">Post Image</label>
                                        <div class="col-sm-6">
                                           <input type="file" id="exampleInputFile">
                                        </div>
                                      </div>
                                      <!--<div class="form-group">
                                        <label for="inputEmail3" class="col-sm-4 control-label">Full Name</label>
                                        <div class="col-sm-6">
                                          <input type="text" class="form-control" id="inputEmail3" placeholder="Type your name....">
                                        </div>
                                      </div>-->
                                     <!-- <div class="form-group">
                                        <label for="inputPassword3" class="col-sm-4 control-label">Father/Husband Name</label>
                                        <div class="col-sm-6">
                                          <input type="text" class="form-control" id="inputPassword3" placeholder="Type your father/husband name....">
                                        </div>
                                      </div>-->
                                       <!--<div class="form-group">
                                        <label for="inputEmail3" class="col-sm-4 control-label">Mother Name</label>
                                        <div class="col-sm-6">
                                          <input type="text" class="form-control" id="inputEmail3" placeholder="Type your mother name....">
                                        </div>
                                      </div>-->
                                     <!-- <div class="form-group">
                                        <label for="inputPassword3" class="col-sm-4 control-label">Birth Date</label>
                                        <div class="col-sm-2">
                                           <select class="form-control">
<option>Date</option><option>01</option><option>02</option><option>03</option><option>04</option><option>05</option><option>06</option><option>07</option>
<option>08</option><option>09</option><option>10</option><option>11</option><option>12</option><option>13</option><option>14</option><option>15</option>
<option>16</option><option>17</option><option>18</option><option>19</option><option>20</option><option>21</option><option>22</option><option>23</option>
<option>24</option><option>25</option><option>26</option><option>26</option><option>27</option><option>28</option><option>29</option><option>30</option>
<option>31</option>
                                            </select>
                                        </div>
                                         <div class="col-sm-2">
                                           <select class="form-control">
<option>Month</option><option>01</option><option>02</option><option>03</option><option>04</option><option>05</option><option>06</option><option>07</option>
<option>08</option><option>09</option><option>10</option><option>11</option><option>12</option>
                                            </select>
                                        </div>
                                         <div class="col-sm-2">
                                           <select class="form-control">
 <option>Years</option><option>2015</option><option>2014</option><option>2013</option><option>2011</option><option>2010</option><option>2009</option>
 <option>2008</option><option>2007</option><option>2006</option><option>2005</option><option>2004</option><option>2003</option><option>2002</option>
 <option>2001</option><option>2000</option><option>1999</option><option>1998</option><option>1997</option><option>1996</option><option>1995</option>
 <option>1994</option><option>1993</option><option>1992</option><option>1991</option><option>1990</option><option>1989</option><option>1988</option>
 <option>1987</option><option>1986</option><option>1985</option><option>1984</option><option>1983</option><option>1982</option><option>1981</option>
 <option>1980</option><option>1979</option><option>1978</option><option>1977</option><option>1976</option><option>1975</option><option>1974</option>
 <option>1973</option><option>1972</option><option>1971</option><option>1970</option>
                                              
                                            </select>
                                        </div>
                                      </div>-->
                                      <!--<div class="form-group">
                                        <label for="inputEmail3" class="col-sm-4 control-label">Gender</label>
                                        <div class="col-sm-6">
                                          <input type="text" class="form-control" id="inputEmail3" placeholder="Type your gender....">
                                        </div>
                                      </div>-->
                                     <!-- <div class="form-group">
                                        <label for="inputPassword3" class="col-sm-4 control-label">Religion</label>
                                        <div class="col-sm-6">
                                          <input type="text" class="form-control" id="inputPassword3" placeholder="Type your religion....">
                                        </div>
                                      </div>-->
                                       <!--<div class="form-group">
                                        <label for="inputPassword3" class="col-sm-4 control-label">Post Author</label>
                                        <div class="col-sm-6">
                                          <input type="text" class="form-control" id="inputPassword3" placeholder="Type post author....">
                                        </div>
                                      </div>-->
                                      <!--<div class="form-group">
                                        <label for="inputPassword3" class="col-sm-4 control-label">Post Image</label>
                                        <div class="col-sm-6">
                                           <input type="file" id="exampleInputFile">
                                        </div>
                                      </div>-->
                                     <!-- <div class="form-group">
                                        <label for="inputPassword3" class="col-sm-4 control-label">Post</label>
                                        <div class="col-sm-3">
                                          <select class="form-control">
                                              <option>Select New Option</option>
                                              <option>Slider</option>
                                              <option>Photo Gallery</option>
                                              <option>Marquee-Slider</option>
                                            </select>
                                        </div>
                                      </div>-->
                                      <div class="form-group">
                                        <div class="col-sm-6 col-sm-offset-4">
                                          <button type="submit" class="btn btn-default">Submit</button>
                                        </div>
                                      </div>
                                    </form>
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
</body>
</html>