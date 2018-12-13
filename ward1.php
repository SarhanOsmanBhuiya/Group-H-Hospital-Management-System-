<?php include('part/db_connect.php'); ?>

<?php
	if(isset($_POST['wardSubmit'])){
		$ward_id=$_POST['ward_id'];
		$ward_name=$_POST['ward_name'];
		$nurse_id=$_POST['nurse_id'];
		$nurse_name=$_POST['nurse_name'];
		$bed_number=$_POST['bed_number'];
		$time=$_POST['time'];


		$query="INSERT INTO ward (Ward_ID,Ward_name,Nurse_name,Nurse_ID,Bed_number,Entry_time) VALUES('{$ward_id}', '{$ward_name}', '{$nurse_name}', '{$nurse_id}', '{$bed_number}', '{$time}');";
		$performQuery=mysqli_query($connection, $query);

		if(!$performQuery)
			echo 'Query unsuccessful';

		$insertedId=mysqli_insert_id($connection);
		// header('Location: patientReceipt.php?patientId='.$insertedId);
		// exit();

	}
?>

<?php include('part/db_close.php'); ?>