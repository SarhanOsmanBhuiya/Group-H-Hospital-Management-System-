<?php include('part/db_connect.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>PATIENT INFORMATION</title>
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
					<h2 class="line">PATIENT's INFORMATION</h2>
				</div>
			</div>

			<form action="information1.php" method="post" >
				<div class="aw row">

					<div class="col-md-6 col-md-offset-3">

						<div class="form-group">
							<label for="patient_id">PATIENT ID <span style="color: red">*</span></label>
							<input type="text" name="patient_id" class="form-control" id="patient_id" required>
						</div>


						<div class="form-group">
							<label for="h">HEIGHT <span style="color: red">*</span></label>
							<input type="text" name="h" class="form-control" id="h" required>
						</div>

						<div class="form-group">
							<label for="w">WEIGHT <span style="color: red">*</span></label>
							<input type="text" name="w" class="form-control" id="w" required>
						</div>

						<div class="form-group">
							<label for="hob">HOBBY <span style="color: red">*</span></label>
							<input type="text" name="hob" class="form-control" id="hob" required>
						</div>

						<div class="form-group">
							<label for="dis">DISEASE <span style="color: red">*</span></label>
							<input type="textt" name="dis" class="form-control" id="dis" required>
						</div>

						<div>
							<h2>SYMPTOMS</h2>
						</div>

						<div class="form-group">
							<label for="s1">SYMPTOM-1 <span style="color: red">*</span></label>
							<input type="textt" name="s1" class="form-control" id="s1" required>
						</div>

						<div class="form-group">
							<label for="s2">SYMPTOM-2 <span style="color: red">*</span></label>
							<input type="textt" name="s2" class="form-control" id="s2" required>
						</div>

						<div class="form-group">
							<label for="s3">SYMPTOM-3 <span style="color: red">*</span></label>
							<input type="textt" name="s3" class="form-control" id="s3" required>
						</div>

						<div>
							<h2>BREAKFAST</h2>
						</div>

						<div class="form-group">
							<label for="b1">BREAKFAST-1 <span style="color: red">*</span></label>
							<input type="textt" name="b1" class="form-control" id="b1" required>
						</div>

						<div class="form-group">
							<label for="b2">BREAKFAST-2 <span style="color: red">*</span></label>
							<input type="textt" name="b2" class="form-control" id="b2" required>
						</div>

						<div class="form-group">
							<label for="b3">BREAKFAST-3 <span style="color: red">*</span></label>
							<input type="textt" name="b3" class="form-control" id="b3" required>
						</div>

						<div>
							<h2>LUNCH</h2>
						</div>

						<div class="form-group">
							<label for="l1">LUNCH-1 <span style="color: red">*</span></label>
							<input type="textt" name="l1" class="form-control" id="l1" required>
						</div>

						<div class="form-group">
							<label for="l2">LUNCH-2 <span style="color: red">*</span></label>
							<input type="textt" name="l2" class="form-control" id="l2" required>
						</div>

						<div class="form-group">
							<label for="l3">LUNCH-3 <span style="color: red">*</span></label>
							<input type="textt" name="l3" class="form-control" id="l3" required>
						</div>

						<div>
							<h2>DINNER</h2>
						</div>

						<div class="form-group">
							<label for="d1">DINNER-1 <span style="color: red">*</span></label>
							<input type="textt" name="d1" class="form-control" id="d1" required>
						</div>

						<div class="form-group">
							<label for="d2">DINNER-2 <span style="color: red">*</span></label>
							<input type="textt" name="d2" class="form-control" id="d2" required>
						</div>

						<div class="form-group">
							<label for="d3">DINNER-3 <span style="color: red">*</span></label>
							<input type="textt" name="d3" class="form-control" id="d3" required>
						</div>




					</div>
				</div>

				<div class="row">
						<div class="col-md-12">
							<button type="submit" name="informationSubmit" class="btn btn-default btn-lg">Submit </button>
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