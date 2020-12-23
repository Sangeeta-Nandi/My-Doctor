<?php 
include 'includes/header.php';
include 'include/connect.php';
?>
		
		<main>
		<div class="wapper">
		
		<!-- Find Your Doctor Area Starts Here -->
				<div class="row">
					<div class="find-your-doctor">
						<h2>Find Your Doctor</h2>
						
						<div class="find-your-doctor-form">
							<form action="">
								
								<div class="form-group">
									<label for="Name">Name/Dicipline</label>
									<input type="text" class="form-control" id="doctor_name" placeholder="">
								</div>
								<div id="countryList"></div> 
								<div class="form-group">
									<label for="City">City/Area</label>
									<input type="text" class="form-control" id="" placeholder="">
								</div>
								<button type="submit">Go</button>
							</form>
						</div>
					</div>
				</div>
		<!-- Find Your Doctor Area Ends Here -->
		
		<!-- Featured Items Area Starts Here -->
			<div class="row">
			<div class="featured-item-area">
					<div class="col-sm-4">
						<a href="doctors.php">
							<div class="featured-single-item doctor">
							<?php $doctorImage="Select * from menu_icon where menu_name='Doctor'";
                                   $resultDoctorImg = mysqli_query($conn, $doctorImage);
								   while($rowDoctorImg = mysqli_fetch_assoc($resultDoctorImg))
								   {
									   $doctor_image=$rowDoctorImg['menu_image'];
								   }
								   
							?>
								<img src="img/<?php echo $doctor_image;?>" alt="Doctor" />
								<h3>Doctor</h3>
							</div>
						</a>
					</div>
					
					<div class="col-sm-4">
						<a href="diagnostic.php">
							<div class="featured-single-item diagnostic">
							<?php $diagImage="Select * from menu_icon where menu_name='Diagnostics'";
                                   $resultDiagImage = mysqli_query($conn, $diagImage);
								   while($rowDiagImage = mysqli_fetch_assoc($resultDiagImage))
								   {
									   $diag_image=$rowDiagImage['menu_image'];
								   }
								   
							?>
								<img src="img/<?php echo $diag_image;?>" alt="Diagnostic" />
								<h3>Diagnostic</h3>
							</div>
						</a>
					</div>
					
					<div class="col-sm-4">
						<a href="hospitals.php">
							<div class="featured-single-item hospital">
							<?php $hospiImage="Select * from menu_icon where menu_name='Hospital'";
                                   $resultHospiImage = mysqli_query($conn, $hospiImage);
								   while($rowHospiImage = mysqli_fetch_assoc($resultHospiImage))
								   {
									   $hospital_image=$rowHospiImage['menu_image'];
								   }
								   
							?>
								<img src="img/<?php echo $hospital_image;?>" alt="Hospital" />
								<h3>Private Hospital</h3>
							</div>
						</a>
					</div>
					
					<div class="col-sm-4">
						<a href="govt-hospitals.php">
							<div class="featured-single-item bdgovt">
							<?php $GovtHospImage="Select * from menu_icon where menu_name='GovtHospital'";
                                   $resultGovtHospImage = mysqli_query($conn, $GovtHospImage);
								   while($rowGovtHospImage = mysqli_fetch_assoc($resultGovtHospImage))
								   {
									   $gHosp_image=$rowGovtHospImage['menu_image'];
								   }
								   
							?>
								<img src="img/<?php echo $gHosp_image;?>" alt="Government Hospital" />
								<h3>Govt. Hospital</h3>
							</div>
						</a>
					</div>
					
					<div class="col-sm-4">
						<a href="blood-bank.php">
							<div class="featured-single-item blood-bank">
							<?php $BBImage="Select * from menu_icon where menu_name='BloodBank'";
                                   $resultBBImage = mysqli_query($conn, $BBImage);
								   while($rowBBImage = mysqli_fetch_assoc($resultBBImage))
								   {
									   $bb_image=$rowBBImage['menu_image'];
								   }
								   
							?>
								<img src="img/<?php echo $bb_image;?>" alt="Blood Bank" />
								<h3>Blood Bank</h3>
							</div>
						</a>	
					</div>
					
					<div class="col-sm-4">
						<a href="ambulance.php">
							<div class="featured-single-item ambulance">
							<?php $AImage="Select * from menu_icon where menu_name='Ambulance'";
                                   $resultAImage = mysqli_query($conn, $AImage);
								   while($rowAImage = mysqli_fetch_assoc($resultAImage))
								   {
									   $amb_image=$rowAImage['menu_image'];
								   }
								   
							?>
								<img src="img/<?php echo $amb_image;?>" alt="Ambulance" />
								<h3>Ambulance</h3>
							</div>
						</a>
					</div>
					
					<div class="col-sm-4">
						<a href="test-price.php">
							<div class="featured-single-item folder">
							<?php $TPImage="Select * from menu_icon where menu_name='TestPrice'";
                                   $resultTPImage = mysqli_query($conn, $TPImage);
								   while($rowTPImage = mysqli_fetch_assoc($resultTPImage))
								   {
									   $tp_image=$rowTPImage['menu_image'];
								   }
								   
							?>
								<img src="img/<?php echo $tp_image;?>" alt="Test Paper" />
								<h3>Test Price</h3>
							</div>
						</a>
					</div>
					
					<div class="col-sm-4">
						<div class="featured-single-item empty">
							
						</div>
					</div>
					
					<div class="col-sm-4">
						<a href="foreign-hospital.php">
							<div class="featured-single-item foreign-hospital">
							<?php $FHImage="Select * from menu_icon where menu_name='ForeignHospital'";
                                   $resultFHImage = mysqli_query($conn, $FHImage);
								   while($rowFHImage = mysqli_fetch_assoc($resultFHImage))
								   {
									   $fh_image=$rowFHImage['menu_image'];
								   }
								   
							?>
								<img src="img/<?php echo $fh_image;?>" alt="Foreign Hospital" />
								<h3>Foreign Hospital</h3>
							</div>
						</a>	
					</div>
			</div>
			</div>
		<!-- Featured Items Area Ends Here -->
		
		</div>
		</main>
		
<?php
	include 'includes/footer.php';
?>		