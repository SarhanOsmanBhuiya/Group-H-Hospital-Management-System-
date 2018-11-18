<?php include('part/db_connect.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>PATIENTS</title>
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
					<h2 class="line">PATIENT</h2>
				</div>
			</div>

			<form action="patient.php" method="post" >
				<div class="aw row">

					<div class="col-md-5 col-md-offset-1">

						<div class="form-group">
							<label for="patient_id">PATIENT ID <span style="color: red">*</span></label>
							<input type="text" name="patient_id" class="form-control" id="patient_id" required>
						</div>

						<div class="form-group">
							<label for="admission_date">ADMISSION DATE <span style="color: red">*</span></label>
							<input type="DATE" name="admission_date" class="form-control" id="admission_date" required>
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

						<div class="heading">
							<h3> <br>PRESENT ADDRESS <br></h3>
						</div>

						<div class="form-group">
							<label for="ps"> <br>STREET NUMBER <span style="color: red">*</span></label>
							<input type="text" name="ps" class="form-control" id="ps" required>
						</div>

						<div class="form-group">
							<label for="pn">STREET NAME <span style="color: red">*</span></label>
							<input type="text" name="pn" class="form-control" id="pn" required>
						</div>

						<div class="form-group">
							<label for="an">AREA <span style="color: red">*</span></label>
							<input type="text" name="an" class="form-control" id="an" required>
						</div>

						<div class="form-group">
							<label for="pt">THANA <span style="color: red">*</span></label>
							<input type="text" name="pt" class="form-control" id="pt" required>
						</div>

						<div class="form-group">
							<label for="pd">DISTRICT <span style="color: red">*</span></label>
							<input type="text" name="pd" class="form-control" id="pd" required>
						</div>


					</div>


					<div class="col-md-5">

						<div class="form-group">
									<label for="profession">PROFESSION <span style="color: red">*</span></label>
									<select name="profession" class="form-control" id="profession" required>
										<option value="">Select Professin...</option>
										<option value="Govt Job">Govt Job</option>
										<option value="Private Job">Private Job</option>
										<option value="Business">Business</option>
										<option value="Farmer">Farmer</option>
										<option value="Retired">Retired</option>
										<option value="Others">Others</option>
									</select>
								</div>

						<div class="form-group">
							<label for="dob">DATE OF BIRTH <span style="color: red">*</span></label>
							<input type="DATE" name="dob" class="form-control" id="dob" required>
						</div>

						<div class="form-group">
							<label for="m1">MOBILE-1 <span style="color: red">*</span></label>
							<input type="text" name="m1" class="form-control" id="m1" required>
						</div>

						<div class="form-group">
							<label for="m2">MOBILE-2 <span style="color: red">*</span></label>
							<input type="text" name="m2" class="form-control" id="m2" required>
						</div>

						<div class="form-group">
							<label for="deposit">AMOUNT DEPOSITED <span style="color: red">*</span></label>
							<input type="text" name="deposit" class="form-control" id="deposit" required>
						</div>

						<div class="heading">
							<h3><br>PERMANENT ADDRESS <br></h3>
						</div>

						<div class="form-group">
							<label for="pps"><br>STREET NUMBER <span style="color: red">*</span></label>
							<input type="text" name="pps" class="form-control" id="pps" required>
						</div>

						<div class="form-group">
							<label for="ppn">STREET NAME <span style="color: red">*</span></label>
							<input type="text" name="ppn" class="form-control" id="ppn" required>
						</div>

						<div class="form-group">
							<label for="pan">AREA <span style="color: red">*</span></label>
							<input type="text" name="pan" class="form-control" id="pan" required>
						</div>

						<div class="form-group">
							<label for="ppt">THANA <span style="color: red">*</span></label>
							<input type="text" name="ppt" class="form-control" id="ppt" required>
						</div>

						<div class="form-group">
							<label for="ppd">DISTRICT <span style="color: red">*</span></label>
							<input type="text" name="ppd" class="form-control" id="ppd" required>
						</div>

					</div>

				</div>

					<div class="row">
						<div class="col-md-12">
							<button type="submit" name="patientSubmit" class="btn btn-default btn-lg">Submit </button>
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


