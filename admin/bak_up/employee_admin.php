<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Employee Admin</title>
<link href="../CSS/bootstrap.min.css" rel="stylesheet" type="text/css">
<!--<link href="CSS/bootstrap-theme.min.css" rel="stylesheet" type="text/css">-->
<!--<link href="CSS/customcss.css" rel="stylesheet" type="text/css">-->
<link href="../CSS/img_popup.css" rel="stylesheet" type="text/css">
<!--<script src="http://code.jquery.com/jquery-2.1.4.min.js"></script>-->
   
   <script src="../jquery/jquery.js"></script>
 <script src="../jquery/bootstrap-hover-dropdown.js"></script>
 <script src="../js/bootstrap.min.js"></script>
<style>
	/*.footer{
		background-color:#202020;
		
		}*/
	.footer div > p {
		/*color:#BFBFBF;*/
		text-align:center;
		margin-top:10px;}	
</style> 
</head>

<body>
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
                        <div style="font-weight: bold; font-size: 18px;" class="panel-heading">Employee's Admin Panel</div>
                        <div class="panel-body">
							<!--table-->
                            <div>
                            	<form class="form-horizontal">
                                    <!--  <div class="form-group">
                                        <label for="inputEmail3" class="col-sm-4 control-label">Post Title</label>
                                        <div class="col-sm-6">
                                          <input type="text" class="form-control" id="inputEmail3" placeholder="Post title">
                                        </div>
                                      </div>-->
                                      <div class="form-group">
                                        <label for="inputPassword3" class="col-sm-4 control-label">ID NO</label>
                                        <div class="col-sm-6">
                                          <input type="number" class="form-control" id="inputPassword3" placeholder="Number">
                                        </div>
                                      </div>
                                      <div class="form-group">
                                        <label for="inputEmail3" class="col-sm-4 control-label">Full Name</label>
                                        <div class="col-sm-6">
                                          <input type="text" class="form-control" id="inputEmail3" placeholder="Type your name....">
                                        </div>
                                      </div>
                                      <div class="form-group">
                                        <label for="inputPassword3" class="col-sm-4 control-label">Father/Husband Name</label>
                                        <div class="col-sm-6">
                                          <input type="text" class="form-control" id="inputPassword3" placeholder="Type your father/husband name....">
                                        </div>
                                      </div>
                                       <div class="form-group">
                                        <label for="inputEmail3" class="col-sm-4 control-label">Mother Name</label>
                                        <div class="col-sm-6">
                                          <input type="text" class="form-control" id="inputEmail3" placeholder="Type your mother name....">
                                        </div>
                                      </div>
                                      <div class="form-group">
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
                                      </div>
                                      <div class="form-group">
                                        <label for="inputEmail3" class="col-sm-4 control-label">Gender</label>
                                        <div class="col-sm-3">
                                           <select class="form-control">
                                              <option>Select Gender Option</option>
                                              <option>Male</option>
                                              <option>Female</option></select>
                                        </div>
                                      </div>
                                      <div class="form-group">
                                        <label for="inputPassword3" class="col-sm-4 control-label">Religion</label>
                                        <div class="col-sm-6">
                                          <input type="text" class="form-control" id="inputPassword3" placeholder="Type your religion....">
                                        </div>
                                      </div>
                                      
                                      <div class="form-group">
                                        <label for="inputPassword3" class="col-sm-4 control-label">Profile Picture</label>
                                        <div class="col-sm-6">
                                           <input type="file" id="exampleInputFile">
                                        </div>
                                      </div>
                                      <div class="form-group">
                                        <label for="inputPassword3" class="col-sm-4 control-label">Item</label>
                                        <div class="col-sm-3">
                                          <select class="form-control">
                                              <option>Select New Option</option>
                                              <option>2</option>
                                              <option>3</option>
                                              <option>4</option>
                                              <option>5</option>
                                            </select>
                                        </div>
                                      </div>
                                       <div class="form-group">
                                        <label for="inputPassword3" class="col-sm-4 control-label">Post Author</label>
                                        <div class="col-sm-6">
                                          <input type="text" class="form-control" id="inputPassword3" placeholder="Type post author....">
                                        </div>
                                      </div>
                                      <div class="form-group">
                                        <div class="col-sm-6 col-sm-offset-6">
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