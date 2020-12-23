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
	
	<!-- End navigation -->
<?php 
	include("include/connect.php");
     if(isset($_GET['deptid']))
	$page_id = $_GET['deptid'];
	
	 $show_dept=mysqli_query($con,"select DISTINCT b.branch_name,dpt.dept_name,dpt.dept_title FROM doctor_info d LEFT JOIN d_department dpt ON d.d_dept_id=dpt.d_dept_id LEFT JOIN d_branch b on d.branch_id=b.branch_id
WHERE d.d_dept_id='$page_id'
order by 1 asc");
	
	$row_dept=mysqli_fetch_assoc($show_dept);
	 
	$dept_name=$row_dept['dept_name'];
	

 
	 ?>
<!-- Doctor Start -->
<!-- Sub Page Heading Area Starts Here -->
		<div class="sub-page-heading-area">
			<div class="result-single-item">
				<img src="img/doctor.png" alt="" />
				<div class="result-single-item-right">
					<h4> <?php echo $dept_name ?></h4>
				</div>
			</div>
		</div>
	<!-- Sub Page Heading Area Ends Here -->
<!-- Doctor Start --> 

<!-- Neurology Start -->
<section>
  <div class="container">
    <div class="row">
    <?php

 $view_msg_query=mysqli_query($con,"select b.branch_name,dpt.dept_name,dpt.dept_title,d.doctor_name,d.d_address,d.doctor_phone,d.d_mobile,d.doctor_degree,d.doctor_organization,d.doctor_designation FROM doctor_info d LEFT JOIN d_department dpt ON d.d_dept_id=dpt.d_dept_id LEFT JOIN d_branch b on d.branch_id=b.branch_id
WHERE d.d_dept_id='$page_id'
order by 1 asc LIMIT 50");
							  while( $row = mysqli_fetch_array($view_msg_query)){
							     
								//$id=$row['doctor_id'];
								$chamber=$row['branch_name'];
								
								$dept_title=$row['dept_title'];
								$name = $row['doctor_name'];
								$degree = $row['doctor_degree'];
								$designation = $row['doctor_designation'];
								$organization=$row['doctor_organization'];
							    $doctor_address=$row['d_address'];
								$phone=$row['doctor_phone'];
								$mobile=$row['d_mobile'];
								
								
				
							 

?>
<div class="doctor-profile">
				<div class="doctor-profile-inner">
					<div class="doctor-profile-heading">
						<h4><?php  echo $dept_title; ?></h4> 
					</div>
					
					<div class="doctor-profile-details-right">
						<div class="doctor-profile-details-left">	
							<img src="img/Doctor.png" class="img-responsive">
						</div>
						
						<div class="doctor-profile-details-right"> 
							<p><b><?php echo $name; ?></b><br/>
          <?php echo nl2br("Qualification : $degree.\nDesignation : $designation.\nOrganization :$organization.\nChamber : $chamber\n$doctor_address.\nPhone:$phone.\nMob:$mobile"); ?>
          </p>
						
					</div>
					</div>
				</div>
			</div>

<!--      <div class="col-md-4">
        <div class="neurologis">
		
		
          <h3><?php  echo $dept_title; ?></h3>
          <img src="img/Doctor.png" class="img-responsive">
          <p><b><?php echo $name; ?></b><br/>
          <?php echo nl2br("Chamber:$chamber\n$doctor_address.\nPhone:$phone.\nMob:$mobile"); ?>
          </p>
                 

        </div>
      </div>
-->	  
      <?php 
							  }
	  
	  ?>
    </div>
  
  </div>
 
</section>

	</div>
	</main>
		
<?php
	include 'includes/footer.php';
?>		