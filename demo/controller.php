<?php 
		function db(){
		return new PDO("mysql:host=localhost;dbname=febed","root","");
		}


	function register($fname, $lname, $sex, $pnumber, $email, $password){
		$db = db();
		$sql = "INSERT INTO `user` (`first_name`, `last_name`, `sex`, `phone_number`, `email`, `password`, `status`) VALUES (?,?,?,?,?,?,?);";
		$cmd = $db->prepare($sql);
		$result = $cmd->execute(array($fname, $lname, $sex, $pnumber, $email, $password, 1));
		$db = null;		
		return "ok";

	}
 ?>