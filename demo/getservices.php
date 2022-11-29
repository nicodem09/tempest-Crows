
<?php
	//require('database.php');
		function getService(){	
			require('database.php');
			$check=mysqli_query($conn,"select * from services");
			$array=mysqli_fetch_all($check);
			return $array;
			mysqli_close($conn);
		}
		
?>

