<?php

	session_start();
	if(!isset($_SESSION['un'])){
		header("location:login.php");
	}
	else{
		echo "hello ".$_SESSION['un'];
		echo "<br/><a href='logout.php'>Logout</a>";
	}
	
	?>