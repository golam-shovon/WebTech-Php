<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
<?php
session_start();
require 'config.php';
$head=$_POST['name'];
$data=$_POST['password'];



$statement="select * from user WHERE name='$head' and passsword='$data'";
$result = mysqli_query($conn, $statement);
		
		if (mysqli_num_rows($result) > 0)
		{
			header("location:index.php");
		}
		else
		{
			header("location:newspaper.php");
		}

?>
/*$row = mysqli_fetch_assoc($result);
$ps=$row['password'];
if($data==$ps )
{
    header("Location:indexstage2.php");
}

else
{
    echo"<p>Wrong Infromation</p>";
    header("Location:index.php");
}

?> */
<div class="container">
        <p>Enter Unique User Name</p>
</div>
</body>
</html>