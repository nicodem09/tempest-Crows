<?php
	include 'database.php';
		session_start();
		$email=$_POST['email'];
		$password=$_POST['password'];
		$check=mysqli_query($conn,"select * from user where email='$email' and password='$password'");
		$array=mysqli_fetch_row($check);
		if (mysqli_num_rows($check)>0)
		{
			$_SESSION['id']=$array[0];
			$_SESSION['name']=$array[1];
			$_SESSION['email']=$email;
			echo json_encode(array("statusCode"=>200));
		}
		else{
			echo json_encode(array("statusCode"=>201));
		}
		mysqli_close($conn);
?>

