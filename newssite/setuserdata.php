<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
<?php
/**
 * Created by PhpStorm.
 * User: mdsae
 * Date: 11-Jun-18
 * Time: 9:37 PM
 */

require 'config.php';
$head=$_POST['name'];
$data=$_POST['password'];
$statement="insert into user(name,password) values ('$head','$data')";

if(mysqli_query($conn,$statement))
{
    header('location:index.php');
}
else

    mysqli_error($conn);   

mysqli_close($conn);
?>
<div class="container">
        <p>Enter Unique User Name</p>
</div>
</body>
</html>