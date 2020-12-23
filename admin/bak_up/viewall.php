<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Processing</title>
<link href="CSS/bootstrap.min.css" rel="stylesheet" type="text/css">
<!--<link href="CSS/bootstrap-theme.min.css" rel="stylesheet" type="text/css">
<link href="CSS/customcss.css" rel="stylesheet" type="text/css">-->
<!--<script src="http://code.jquery.com/jquery-2.1.4.min.js"></script>-->
  
   <script src="jquery/jquery.js"></script>
 <script src="jquery/bootstrap-hover-dropdown.js"></script>
  <script src="js/bootstrap.min.js"></script>
<!--<style>
          	  
    .dropdown:hover .dropdown-menu {
    display: block;
 }
 
.dropdown-menu > li > a:hover, .dropdown-menu > li > a:focus {
            background-image:none !important;
        }
        .dropdown-menu > li > a:hover, .dropdown-menu > li > a:focus {
            background-color:#297233;color:#FFF;
        }
    .navbar-default .navbar-nav .open .dropdown-menu > li > a:hover,
    .navbar-default .navbar-nav .open .dropdown-menu > li > a:visited {
        background-color:#297233;
    }
	/*.menu_hover ul a.active {background-color:#D42828;}*/
	.menu_hover ul li:hover a{background-color:#297233;}
 </style>--> 
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
          <?php include("include/banner.php") ?></div>

<div class="container-fluid">
      <div class="row">
      <?php include("include/navMenu.php") ?>
        	<!--Header End-->
</div> 
<div class="row">
<div class="col-lg-9 col-md-9 col-sm-9 col-xs-12 left_con"><!-- left Content Start--> 
<div class="row principal_msg"> <!-- Principal Massage Start-->
                <div class="col-md-12">
                    <div class="panel panel-primary">
                                                    <div style="font-weight: bold; font-size: 18px;" class="panel-heading">Visa Processing Fees</div>
                            <div class="panel-body table-responsive">
                             <table class="table">
                                
                                <tr style="background: #02204d none repeat scroll 0 0; color: #fff;">
								    <td><strong>Title</strong></td>
                                    <td><strong>Edit</strong></td>
                                     <td><strong>Delete</strong></td>
                                    
                                </tr> 
								<tr></tr>
								 <?php  
							   include("include/connect.php");
							   $view_priciple_msg_query=mysql_query("select * from visa_processing order by id DESC LIMIT 50");
							  while( $row = mysql_fetch_array($view_priciple_msg_query)){
							    
								$country = $row['country'];
								$fees = $row['processing_fee'];
								$charge = $row['charge'];
								$processing_days = $row['processing_days'];
								?>
                                <tr>
								    <td><?php echo $country; ?></td>
                                    <td><a>Edit</a></td>
                                    <td>Delete</td>
                                    
                                </tr>
								
							  <?php } ?>				                                
                           
                             <!--  <tr>
                                    <td>সংরক্ষিক মহিলা অভিভাবক সদস্য:</td>
                                    <td><?php //echo $bof; ?></td>
                                </tr>
								
                                <tr>
                                    <td>শিক্ষক প্রতিনিধি:</td>
                                    <td><?php //echo $gender; ?></td>
									
                                </tr>
								<tr></tr>
                                <tr>
                                    <td>শিক্ষক প্রতিনিধি:</td>
                                    <td><?php //echo $Religion; ?></td>
                                </tr>-->
							
                                                              
                            </table>
							 <div></div><div></div><div></div>
                              
                            </div>
                            
                    </div>
                </div>
            </div>
</div>
<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 right_con" style="margin-top:0px;"><!-- Right Content Start-->
        <?php include("include/right_panel.php"); ?>
        </div><!--End Right Pannel-->
</div>
</div>
<!--container-fluid End-->
<div class="row footer" style="background-color:#1E5225;">
	 <?php include("include/footer.php") ?>
</div>

</body>
</html>