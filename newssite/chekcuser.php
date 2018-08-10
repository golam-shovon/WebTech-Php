<?php
	if ($_SERVER['REQUEST_METHOD'] == "POST")
	{
		$un = $_POST['name'];
		$pw = $_POST['password'];
		
		require'config.php';
		
		$statement = "select * from user WHERE name = '$un' and password = '$pw'";
		
		$result = mysqli_query($conn, $statement);
		
		if (mysqli_num_rows($result) > 0)
		{
			header("location:index.php");
		}
		else
		{
			header("location:newspaper.php");
		}
	}
?>