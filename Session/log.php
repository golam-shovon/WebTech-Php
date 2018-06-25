<?php
session_start(); 
$uspw = array("P"=>"pp", "T"=>"tt", "J"=>"jj");

foreach($uspw as $un=>$pw){
   if($_POST['un']==.$un. && $_POST['pw']==.$pw.)
   {
	   $_SESSION['un']=$un;
	   header("location:home.php");
   }
	 else
{
	header("location:erlogin.php");
}
  
 }


?>