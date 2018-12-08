<?php include('part/db_connect.php'); ?>

<?php
	if(isset($_POST['patientSubmit'])){
		$patient_id=$_POST['patient_id'];
		$admission_date=$_POST['admission_date'];
		$fn=$_POST['fn'];
		$mn=$_POST['mn'];
		$ln=$_POST['ln'];
		$dob=$_POST['dob'];
		$m1=$_POST['m1'];
		$m2=$_POST['m2'];
		$ps=$_POST['ps'];
		$pn=$_POST['pn'];
		$an=$_POST['an'];
		$pd=$_POST['pd'];
		$pt=$_POST['pt'];
		$pps=$_POST['pps'];
		$ppn=$_POST['ppn'];
		$pan=$_POST['pan'];
		$ppd=$_POST['ppd'];
		$ppt=$_POST['ppt'];
		$profession=$_POST['profession'];
		$deposit=$_POST['deposit'];


		$query="INSERT INTO patient (Patient_ID,Admission_date,First_name,Middle_name,Last_name,Birth_date,Mobile1,Mobile2,Present_streetnum,Present_streetname,Present_area,Present_thana,Present_district,Permanent_streetnum,Permanent_streetname,Permanent_area,Permanent_thana,Permanent_district,Profession,Amount_deposited) VALUES('{$patient_id}', '{$admission_date}', '{$fn}', '{$mn}', '{$ln}', '{$dob}', '{$m1}', '{$m2}', '{$ps}', '{$pn}', '{$an}', '{$pd}', '{$pt}', '{$pps}', '{$ppn}', '{$pan}', '{$ppd}', '{$ppt}', '{$profession}', '{$deposit}');";
		$performQuery=mysqli_query($connection, $query);

		if(!$performQuery)
			echo 'Query unsuccessful';

		$insertedId=mysqli_insert_id($connection);
		// header('Location: patientReceipt.php?patientId='.$insertedId);
		// exit();

	}
?>

<?php include('part/db_close.php'); ?>