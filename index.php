<?php include('part/db_connect.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>HOSPITAL</title>

	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>

	<div class="wrapper container">
		<div class="b">
			<div class="box col-md-4 col-md-offset-4">
				<div class="row name">
					
						<h2>HOSPITAL <br>MANGEMENT SYSTEM</h2>
					
				</div>

				<div class="row username">
					<div class="col-md-3">
						<h4>Username:</h4>
					</div>
					<div class="col-md-9">
						<input type="text" name="" placeholder="Username" value="sarhan">
					</div>
				</div>

				<div class="row password">
					<div class="col-md-3">
						<h4>Password:</h4>
					</div>
					<div class="col-md-9">
						<input type="password" name="" placeholder="Password" value="abc">
					</div>
				</div>

				<a href="home.html">
					<button class="btn1">LOG IN</button>
				</a>

			</div>
		</div>
		
	
	</div>

</body>
</html>


<?php include('part/db_close.php'); ?>