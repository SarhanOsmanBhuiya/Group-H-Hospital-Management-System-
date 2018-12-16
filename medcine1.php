<?php include('part/db_connect.php'); ?>

<?php
	if(isset($_POST['medcineSubmit'])){
		$patient_id=$_POST['patient_id'];
		$mid=$_POST['mid'];
		$medn=$_POST['medn'];
		$mt=$_POST['mt'];
		$price=$_POST['price'];
		$qua=$_POST['qua'];
		$md=$_POST['md'];
		$xd=$_POST['xd'];
		
		

		$query="INSERT INTO medicine(Patient_ID,Medicine_ID,Name,Type,Unit_Price,Quantity,Manufacture_date,Expire_date) VALUES('{$patient_id}', '{$mid}', '{$medn}', '{$mt}', '{$price}','{$qua}', '{$md}', '{$xd}');";
		$performQuery=mysqli_query($connection, $query);

		if(!$performQuery)
			echo 'Query unsuccessful';

		$insertedId=mysqli_insert_id($connection);
		// header('Location: patientReceipt.php?patientId='.$insertedId);
		// exit();

	}
?>

<?php include('part/db_close.php'); ?>