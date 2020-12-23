<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Teacher's Admin</title>
<link href="../CSS/bootstrap.min.css" rel="stylesheet" type="text/css">
<!--<link href="CSS/bootstrap-theme.min.css" rel="stylesheet" type="text/css">-->
<!--<link href="CSS/customcss.css" rel="stylesheet" type="text/css">-->
<link href="../CSS/img_popup.css" rel="stylesheet" type="text/css">
<!--<script src="http://code.jquery.com/jquery-2.1.4.min.js"></script>-->
   
   <script src="../jquery/jquery.js"></script>
 <script src="../jquery/bootstrap-hover-dropdown.js"></script>
 <script src="../js/bootstrap.min.js"></script>
 <script type="text/javascript">

       $(document).ready(function(){

            $("select").change(function(){

                $( "select option:selected").each(function(){

                    if($(this).attr("value")=="6" || $(this).attr("value")=="7" || $(this).attr("value")=="8" || $(this).attr("value")=="null"){

                        $(".box").hide();

                        $(".6").show();
						$(".7").show();
						$(".8").show();

                    }


                    if($(this).attr("value")=="9" || $(this).attr("value")=="10" || $(this).attr("value")=="11" || $(this).attr("value")=="12"){

                        $(".box").hide();

                        $(".driver").show();

                    }

                });

            }).change();

        });

    </script>

<style>
    	a:active, a:focus, a:hover{
			outline: 0;
			} 
    </style>
</head>

<body>
<form method="post" action="" enctype="multipart/form-data" accept-charset="utf-8">
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
                        <div style="font-weight: bold; font-size: 18px; text-align:center;" class="panel-heading">Admin Panel</div>
                        <div class="panel-body">
							<!--table-->
                            <div class="container-fluid">
                            <div class="row">
                            	<div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2">
                                	<div class="row">
                                    	<div class="col-lg-6  col-md-6  col-sm-6 col-xs-12">
                                        	
                                      <div class="form-group">
                                        <label for="exampleInputName2">Class:</label>
                                       <select class="form-control" name="class" required>
                  						<option value="null">Set Class</option>
                                        <option value="6">Class-VI</option>
                                        <option value="7">Class-VII</option>
                                        <option value="8">ClassVIII</option>
                  						<option value="9">Class-IX</option>
                                        <option value="10">Class-X</option>
                                        <option value="11">Class-XI</option>
                                        <option value="12">Class-XII</option>
                                       </select>
                                      </div>
                                        </div>
                                        
                                       
                            
                                        <div class="col-lg-5 col-lg-offset-0 col-md-5 col-md-offset-0 col-sm-6 col-xs-12">
                                        	
                                      <div class="form-group">
                                        <label for="exampleInputName2">Day:</label>
                                       <select class="form-control" name="day" required>
                                        <option>Select Day</option>
                                        <option value="Saturday">Saturday</option>
                                        <option value="Sunday">Sunday</option>
                                        <option value="Monday">Monday</option>
                                        <option value="Tuesday">Tuesday</option>
                                        <option value="Wednesday">Wednesday</option>
                                        <option value="Thursday">Thursday</option>
                                       </select>
                                      </div>
                                        </div>
                                    </div><!--inner row end-->
                                    <div class="row" style="margin-top:10px;">
                                     <div class="col-lg-11 col-lg-offset-0 col-md-11 col-md-offset-0 col-sm-11 col-xs-12">
                                     
                                     <div class="driver box form-group">
                                     <select class="form-control" name="group">
                          			
                                    <option value="humanities">Humanities</option>

                                	<option value="science">Science</option>
                
                                	<option value="commerce">Commerce</option>
                
                                	</select>
                                    </div> 
                                    
                                    </div>
                                    </div>
                                    <div class="row" style="margin-top:10px;">
                                    	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                            
                                              <div class="form-group">
                                                <label for="exampleInputName2">Time Schedule-1:</label>
                                                
                                                <select class="form-control" name="time1" required>
                                           <option>Set Time</option>
                                           <option value="8:00 AM">8:00 AM</option>
                                           <option value="8:00 AM">8:15 AM</option>
                                           <option value="8:00 AM">8:30 AM</option>
                  			               <option value="8:00 AM">9:00 AM</option>
                                           <option value="8:00 AM">9:15 AM</option>
                                           <option value="8:00 AM">9:30 AM</option>
                                           <option value="8:00 AM">9:45 AM</option>
                                           <option value="8:00 AM">10:00 AM</option>
                                           <option value="8:00 AM">10:15 AM</option>
                  			               <option value="8:00 AM">10:30 AM</option>
                                           <option value="8:00 AM">10:45 AM</option>
                                           <option value="8:00 AM">11:00 AM</option>
                                           <option value="8:00 AM">11:15 AM</option>
                                           <option value="8:00 AM">11:30 AM</option>
                  			               <option value="8:00 AM">11:45 AM</option>
                                           <option value="8:00 AM">12:00 PM</option>
                                           <option value="8:00 AM">12:15 PM</option>
                                           <option value="8:00 AM">12:30 PM</option>
                                           <option value="8:00 AM">12:45 PM</option>
                                           <option value="8:00 AM">01:00 PM</option>
                                           <option value="8:00 AM">01:15 PM</option>
                                           <option value="8:00 AM">01:30 PM</option>
                                           <option value="8:00 AM">01:45 PM</option>
                                           <option value="8:00 AM">02:00 PM</option>
                                           <option value="8:00 AM">02:15 PM</option>
                                           <option value="8:00 AM">02:30 PM</option>
                                           <option value="8:00 AM">02:45 PM</option>
                                           <option value="8:00 AM">03:00 PM</option>
                                           <option value="8:00 AM">03:15 PM</option>
                                           <option value="8:00 AM">03:30 PM</option>
                                           <option value="8:00 AM">03:45 PM</option>
                                           <option value="8:00 AM">04:00 PM</option>
                                           <option value="04:15 PM">04:15 PM</option>
                                       </select>
                                              </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        	 
                                              <div class="form-group">
                                                <label for="exampleInputName2">Subject-1:</label>
                                                <input required type="text" name="sub1" class="form-control" id="exampleInputName2">
                                              </div>
                                        </div>
                                    </div><!--inner row end-->
                                    <div class="row" style="margin-top:10px;">
                                    	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                            
                                              <div class="form-group">
                                                <label for="exampleInputName2">Time Schedule-2:</label>
                                                <select class="form-control" name="time2" required>
                                           <option>Set Time</option>
                                           <option value="8:00 AM">8:00 AM</option>
                                           <option value="8:15 AM">8:15 AM</option>
                                           <option value="8:30 AM">8:30 AM</option>
                                           <option value="8:45 AM">8:45 AM</option>
                  			               <option value="9:00 AM">9:00 AM</option>
                                           <option value="9:15 AM">9:15 AM</option>
                                           <option value="9:30 AM">9:30 AM</option>
                                           <option value="9:45 AM">9:45 AM</option>
                                           <option value="10:00 AM">10:00 AM</option>
                                           <option value="10:15 AM">10:15 AM</option>
                  			               <option value="10:30 AM">10:30 AM</option>
                                           <option value="10:45 AM">10:45 AM</option>
                                           <option value="11:00 AM">11:00 AM</option>
                                           <option value="11:15 AM">11:15 AM</option>
                                           <option value="11:30 AM">11:30 AM</option>
                  			               <option value="11:45 AM">11:45 AM</option>
                                           <option value="12:00 PM">12:00 PM</option>
                                           <option value="12:15 PM">12:15 PM</option>
                                           <option value="12:30 PM">12:30 PM</option>
                                           <option value="12:45 PM">12:45 PM</option>
                                           <option value="01:00 PM">01:00 PM</option>
                                           <option value="01:15 PM">01:15 PM</option>
                                           <option value="01:30 PM">01:30 PM</option>
                                           <option value="01:45 PM">01:45 PM</option>
                                           <option value="02:00 PM">02:00 PM</option>
                                           <option value="02:15 PM">02:15 PM</option>
                                           <option value="02:30 PM">02:30 PM</option>
                                           <option value="02:45 PM">02:45 PM</option>
                                           <option value="03:00 PM">03:00 PM</option>
                                           <option value="03:15 PM">03:15 PM</option>
                                           <option value="03:30 PM">03:30 PM</option>
                                           <option value="03:45 PM">03:45 PM</option>
                                           <option value="04:00 PM">04:00 PM</option>
                                           <option value="04:15 PM">04:15 PM</option>
                                       </select>
                                              </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        	
                                              <div class="form-group">
                                                <label for="exampleInputName2">Subject-2:</label>
                                                <input required type="text" name="sub2" class="form-control" id="exampleInputName2">
                                              </div>
                                        </div>
                                    </div><!--inner row end-->
                                    <div class="row" style="margin-top:10px;">
                                    	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                           
                                              <div class="form-group">
                                                <label for="exampleInputName2">Time Schedule-3:</label>
                                                <select class="form-control" name="time3" required>
                                           <option>Set Time</option>
                                           <option value="8:00 AM">8:00 AM</option>
                                           <option value="8:15 AM">8:15 AM</option>
                                           <option value="8:30 AM">8:30 AM</option>
                                           <option value="8:45 AM">8:45 AM</option>
                  			               <option value="9:00 AM">9:00 AM</option>
                                           <option value="9:15 AM">9:15 AM</option>
                                           <option value="9:30 AM">9:30 AM</option>
                                           <option value="9:45 AM">9:45 AM</option>
                                           <option value="10:00 AM">10:00 AM</option>
                                           <option value="10:15 AM">10:15 AM</option>
                  			               <option value="10:30 AM">10:30 AM</option>
                                           <option value="10:45 AM">10:45 AM</option>
                                           <option value="11:00 AM">11:00 AM</option>
                                           <option value="11:15 AM">11:15 AM</option>
                                           <option value="11:30 AM">11:30 AM</option>
                  			               <option value="11:45 AM">11:45 AM</option>
                                           <option value="12:00 PM">12:00 PM</option>
                                           <option value="12:15 PM">12:15 PM</option>
                                           <option value="12:30 PM">12:30 PM</option>
                                           <option value="12:45 PM">12:45 PM</option>
                                           <option value="01:00 PM">01:00 PM</option>
                                           <option value="01:15 PM">01:15 PM</option>
                                           <option value="01:30 PM">01:30 PM</option>
                                           <option value="01:45 PM">01:45 PM</option>
                                           <option value="02:00 PM">02:00 PM</option>
                                           <option value="02:15 PM">02:15 PM</option>
                                           <option value="02:30 PM">02:30 PM</option>
                                           <option value="02:45 PM">02:45 PM</option>
                                           <option value="03:00 PM">03:00 PM</option>
                                           <option value="03:15 PM">03:15 PM</option>
                                           <option value="03:30 PM">03:30 PM</option>
                                           <option value="03:45 PM">03:45 PM</option>
                                           <option value="04:00 PM">04:00 PM</option>
                                           <option value="04:15 PM">04:15 PM</option>
                                       </select>
                                              </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        	 
                                              <div class="form-group">
                                                <label for="exampleInputName2">Subject-3:</label>
                                                <input required type="text" name="sub3" class="form-control" id="exampleInputName2">
                                              </div>
                                        </div>
                                    </div><!--inner row end-->
                                    <div class="row" style="margin-top:10px;">
                                    	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                            
                                              <div class="form-group">
                                                <label for="exampleInputName2">Time Schedule-4:</label>
                                               <select class="form-control" name="time4" required>
                                           <option>Set Time</option>
                                           <option value="8:00 AM">8:00 AM</option>
                                           <option value="8:15 AM">8:15 AM</option>
                                           <option value="8:30 AM">8:30 AM</option>
                                           <option value="8:45 AM">8:45 AM</option>
                  			               <option value="9:00 AM">9:00 AM</option>
                                           <option value="9:15 AM">9:15 AM</option>
                                           <option value="9:30 AM">9:30 AM</option>
                                           <option value="9:45 AM">9:45 AM</option>
                                           <option value="10:00 AM">10:00 AM</option>
                                           <option value="10:15 AM">10:15 AM</option>
                  			               <option value="10:30 AM">10:30 AM</option>
                                           <option value="10:45 AM">10:45 AM</option>
                                           <option value="11:00 AM">11:00 AM</option>
                                           <option value="11:15 AM">11:15 AM</option>
                                           <option value="11:30 AM">11:30 AM</option>
                  			               <option value="11:45 AM">11:45 AM</option>
                                           <option value="12:00 PM">12:00 PM</option>
                                           <option value="12:15 PM">12:15 PM</option>
                                           <option value="12:30 PM">12:30 PM</option>
                                           <option value="12:45 PM">12:45 PM</option>
                                           <option value="01:00 PM">01:00 PM</option>
                                           <option value="01:15 PM">01:15 PM</option>
                                           <option value="01:30 PM">01:30 PM</option>
                                           <option value="01:45 PM">01:45 PM</option>
                                           <option value="02:00 PM">02:00 PM</option>
                                           <option value="02:15 PM">02:15 PM</option>
                                           <option value="02:30 PM">02:30 PM</option>
                                           <option value="02:45 PM">02:45 PM</option>
                                           <option value="03:00 PM">03:00 PM</option>
                                           <option value="03:15 PM">03:15 PM</option>
                                           <option value="03:30 PM">03:30 PM</option>
                                           <option value="03:45 PM">03:45 PM</option>
                                           <option value="04:00 PM">04:00 PM</option>
                                           <option value="04:15 PM">04:15 PM</option>
                                       </select>
                                              </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        	
                                              <div class="form-group">
                                                <label for="exampleInputName2">Subject-4:</label>
                                                <input required type="text" name="sub4" class="form-control" id="exampleInputName2">
                                              </div>
                                        </div>
                                    </div><!--inner row end-->
                                    <div class="row" style="margin-top:10px;">
                                    	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                            
                                              <div class="form-group">
                                                <label for="exampleInputName2">Time Schedule-5:</label>
                                                <select class="form-control" name="time5">
                                           <option>Set Time</option>
                                           <option value="8:00 AM">8:00 AM</option>
                                           <option value="8:15 AM">8:15 AM</option>
                                           <option value="8:30 AM">8:30 AM</option>
                                           <option value="8:45 AM">8:45 AM</option>
                  			               <option value="9:00 AM">9:00 AM</option>
                                           <option value="9:15 AM">9:15 AM</option>
                                           <option value="9:30 AM">9:30 AM</option>
                                           <option value="9:45 AM">9:45 AM</option>
                                           <option value="10:00 AM">10:00 AM</option>
                                           <option value="10:15 AM">10:15 AM</option>
                  			               <option value="10:30 AM">10:30 AM</option>
                                           <option value="10:45 AM">10:45 AM</option>
                                           <option value="11:00 AM">11:00 AM</option>
                                           <option value="11:15 AM">11:15 AM</option>
                                           <option value="11:30 AM">11:30 AM</option>
                  			               <option value="11:45 AM">11:45 AM</option>
                                           <option value="12:00 PM">12:00 PM</option>
                                           <option value="12:15 PM">12:15 PM</option>
                                           <option value="12:30 PM">12:30 PM</option>
                                           <option value="12:45 PM">12:45 PM</option>
                                           <option value="01:00 PM">01:00 PM</option>
                                           <option value="01:15 PM">01:15 PM</option>
                                           <option value="01:30 PM">01:30 PM</option>
                                           <option value="01:45 PM">01:45 PM</option>
                                           <option value="02:00 PM">02:00 PM</option>
                                           <option value="02:15 PM">02:15 PM</option>
                                           <option value="02:30 PM">02:30 PM</option>
                                           <option value="02:45 PM">02:45 PM</option>
                                           <option value="03:00 PM">03:00 PM</option>
                                           <option value="03:15 PM">03:15 PM</option>
                                           <option value="03:30 PM">03:30 PM</option>
                                           <option value="03:45 PM">03:45 PM</option>
                                           <option value="04:00 PM">04:00 PM</option>
                                           <option value="04:15 PM">04:15 PM</option>
                                       </select>
                                              </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        	 
                                              <div class="form-group">
                                                <label for="exampleInputName2">Subject-5:</label>
                                                <input type="text" name="sub5" class="form-control" id="exampleInputName2">
                                              </div>
                                        </div>
                                    </div><!--inner row end-->
                                    <div class="row" style="margin-top:10px;">
                                    	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                            
                                              <div class="form-group">
                                                <label for="exampleInputName2">Time Schedule-6:</label>
                                               <select class="form-control" name="time6">
                                           <option>Set Time</option>
                                           <option value="8:00 AM">8:00 AM</option>
                                           <option value="8:15 AM">8:15 AM</option>
                                           <option value="8:30 AM">8:30 AM</option>
                                           <option value="8:45 AM">8:45 AM</option>
                  			               <option value="9:00 AM">9:00 AM</option>
                                           <option value="9:15 AM">9:15 AM</option>
                                           <option value="9:30 AM">9:30 AM</option>
                                           <option value="9:45 AM">9:45 AM</option>
                                           <option value="10:00 AM">10:00 AM</option>
                                           <option value="10:15 AM">10:15 AM</option>
                  			               <option value="10:30 AM">10:30 AM</option>
                                           <option value="10:45 AM">10:45 AM</option>
                                           <option value="11:00 AM">11:00 AM</option>
                                           <option value="11:15 AM">11:15 AM</option>
                                           <option value="11:30 AM">11:30 AM</option>
                  			               <option value="11:45 AM">11:45 AM</option>
                                           <option value="12:00 PM">12:00 PM</option>
                                           <option value="12:15 PM">12:15 PM</option>
                                           <option value="12:30 PM">12:30 PM</option>
                                           <option value="12:45 PM">12:45 PM</option>
                                           <option value="01:00 PM">01:00 PM</option>
                                           <option value="01:15 PM">01:15 PM</option>
                                           <option value="01:30 PM">01:30 PM</option>
                                           <option value="01:45 PM">01:45 PM</option>
                                           <option value="02:00 PM">02:00 PM</option>
                                           <option value="02:15 PM">02:15 PM</option>
                                           <option value="02:30 PM">02:30 PM</option>
                                           <option value="02:45 PM">02:45 PM</option>
                                           <option value="03:00 PM">03:00 PM</option>
                                           <option value="03:15 PM">03:15 PM</option>
                                           <option value="03:30 PM">03:30 PM</option>
                                           <option value="03:45 PM">03:45 PM</option>
                                           <option value="04:00 PM">04:00 PM</option>
                                           <option value="04:15 PM">04:15 PM</option>
                                       </select>
                                              </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        	 
                                              <div class="form-group">
                                                <label for="exampleInputName2">Subject-6:</label>
                                                <input type="text" name="sub6" class="form-control" id="exampleInputName2">
                                              </div>
                                        </div>
                                    </div><!--inner row end-->
                                    <div class="row" style="margin-top:10px;">
                                    	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                            
                                              <div class="form-group">
                                                <label for="exampleInputName2">Time Schedule-7:</label>
                                               <select class="form-control" name="time7">
                                           <option>Set Time</option>
                                           <option value="8:00 AM">8:00 AM</option>
                                           <option value="8:15 AM">8:15 AM</option>
                                           <option value="8:30 AM">8:30 AM</option>
                                           <option value="8:45 AM">8:45 AM</option>
                  			               <option value="9:00 AM">9:00 AM</option>
                                           <option value="9:15 AM">9:15 AM</option>
                                           <option value="9:30 AM">9:30 AM</option>
                                           <option value="9:45 AM">9:45 AM</option>
                                           <option value="10:00 AM">10:00 AM</option>
                                           <option value="10:15 AM">10:15 AM</option>
                  			               <option value="10:30 AM">10:30 AM</option>
                                           <option value="10:45 AM">10:45 AM</option>
                                           <option value="11:00 AM">11:00 AM</option>
                                           <option value="11:15 AM">11:15 AM</option>
                                           <option value="11:30 AM">11:30 AM</option>
                  			               <option value="11:45 AM">11:45 AM</option>
                                           <option value="12:00 PM">12:00 PM</option>
                                           <option value="12:15 PM">12:15 PM</option>
                                           <option value="12:30 PM">12:30 PM</option>
                                           <option value="12:45 PM">12:45 PM</option>
                                           <option value="01:00 PM">01:00 PM</option>
                                           <option value="01:15 PM">01:15 PM</option>
                                           <option value="01:30 PM">01:30 PM</option>
                                           <option value="01:45 PM">01:45 PM</option>
                                           <option value="02:00 PM">02:00 PM</option>
                                           <option value="02:15 PM">02:15 PM</option>
                                           <option value="02:30 PM">02:30 PM</option>
                                           <option value="02:45 PM">02:45 PM</option>
                                           <option value="03:00 PM">03:00 PM</option>
                                           <option value="03:15 PM">03:15 PM</option>
                                           <option value="03:30 PM">03:30 PM</option>
                                           <option value="03:45 PM">03:45 PM</option>
                                           <option value="04:00 PM">04:00 PM</option>
                                           <option value="04:15 PM">04:15 PM</option>
                                       </select>
                                              </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        	 
                                              <div class="form-group">
                                                <label for="exampleInputName2">Subject-7:</label>
                                                <input type="text" name="sub7" class="form-control" id="exampleInputName2">
                                              </div>
                                        </div>
                                    </div><!--inner row end-->
                                    <div class="row" style="margin-top:10px;">
                                    	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                            
                                              <div class="form-group">
                                                <label for="exampleInputName2">Time Schedule-8:</label>
                                                <select class="form-control" name="time8">
                                           <option>Set Time</option>
                                           <option value="8:00 AM">8:00 AM</option>
                                           <option value="8:15 AM">8:15 AM</option>
                                           <option value="8:30 AM">8:30 AM</option>
                                           <option value="8:45 AM">8:45 AM</option>
                  			               <option value="9:00 AM">9:00 AM</option>
                                           <option value="9:15 AM">9:15 AM</option>
                                           <option value="9:30 AM">9:30 AM</option>
                                           <option value="9:45 AM">9:45 AM</option>
                                           <option value="10:00 AM">10:00 AM</option>
                                           <option value="10:15 AM">10:15 AM</option>
                  			               <option value="10:30 AM">10:30 AM</option>
                                           <option value="10:45 AM">10:45 AM</option>
                                           <option value="11:00 AM">11:00 AM</option>
                                           <option value="11:15 AM">11:15 AM</option>
                                           <option value="11:30 AM">11:30 AM</option>
                  			               <option value="11:45 AM">11:45 AM</option>
                                           <option value="12:00 PM">12:00 PM</option>
                                           <option value="12:15 PM">12:15 PM</option>
                                           <option value="12:30 PM">12:30 PM</option>
                                           <option value="12:45 PM">12:45 PM</option>
                                           <option value="01:00 PM">01:00 PM</option>
                                           <option value="01:15 PM">01:15 PM</option>
                                           <option value="01:30 PM">01:30 PM</option>
                                           <option value="01:45 PM">01:45 PM</option>
                                           <option value="02:00 PM">02:00 PM</option>
                                           <option value="02:15 PM">02:15 PM</option>
                                           <option value="02:30 PM">02:30 PM</option>
                                           <option value="02:45 PM">02:45 PM</option>
                                           <option value="03:00 PM">03:00 PM</option>
                                           <option value="03:15 PM">03:15 PM</option>
                                           <option value="03:30 PM">03:30 PM</option>
                                           <option value="03:45 PM">03:45 PM</option>
                                           <option value="04:00 PM">04:00 PM</option>
                                           <option value="04:15 PM">04:15 PM</option>
                                       </select>
                                              </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        	 
                                              <div class="form-group">
                                                <label for="exampleInputName2">Subject-8:</label>
                                                <input type="text" name="sub8" class="form-control" id="exampleInputName2">
                                              </div>
                                        </div>
                                    </div>
                                    <div class="row" style="margin-top:10px;">
                                    	<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                           
                                              <div class="form-group">
                                                <label for="exampleInputName2">Shift:</label>
                                                <select class="form-control" name="shift" required>
                                           <option>Set Shift</option>
                                           <option value="Morning">Morning</option>
                                           <option value="Day">Day</option>
                                          
                                       </select>
                                              </div>
                                        </div>
                                        <div class="col-lg-4 col-lg-offset-2 col-md-4 col-md-offset-2 col-sm-6 col-xs-12">
                                        	 
                                              <div class="form-group">
                                                <label for="exampleInputName2">Section:</label>
                                                <select class="form-control" name="section">
                                           <option>Set Section</option>
                                           <option value="A">A</option>
                                           <option value="B">B</option>
                                           <option value="C">C</option>
                                           <option value="D">D</option>
                                           <option value="E">E</option>
                                           <option value="F">F</option>
                                       </select>
                                              </div>
                                        </div>
                                    </div>
                                    <!--inner row end-->
                                    
                                    
                                	<div class="row" style="margin-top:20px;">
                                    	<div class="col-lg-4 col-lg-offset-2 col-md-4 col-md-offset-2 col-sm-6 col-xs-12">
                                   			<input type="submit" name="submit" value="SUBMIT" class="btn btn-primary btn-lg"></input>
										</div>
                                        <div class="col-lg-4 col-lg-offset-2 col-md-4 col-md-offset-2 col-sm-6 col-xs-12">
                                   			<input type="reset" value="RESET" class="btn btn-primary btn-lg"></input>
										</div>
                                    </div>
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
</div>
<!--container-fluid End-->
</form>
</body>
</html>

<?php 
include("include/connect.php");
if(isset($_POST['submit'])){
	$post_day = $_POST['day'];
	$post_time1 = $_POST['time1'];
	$post_time2 = $_POST['time2'];
	$post_time3 = $_POST['time3'];
	$post_time4 = $_POST['time4'];
	$post_time5 = $_POST['time5'];
	$post_time6 = $_POST['time6'];
	$post_time7 = $_POST['time7'];
	$post_time8 = $_POST['time8'];
	$post_sub1 = $_POST['sub1'];
	$post_sub2 = $_POST['sub2'];
	$post_sub3 = $_POST['sub3'];
	$post_sub4 = $_POST['sub4'];
	$post_sub5 = $_POST['sub5'];
	$post_sub6 = $_POST['sub6'];
	$post_sub7 = $_POST['sub7'];
	$post_sub8 = $_POST['sub8'];
	$class = $_POST['class'];
	$section = $_POST['section'];
	$shift = $_POST['shift'];
	$group = $_POST['group'];
	$day = date("Y-m-d");
	
	$schedule_query=mysql_query("INSERT INTO `class_routine`(`id`, `sub1`, `schedule1`, `sub2`, `schedule2`, `sub3`, `schedule3`, `sub4`, `schedule4`, `sub5`, `schedule5`, `sub6`, `schedule6`, `sub7`, `schedule7`, `sub8`, `schedule8`, `class`, `day`, `shift`, `section`, `group`, `date`) 
	VALUES ('','$post_sub1','$post_time1','$post_sub2','$post_time2','$post_sub3','$post_time3','$post_sub4','$post_time4','$post_sub5','$post_time5','$post_sub6','$post_time6','$post_sub7','$post_time7','$post_sub8','$post_time8','$class','$post_day','$shift','$section','$group','$day'");
	
	if($schedule_query !=''){
	
	echo "<script>alert('post published successfuly')</script>";
	//header("location: home.php");
	}
}
?>