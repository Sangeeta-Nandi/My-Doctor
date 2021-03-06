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
			<div class="featured-single-item diagnostic">
				<img src="img/diagnostic.png" alt="Diagnostic" />
				<h3>Diagnostic</h3>
			</div>
			
			<div class="select-option">
				<select class="diagnostic-custom-select" id="">
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
			<p class="diagnostic-result-heading"><span>Dhaka</span></p>
		 <?php 
	include("include/connect.php");
	$query="Select * from diagnostic";
	
	$exquery=mysqli_query($con,$query);
	while($row=mysqli_fetch_array($exquery))
	{
		
	    $diagnosticName=$row['provider_name'];
		$address=$row['address'];
		$phone=$row['phone'];	
		
	
	
	?>
			<div class="blood-bank-result-single-item-box">
				<div class="blood-bank-result-single-item">
					<h4><?php echo $diagnosticName; ?></h4>
					<p><?php echo $address;?><br>
            <?php echo  "Phone:".$phone; ?></p>
				</div>
			</div>
	<?php } ?>
		
		</div>
		
	<!-- Sub Page Result Area Ends Here -->
	
	</div>
	</main>
		
<?php
	include 'includes/footer.php';
?>		