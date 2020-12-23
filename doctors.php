<?php 
include 'includes/header.php';
?>
	
	

	
	<main>
		
	<!-- Sidebar Starts Here -->
	<div class="sidebar-area sticky">
		<ul>
			<li><a href="doctors.php">Doctor</a></li>
			<li><a href="diagnostic.php">Diagnostic</a></li>
			<li><a href="hospitals.php">Hospital</a></li>
			<li><a href="govt-hospitals.php">Govt. Hospital</a></li>
			<li><a href="blood-bank.php">Blood Bank</a></li>
			<li><a href="ambulance.php">Ambulance</a></li>
			
			<li><a href="foreign-hospital.php">Foreign Hospital</a></li>
		</ul>
	</div>
	<!-- Sidebar Ends Here -->
	
	<div class="wapper wapper-bottom-margin">
	<!-- Sub Page Heading Area Starts Here -->
		<div class="sub-page-heading-area">
			<div class="featured-single-item doctor">
				<img src="img/doctor.png" alt="Doctor" />
				<h3>Doctor</h3>
			</div>
			
			<div class="select-option">
				<select class="doctor-custom-select" id="">
					<option disabled selected>Select Your City</option>
					<option>Dhaka</option>
					<option>Chittagong</option>
					<option>Sylhet</option>
					<option>Rajshahi</option>
					<option>Khulna</option>
				</select>
			</div>
		</div>
	<!-- Sub Page Heading Area Ends Here -->	
	
	<!-- Sub Page Result Area Starts Here -->
		<div class="sub-page-result-area">
			<p class="doctor-result-heading"><span>Dhaka</span></p>
		
		
		
<?php 
include("include/connect.php");

  $view_priciple_msg_query=mysqli_query($con, "select * FROM d_department  order by 1 asc LIMIT 50");
							  while( $row = mysqli_fetch_array($view_priciple_msg_query)){
							     
								$id=$row['d_dept_id'];
								$name = $row['dept_name'];
							    $deptImage=$row['d_depart_image'];

 ?>
		
		
			<div class="result-single-item-box">
			<a href="doctors-department.php?deptid=<?php echo $id; ?>">
			
					<div class="result-single-item">
						<img  src="/mydoctor_final/admin/department/<?php echo $deptImage;?>" alt="" />
						<div class="result-single-item-right">
							<h4><?php echo $name;  ?></h4>
						</div>
							  
					</div>
					
				</a>
			</div>	
			<?php } ?>
		
			</div>	
			
		</div>
		
		
	<!-- Sub Page Result Area Ends Here -->
	</div>
	</main>
		
<?php
	include 'includes/footer.php';
?>		