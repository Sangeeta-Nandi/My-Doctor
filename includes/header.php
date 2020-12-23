<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Welcome to DoctorBD</title>
		
		<!-- Google Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet"> 

        <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
        <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
        <link href="style.css" rel="stylesheet">
        <link href="css/slicknav.css" rel="stylesheet">
        <link href="css/responsive.css" rel="stylesheet">
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script> 
		  <script>
			$(document).ready(function(){  
			$('#doctor_name').keyup(function(){  
			var query = $(this).val();  
			if(query != '')  
			{  
				$.ajax({  
					 url:"search.php",  
					 method:"POST",  
					 data:{query:query},  
					 success:function(data)  
					 {  
						  $('#countryList').fadeIn();  
						  $('#countryList').html(data);  
					 }  
				});  
			}  
			});  
			$(document).on('click', 'li', function(){  
			$('#doctor_name').val($(this).text());  
			$('#countryList').fadeOut();  
			});  
			});  
		  </script>
          <style>  
           ul{  
                background-color:green;  
                cursor:pointer;  
           }  
           li{  
                padding:5px;  
           }  
           </style>
        <!--[if lt IE 9]>
        <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
		
		<header>
		<!-- Header Top Area Starts Here -->
			<div class="header-top-area">
				<div class="container">
					<div class="row">
						<div class="col-sm-4">
							<a href="index.php"><img src="img/logo.png" alt="" /></a>
						</div>
						<div class="col-sm-6">
							<h2>Leading doctors just a click away</h2>
						</div>
						<div class="col-sm-2">
							<button>বাংলা সংস্করণ</button>
						</div>
					</div>
				</div>
			</div>
		<!-- Header Top Area Ends Here -->
		
		<!-- Header Menu Area Starts Here -->
			<div class="header-menu-area">
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
							<ul id="menu">
								<li><a href="index.php">Home</a></li>
								<li><a href="about.php">About Us</a></li>
								<li><a href="health-tips.php">Health Tips</a></li>
								<li><a href="doctor-news.php">Doctors News</a></li>
								<li><a href="faq.php">FAQ</a></li>
								<li><a href="contact.php">Contact Us</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		<!-- Header Menu Area Ends Here -->
        </header>