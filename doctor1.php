<?php include('part/db_connect.php'); ?>

<?php
	if(isset($_POST['doctorSubmit'])){
		$did=$_POST['did'];
		$app_date=$_POST['app_date'];
		$fn=$_POST['fn'];
		$mn=$_POST['mn'];
		$ln=$_POST['ln'];
		$dob=$_POST['dob'];
		$spe=$_POST['spe'];
		$ward_id=$_POST['ward_id'];
		$rid=$_POST['rid'];
		
		

		$query="INSERT INTO doctor(Doctor_ID,First_name,Middle_name,Last_name,Birth_date,Appointment_date,Specialist,Ward_ID,Register_ID) VALUES('{$did}', '{$fn}', '{$mn}', '{$ln}' , '{$dob}', '{$app_date}','{$spe}', '{$ward_id}' , '{$rid}');";
		$performQuery=mysqli_query($connection, $query);

		if(!$performQuery)
			echo 'Query unsuccessful';

		$insertedId=mysqli_insert_id($connection);
		// header('Location: patientReceipt.php?patientId='.$insertedId);
		// exit();

	}
?>

<?php include('part/db_close.php'); ?>