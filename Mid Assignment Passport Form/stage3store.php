<?php
    session_start();

    $_SESSION['payement']=test_input($_POST['payement']);
    $_SESSION['currency']=test_input($_POST['currency']);
    $_SESSION['amount']=test_input($_POST['amount']);
    $_SESSION['skippay']=test_input($_POST['skippay']);
    $_SESSION['paymentdate']=test_input($_POST['paymentdate']);
    $_SESSION['receiptno']=test_input($_POST['receiptno']);
    $_SESSION['bank']=test_input($_POST['bank']);
    $_SESSION['branch']=test_input($_POST['branch']);
    if(isset($_SESSION['currency']))
    {
        $_SESSION['ccn']=2;
    }
    if(empty($_SESSION['skippay']))
    {
        $_SESSION['skp']=1;
    }
    if(isset($_SESSION['skippay']))
    {
        $_SESSION['skp']=2;
    }
    if(empty($_SESSION['currency']))
    {
        $_SESSION['ccn']=1;
    }
    if(isset($_SESSION['amount']))
    {
        $_SESSION['ammn']=2;
    }
    if(empty($_SESSION['amount']))
    {
        $_SESSION['ammn']=1;
    }
    if(isset($_SESSION['emrelation']))
    {
        $_SESSION['emre']=2;
    }
    if(empty($_SESSION['paymentdate']))
    {
        $_SESSION['dap']=1;
    }
    if(isset($_SESSION['paymentdate']))
    {
        $_SESSION['dap']=2;
    }
    if(empty($_SESSION['receiptno']))
    {
        $_SESSION['rep']=1;
    }
    if(isset($_SESSION['receiptno']))
    {
        $_SESSION['rep']=2;
    }
    if($_SESSION['ccn']==1||$_SESSION['ammn']==1||$_SESSION['dap']==1||$_SESSION['rep']==1)
    {
        $_SESSION['Flag 3']=1;
    }     
    function test_input($data) 
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    header('Location:validate.php');
?>