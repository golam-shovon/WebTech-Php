<?php
session_start();
 session_destroy(); //destroy entire session 
 header("location:login.php");

?>
