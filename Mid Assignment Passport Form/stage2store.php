<?php
    session_start();
    $_SESSION['officeno']=test_input($_POST['officeno']);
    $_SESSION['passportno']=test_input($_POST['passportno']);
    $_SESSION['residenceno']=test_input($_POST['residenceno']);
    $_SESSION['placeofissue']=test_input($_POST['placeofissue']);
    $_SESSION['mobileno']=test_input($_POST['mobileno']);
    $_SESSION['dateofissue']=test_input($_POST['dateofissue']);
    $_SESSION['reissuereason']=test_input($_POST['reissuereason']);
    $_SESSION['emcontactname']=test_input($_POST['emcontactname']);
    $_SESSION['em_country']=test_input($_POST['em_country']);
    $_SESSION['emvillege/house']=test_input($_POST['emvillege/house']);
    $_SESSION['emroad/block/sector']=test_input($_POST['emroad/block/sector']);
    $_SESSION['emdistrict']=test_input($_POST['emdistrict']);
    $_SESSION['empolice']=test_input($_POST['empolice']);
    $_SESSION['empostoffice']=test_input($_POST['empostoffice']);
    $_SESSION['emcontactno']=test_input($_POST['emcontactno']);
    $_SESSION['ememail']=test_input($_POST['ememail']);
    $_SESSION['emrelations']=test_input($_POST['emrelation']);
    function test_input($data) 
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    header('Location:stage2validate.php');
?>