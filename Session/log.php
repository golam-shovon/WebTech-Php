<?php
session_start();
$_SESSION['u']=0;
$uspw=array("P"=>"pp", "T"=>"tt", "J"=>"jj");
var_dump($uspw);

foreach($uspw as $un=>$pw)
{
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
		$_SESSION['u']=1;
		header("location:login.php");

	} 
  
 }


?>