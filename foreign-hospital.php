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
			<div class="featured-single-item foreign-hospital">
				<img src="img/foreign-hospital.png" alt="Foreign Hospital" />
				<h3>Foreign Hospital</h3>
			</div>
		</div>
	<!-- Sub Page Heading Area Ends Here -->	
	
	<!-- Sub Page Result Area Starts Here -->
	
	
	
		<div class="sub-page-result-area">
			<div class="foreign-hospital-list">
				<div class="foreign-hospital-list-heading">
					<h2>Best Hospital in Asia</h2>
				</div>
				<?php 
	include("include/connect.php");
	
	$conn = mysqli_connect("localhost","root","","mydoctor_db");
	$sql="Select fore_hs_name,fore_hs_weblink from foreign_hospital";
	$result = $conn->query($sql);
	
	if ($result->num_rows > 0)
	{
	
	 while($row = $result->fetch_assoc())
	{
		
	    $foreignHospitalName=$row['fore_hs_name'];
		$address=$row['fore_hs_weblink'];
	
	?>
				<div class="foreign-hospital-list-item">
					<h3><a href="<?php  echo $address; ?>" target="_blank"><?php echo $foreignHospitalName;  ?></a></h3>
				</div>
				<?php
	}
	
	
	}
				?>
			</div>
		</div>
	<!-- Sub Page Result Area Ends Here -->
	
	</div>
	</main>
		
<?php
	include 'includes/footer.php';
?>		