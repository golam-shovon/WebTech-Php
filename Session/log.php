<?php
session_start(); 
$uspw=array("P"=>"pp", "T"=>"tt", "J"=>"jj");
var_dump($uspw);

foreach($uspw as $un=>$pw){
	/* echo $un.$pw;
	echo $_POST['un'];
	echo $_POST['pw']; */
    if($_POST['un']==$un && $_POST['pw']==$pw)
   {
	   $_SESSION['un']=$un;
	   header("location:home.php");
	   break;
   }
	 else
{
	header("location:erlogin.php");
} 
  
 }


?>