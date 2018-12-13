<?php include('part/db_connect.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
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



		<div class="carosel">
			<div class="row">
				<div class="col-md-6 col-md-offset-3">
					<h2>FARAZY HOSPITAL LIMITED</h2>
					<h5 class="am">WE CARE,ALLAH CURE</h5>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<img src="img/4.jpg" width="100%" height="40%">
				</div>
				<div class="col-md-6">
					<img src="img/2.jpg" width="100%" height="40%">
				</div>
			</div>
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