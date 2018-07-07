<?php
    session_start();
    if(isset($_POST['save']))
    {
        if(isset($_POST['gender']))
        {
            $_SESSION['g']=2;
        }
        if(empty($_POST['gender']))
        {
         $_SESSION['g']=1;
        }
        if(isset($_POST['dateofbirth']))
        {
            $_SESSION['db']=2;
        }
        if(empty($_POST['dateofbirth']))
        {
            $_SESSION['db']=1;
        }
        if($_POST['psv']=='N')
        {
            $_SESSION['ps']=2;
        }
        if(empty($_POST['pass_type']))
        {
         $_SESSION['ps']=1;
        }
        if($_SESSION['g']==1||$_SESSION['db']==1||$_SESSION['ps']==1)
        {
         header('Location:index.php');
        }
        if($_SESSION['g']==2 && $_SESSION['db']==2 && $_SESSION['ps']==2)
        {
         header('Location:stage2.php');
        }

    }
    else
    {
    
        header('Location:stage2.php');
        
    }
?>