<?php
    session_start();
    $_SESSION['payement']=test_input($_POST['payement']);
    $_SESSION['currency']=test_input($_POST['currency']);
    $_SESSION['paymentdate']=test_input($_POST['paymentdate']);
    $_SESSION['receiptno']=test_input($_POST['receiptno']);
    $_SESSION['bank']=test_input($_POST['bank']);
    $_SESSION['branch']=test_input($_POST['branch']);
    function test_input($data) 
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    header('Location:validate.php');
?>