<?php include('part/db_connect.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>NURSE</title>
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
					<h2 class="line">NURSE's INFORMATION</h2>
				</div>
			</div>

			<form action="nurse1.php" method="post" >
				<div class="aw row">

					<div class="col-md-6 col-md-offset-3">

						<div class="form-group">
							<label for="nurse_id">NURSE ID <span style="color: red">*</span></label>
							<input type="text" name="nurse_id" class="form-control" id="nurse_id" required>
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
							<label for="dob">BIRTH DATE <span style="color: red">*</span></label>
							<input type="DATE" name="dob" class="form-control" id="dob" required>
						</div>

						<div class="form-group">
							<label for="sid">SUPERVISOR ID <span style="color: red">*</span></label>
							<input type="text" name="sid" class="form-control" id="sid" required>
						</div>

						<div class="form-group">
							<label for="ward_id">WARD ID <span style="color: red">*</span></label>
							<input type="text" name="ward_id" class="form-control" id="ward_id" required>
						</div>

					</div>
				</div>

				<div class="row">
						<div class="col-md-12">
							<button type="submit" name="nurseSubmit" class="btn btn-default btn-lg">Submit </button>
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

</body>
</html>
<?php include('part/db_close.php'); ?>