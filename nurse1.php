<?php include('part/db_connect.php'); ?>

<?php
	if(isset($_POST['nurseSubmit'])){
		$nurse_id=$_POST['nurse_id'];
		$fn=$_POST['fn'];
		$mn=$_POST['mn'];
		$ln=$_POST['ln'];
		$dob=$_POST['dob'];
		$sid=$_POST['sid'];
		$ward_id=$_POST['ward_id'];
		
		

		$query="INSERT INTO nurse (Nurse_ID,First_name,Middle_name,Last_name,Birth_date,Supervisor_ID,Ward_id) VALUES('{$nurse_id}', '{$fn}', '{$mn}', '{$ln}' ,'{$dob}', '{$sid}', '{$ward_id}');";
		$performQuery=mysqli_query($connection, $query);

		if(!$performQuery)
			echo 'Query unsuccessful';

		$insertedId=mysqli_insert_id($connection);
		// header('Location: patientReceipt.php?patientId='.$insertedId);
		// exit();

	}
?>

<?php include('part/db_close.php'); ?>