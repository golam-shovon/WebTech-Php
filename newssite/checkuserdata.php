<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
<?php

require 'config.php';
$head=$_POST['name'];
$data=$_POST['password'];



$statement="select * from user WHERE name='$head'";
$result = mysqli_query($conn, $statement);
$row = mysqli_fetch_assoc($result);
$ps=$row['password'];
if($data==$ps  )
{
    header("Location:indexstage2.php");
}

else
{
    echo"<p>Wrong Infromation</p>";
    header("Location:index.php");
}

?>
<div class="container">
        <p>Enter Unique User Name</p>
</div>
</body>
</html>