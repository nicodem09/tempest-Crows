<?php
	include 'database.php';
	$fname = $_POST['fn'];
	$lname = $_POST['ln'];
	$sex = $_POST['sx'];
	$phone = $_POST['cn'];
	$email = $_POST['eml'];
	$pass = $_POST['pw'];
	$sql = "INSERT INTO `user` (`first_name`, `last_name`, `sex`, `phone_number`, `email`, `password`, `status`)
						 VALUES ('$fname', '$lname', '$sex', '$phone', '$email', '$pass', 1)";
	if (mysqli_query($conn, $sql)) {
		echo json_encode(array("statusCode"=>200));
	} 
	else {
		echo json_encode(array("statusCode"=>201));
	}
	mysqli_close($conn);
?>

