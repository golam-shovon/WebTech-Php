<?php
/**
 * Created by PhpStorm.
 * User: mdsae
 * Date: 11-Jun-18
 * Time: 9:37 PM
 */
session_start();
include("config.php");
$result = mysqli_query($conn, "select * from test where id='".$_SESSION['id']."'");
if (mysqli_num_rows($result) > 0) 
{
    while($row = mysqli_fetch_assoc($result))
    {
        $idEdit=$row["id"];
        $headingEdit=$row["heading"];
        $summertextEdit=$row["summertext"];
        $datetimeEdit=$row["datetime"];
    }
} 
else 
{
    echo "0 results";
}
$ts="update test set heading='".$_POST['heading']."',summertext='".$_POST['newsbody']."' where id='".$_SESSION['id']."'";
$eds="INSERT INTO edit (id,heading,summertext,datetime) VALUES ('".$idEdit."', '".$headingEdit."', '".$summertextEdit."','".$datetimeEdit."')";
if (mysqli_query($conn, $ts) && mysqli_query($conn, $eds))
{
    header('location:listdata.php');
} 
mysqli_close($conn);
?>