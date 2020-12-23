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
<link href="../CSS/bootstrap.min.css" rel="stylesheet" type="text/css">
<!--<link href="CSS/bootstrap-theme.min.css" rel="stylesheet" type="text/css">-->
<!--<link href="CSS/customcss.css" rel="stylesheet" type="text/css">-->
<link href="../CSS/img_popup.css" rel="stylesheet" type="text/css">
<!--<script src="http://code.jquery.com/jquery-2.1.4.min.js"></script>-->
   
   <script src="../jquery/jquery.js"></script>
 <script src="../jquery/bootstrap-hover-dropdown.js"></script>
 <script src="../js/bootstrap.min.js"></script>
 <style>
    	a:active, a:focus, a:hover{
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
<form method="post" action="edit_article.php" enctype="multipart/form-data" accept-charset="utf-8">
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
                            <div>
							<?php
                            	 include("include/connect.php");
							   if(isset($_GET['id'])){
								   $page_id = $_GET['id'];
								   $view_priciple_msg_query=mysql_query("select * from article where ArticleID ='$page_id'");
							    $row = mysql_fetch_array($view_priciple_msg_query);
							    
								
								$title = $row['ArticleTitle'];
								$ArticleWriter = $row['ArticleWriter'];
								
								
								$ArticleType = $row['ArticleType'];
								
								$Link = $row['ArticleDownloadLink'];
								
								$ArticleSource = $row['ArticleSource'];
								
								
								
								
								
								   
								   ?>
								   <div class="form-group">
                                        <label for="inputEmail3" class="col-sm-4 control-label">ID</label>
                                        <div class="col-sm-6">
                                          <input required type="text" readonly name="id" class="form-control" id="inputEmail3" value="<?php echo $page_id; ?>">
                                        </div>
                                      </div>
                                      
                                      
                                      <div class="form-group">
                                        <label for="inputEmail3" class="col-sm-4 control-label">Article Title:</label>
                                        <div class="col-sm-6">
                                          <input name="title" type="text" class="form-control" id="inputEmail3" value="<?php echo $title; ?>">
                                        </div>
                                      </div>
                                      
                                       
                                          <div class="form-group">
                                        <label for="inputEmail3" class="col-sm-4 control-label">Article Type:</label>
                                        <div class="col-sm-6">
                                          <input name="atype" type="text" class="form-control" id="inputEmail3" value="<?php echo $ArticleType; ?>">
                                        </div>
                                      </div>
                                      
                                      
                                      
                                       <div class="form-group">
                                        <label for="inputEmail3" class="col-sm-4 control-label">Article Link :</label>
                                        <div class="col-sm-6">
                                          <input name="link" type="text" class="form-control" id="inputEmail3" value="<?php echo $Link; ?>">
                                        </div>
                                      </div>
                                      
                                      
                                       <div class="form-group">
                                        <label for="inputEmail3" class="col-sm-4 control-label">Article Source:</label>
                                        <div class="col-sm-6">
                                          <input name="articleSource" type="text" class="form-control" id="inputEmail3" value="<?php echo $ArticleSource; ?>">
                                        </div>
                                      </div>
                                      
                                      
                                      
                                      
                                      <div class="form-group">
                                        <label for="inputMessage" class="col-sm-4 control-label">Article Writer:</label>
                                        <div class="col-sm-6">
                                        <textarea class="form-control" rows="13" name="articlewriterp"><?php echo $ArticleWriter; ?></textarea>
                                        </div>
                                      </div>
                                      
                                      <div class="form-group">
                                        <label for="inputPassword3" class="col-sm-4 control-label">Message Type:</label>
                                        <div class="col-sm-4">
                                          <select class="form-control" name="msg_type">
                                              <option>Select New Option</option>
                                              <option value="Transportation">Transportation</option>
                                              <option value="Exclusive-Offers ">Exclusive Offers</option>
                                              <option value="Secretary">Secretary</option>
                                              <option value="notice">Notice</option>
                                              <option value="Admission">Admission</option>
                                               
                                            </select>
                                        </div>
                                      </div>
                                     <!--  <div class="form-group">
                                        <label for="inputPicture" class="col-sm-6 control-label">File/Picture:</label>
                                        <div class="col-sm-3">
                                           <input type="file" id="exampleInputFile" name="image">
                                        </div>
                                      </div>-->
                                      <div class="form-group">
                                        <div class="col-sm-6 col-sm-offset-4">
                                          <input type="submit" name="submit" value="Submit" class="btn btn-default"></input>
                                        </div>
                                      </div>
							   <?php } ?>
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
	 $page_id = $_POST['id'];
	 $post_title = $_POST['title'];
	 $post_articltype = $_POST['atype'];
	 $linkP = $_POST['link'];	
	 $articlewriterp = $_POST['articlewriterp'];	 
	 $articleSourcep = $_POST['articleSource'];
	 
	 $date = date("Y-m-d  H:i:s");
	// $post_image= $_FILES['image']['name'];
//	 $image_tmp= $_FILES['image']['tmp_name'];
if($post_title=='' && ($post_articltype=='' or $linkP=='') &&  $articlewriterp==''){
	
	echo "<script>alert('Any of the fields is empty')</script>";
	exit();
	} else {
		
		//move_uploaded_file($image_tmp,"../news_file/$post_image");
		$update_query = "update article set ArticleTitle='$post_title',ArticleWriter='$articlewriterp',ArticleType='$post_articltype',
		ArticleDownloadLink	='$linkP',ArticleSource='$articleSourcep',ArticlePostDate='$date' where ArticleID = '$page_id'";
		mysql_query($update_query);
		
		
	
		}
		
	if($update_query !=''){
	
	echo "<script>alert('post update successfully')</script>";
	echo "<script>window.open('view_article.php','_self')</script>";
	
	}

}
?>


<?php } ?>
