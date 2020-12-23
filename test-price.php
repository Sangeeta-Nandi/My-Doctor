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
			<li><a href="test-price.php">Test Price</a></li>
			<li><a href="foreign-hospital.php">Foreign Hospital</a></li>
		</ul>
	</div>
	<!-- Sidebar Ends Here -->
	
	<div class="wapper wapper-bottom-margin">
	<!-- Sub Page Heading Area Starts Here -->
		<div class="sub-page-heading-area">
			<div class="featured-single-item folder">
				<img src="img/folder.png" alt="Test Paper" />
				<h3>Test Price</h3>
			</div>
		</div>
	<!-- Sub Page Heading Area Ends Here -->	
	
	<!-- Sub Page Result Area Starts Here -->
		<div class="sub-page-result-area">
			<div class="table-responsive">
				<table class="table table-test-paper">
					<thead>
					  <tr>
						<th>Name</th>
						<th>Lab Aid</th>
						<th>Medinova</th>
						<th>Popular</th>
						<th>IBN Sina</th>
					  </tr>
					</thead>
					<tbody>
					<?php
					include("include/connect.php");
					$query="SELECT D.test_name,
coalesce(sum(CASE when P.company_id=1 THEN P.price   END), 0) as IBNSINA,
coalesce(sum(CASE when P.company_id=2 THEN P.price   END), 0) as LABAID,
coalesce(sum(CASE when P.company_id=5 THEN P.price   END), 0) as Medinova,
coalesce(sum(CASE when P.company_id=8 THEN P.price   END), 0) as Popular

from test_price P LEFT JOIN d_company C on P.company_id=C.company_id
LEFT JOIN d_test_name D on P.d_test_id=D.d_test_id
GROUP BY D.d_test_id
ORDER BY D.test_name ASC";
	
	                   $exquery=mysqli_query($conn,$query);
	                   while($row=mysqli_fetch_array($exquery))
	                   {
		
	                     $TestName=$row['test_name'];
		                 $LabAid=$row['LABAID'];
                         $Medinova=$row['Medinova'];	
                         $Popular=$row['Popular'];
						 $IBNSina=$row['IBNSINA'];
						 
		
	
					
					
					
					?>
					<tr>
						<td><?php echo $TestName ?></td>
						<td><?php if($LabAid=='0.00') 
						{ 
					      echo '';
						}							
					    else
						{
							echo $LabAid ;
						}
						
						?></td>
						<td><?php if($Medinova=='0.00')
						{
							echo '';
						}	
                        else	
						{
							echo $Medinova ;
						}	?></td>
						<td><?php if($Popular=='0.00')
						{
							echo '';
						}
						else
						{
						echo $Popular;
						}?></td>
						<td><?php
                          if($IBNSina=='0.00')
						  {
							  echo '';
						  }
						  else
						  {
							  echo $IBNSina;
						  }
							  ?></td>
					</tr>
					<?php 
					   }
					?>
					
					</tbody>
				 </table>
			</div>
		</div>
	<!-- Sub Page Result Area Ends Here -->
	
	</div>
	</main>
		
<?php
	include 'includes/footer.php';
?>		