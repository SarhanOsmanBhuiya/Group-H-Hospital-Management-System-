<?php include('part/db_connect.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>DOCTORS</title>
</head>

<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<link rel="stylesheet" type="text/css" href="style.css">

<body>

	<div class="wrap container">
		
		<div class="navbar">
			<div class="row">
				<ul>
					<li><a href="home.php">HOME</a></li>
					<li><a href="pa.php">PATIENTS</a></li>
					<li><a href="ward.php">WARDS</a></li>
					<li><a href="bed.php">BED</a></li>
					<li><a href="nurse.php">NURSE</a></li>
					<li><a href="medcine.php">MEDICINE</a></li>
					<li><a href="pescription.php">PESCRIPTION</a></li>
					<li><a href="doctor.php">DOCTORS</a></li>
					<li><a href="information.php">INFORMATION</a></li>
					<li><a href="contact.php">CONTACT</a></li>
				</ul>
			</div>
		</div>


		<div class="patient">

			<div class="row">
				<div class="ab col-md-6 col-md-offset-3">
					<h2 class="line">DOCTOR's INFORMATION</h2>
				</div>
			</div>

			<form action="doctor1.php" method="post" >
				<div class="aw row">

					<div class="col-md-6 col-md-offset-3">

						<div class="form-group">
							<label for="did">DOCTOR ID <span style="color: red">*</span></label>
							<input type="text" name="did" class="form-control" id="did" required>
						</div>

						<div class="form-group">
							<label for="app_date">APPOINTMENT DATE <span style="color: red">*</span></label>
							<input type="DATE" name="app_date" class="form-control" id="app_date" required>
						</div>

						<div class="form-group">
							<label for="fn">FIRST NAME <span style="color: red">*</span></label>
							<input type="text" name="fn" class="form-control" id="fn" required>
						</div>

						<div class="form-group">
							<label for="mn">MIDDLE NAME <span style="color: red">*</span></label>
							<input type="text" name="mn" class="form-control" id="mn" required>
						</div>

						<div class="form-group">
							<label for="ln">LAST NAME <span style="color: red">*</span></label>
							<input type="text" name="ln" class="form-control" id="ln" required>
						</div>


						<div class="form-group">
							<label for="dob">DATE OF BIRTH <span style="color: red">*</span></label>
							<input type="DATE" name="dob" class="form-control" id="dob" required>
						</div>

						<div class="form-group">
									<label for="spe">SPECIALIST <span style="color: red">*</span></label>
									<select name="spe" class="form-control" id="spe" required>
										<option value="">Select...</option>
										<option value="Gynocologist">Gynocologist</option>
										<option value="Orthopedics">Orthopedics</option>
										<option value="Heart">Heart</option>
										<option value="Dental">Dental</option>
										<option value="Skin">Skin</option>
										<option value="Others">Others</option>
									</select>
						</div>

						<div class="form-group">
							<label for="ward_id">WARD ID <span style="color: red">*</span></label>
							<input type="text" name="ward_id" class="form-control" id="ward_id" required>
						</div>

						<div class="form-group">
							<label for="rid">REGISTRAR ID <span style="color: red">*</span></label>
							<input type="text" name="rid" class="form-control" id="rid" required>
						</div>


					</div>


					<div class="row">
						<div class="col-md-12">
							<button type="submit" name="doctorSubmit" class="btn btn-default btn-lg">Submit </button>
						</div>
					</div>

			
		</div>	
	</form>
</div>

		<div class="footer">
			<div class="row">

				<div class="col-md-4">
			<div class="footer">
				<h4>ABOUT US</h4>
	            	<p>Laura Pergolizzi (born March 18, 1981) is an American singer and songwriter who performs under the stage name LP. She has released four albums and one EP. .</p>
			</div>
			</div>

			<div class="col-md-4">
				<div class="footer">
					<h4>FOLLOW US</h4>
					<ul>
		                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
		                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
		                    <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
		                    <li><a href="#"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
		            </ul>
					
				</div>
			</div>


			<div class="col-md-4">
				<div class="footer">
					<h4>DOWNLOAD OUR APPS</h4>
		            	<div class="appimg">
		                        <a href="#"> <img src="img/play.jpg"></a>
		                        <a href="#"> <img src="img/ios.jpg"></a>
		            	</div>
				</div>
			</div>


			</div>
				</div>

				<div class="row">
					<div class="end">
				                <p>Copyright Farazy Hospital Limited</p>
				        </div>
				     </div>
				</div>


	</div>



		



<br>
<br>

</body>
</html>

<?php include('part/db_close.php'); ?>


