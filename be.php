<?php include('part/db_connect.php'); ?>

<?php
	if(isset($_POST['bedSubmit'])){
		$bed_id=$_POST['bed_id'];
		$bt=$_POST['bt'];
		$rent=$_POST['rent'];
		$ward_id=$_POST['ward_id'];
		
		

		$query="INSERT INTO bed (Bed_ID,Type,Rent,Ward_id) VALUES('{$bed_id}', '{$bt}', '{$rent}',  '{$ward_id}');";
		$performQuery=mysqli_query($connection, $query);

		if(!$performQuery)
			echo 'Query unsuccessful';

		$insertedId=mysqli_insert_id($connection);
		// header('Location: patientReceipt.php?patientId='.$insertedId);
		// exit();

	}
?>

<?php include('part/db_close.php'); ?>