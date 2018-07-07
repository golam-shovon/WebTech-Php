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
        if()
        {
         header('Location:stage.php');
        }
        if()
        {
         header('Location:stage3.php');
        }

    }
    else
    {
    
        header('Location:stage3.php');
        
    }
?>