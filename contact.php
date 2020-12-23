<?php 
include 'includes/header.php';
?>
		
	<main>
		<!-- Contact Area Starts Here -->
		<div class="contact-area">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<h2 class="text-center">Contact Us</h2>
					</div>
				</div>
				<div class="row">
					<div class="contact-top">
						<div class="col-sm-6">
							<div class="contact-us-form">
								<h3 class="text-center">Leave Us a Message</h3>
								<form action="contact.php" method="post">
								
								<div class="form-group">
									<span class="items">Name</span> 
									<input type="text" class="form-control" aria-describedby="sizing-addon3" name="yourname" required/>
								</div>
								
								<div class="form-group">
									<span class="items">Subject</span> 
									<input type="text" class="form-control" aria-describedby="sizing-addon3" name="subject" required/>
								</div>
								
								<div class="form-group">
									<span class="items">Email</span> 
									<input type="email" class="form-control" aria-describedby="sizing-addon3" name="email" required/>
								</div>
								
								<div class="form-group">
									<span class="items">Message</span> 
									<textarea rows="5" name="comments"  class="form-control" required></textarea>
								</div>
								
								<div class="form-group">
									<button type="submit" class="btn btn-send" name="submit">Submit</button>
									<button type="reset" class="btn btn-reset">Reset</button>
								</div>
								
								</form>
							</div>
						</div>
					
						<div class="col-sm-5 col-sm-offset-1">
							<h3 class="text-center">Find Me</h3>
								<b>Call: </b> <br />01750622812 <br />
								<b>Email: </b> <br />mohinmbstu15020@gmail.com <br />
								<b>Web: </b> <br />www.mydoctorbd.com
							<address>
								<b>Address:</b> <br />
								House: 009, Roade: 29, <br />
								Bepari Pawra, Tangail: 1902, Bangladesh. 
							</address>
						</div>

						<div class="col-sm-5 col-sm-offset-1">
							<h3 class="text-center">Find Me</h3>
								<b>Call: </b> <br />0152133 <br />
								<b>Email: </b> <br />sangeeta.nandi20@gmail.com <br />
								<b>Web: </b> <br />www.mydoctorbd.com
							<address>
								<b>Address:</b> <br />
								House: 009, Roade: 29, <br />
								Bepari Pawra, Tangail: 1902, Bangladesh. 
							</address>
						</div>
					
					</div>
				</div>
				
				<div class="row">
					<div class="col-sm-12">
						<div class="map">
							
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Contact Area Ends Here -->
	</main>
		
<?php
	include 'includes/footer.php';
?>		