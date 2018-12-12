<?php include('part/db_connect.php'); ?>

<?php
	if(isset($_POST['informationSubmit'])){
		$patient_id=$_POST['patient_id'];
		$h=$_POST['h'];
		$w=$_POST['w'];
		$hob=$_POST['hob'];
		$dis=$_POST['dis'];
		$s1=$_POST['s1'];
		$s2=$_POST['s2'];
		$s3=$_POST['s3'];
		$b1=$_POST['b1'];
		$b2=$_POST['b2'];
		$b3=$_POST['b3'];
		$l1=$_POST['l1'];
		$l2=$_POST['l2'];
		$l3=$_POST['l3'];
		$d1=$_POST['d1'];
		$d2=$_POST['d2'];
		$d3=$_POST['d3'];
		
		

		$query="INSERT INTO patient_info(Patient_ID,Height,Weight,Hobby,Disease,Symptom1,Symptom2,Symptom3,Breakfast1,Breakfast2,Breakfast3,Lunch1,Lunch2,Lunch3,Dinner1,Dinner2,Dinner3) VALUES('{$patient_id}','{$h}', '{$w}', '{$hob}', '{$dis}', '{$s1}', '{$s2}', '{$s3}','{$b1}', '{$b2}', '{$b3}', '{$l1}', '{$l2}', '{$l3}', '{$d1}', '{$d2}', '{$d3}');";
		$performQuery=mysqli_query($connection, $query);

		if(!$performQuery)
			echo 'Query unsuccessful';

		$insertedId=mysqli_insert_id($connection);
		// header('Location: patientReceipt.php?patientId='.$insertedId);
		// exit();

	}
?>

<?php include('part/db_close.php'); ?>