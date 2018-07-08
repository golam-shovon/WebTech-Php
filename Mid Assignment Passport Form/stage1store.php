<?php
    session_start();
    $_SESSION['s1'];
    $_SESSION['dateofbirth']=test_input($_POST['dateofbirth']);
    $_SESSION['app_place']=test_input($_POST['app_place']);
    $_SESSION['gender']=test_input($_POST['gender']);
    $_SESSION['app_type']=test_input($_POST['app_type']);
    $_SESSION['pass_type']=test_input($_POST['pass_type']);
    $_SESSION['birthidno']=test_input($_POST['birthidno']);
    $_SESSION['niidno']=test_input($_POST['niidno']);
    $_SESSION['delivary_type']=test_input($_POST['delivary_type']);
    $_SESSION['taxidno']=test_input($_POST['taxidno']);
    $_SESSION['height_cm']=test_input($_POST['height_cm']);
    $_SESSION['height_inch']=test_input($_POST['height_inch']);
    $_SESSION['religion']=test_input($_POST['religion']);
    $_SESSION['nameofapplicant']=test_input($_POST['nameofapplicant']);
    $_SESSION['appliemail']=test_input($_POST['appliemail']);
    $_SESSION['givennameofapplicant']=test_input($_POST['givennameofapplicant']);
    $_SESSION['surnnameofapplicant']=test_input($_POST['surnnameofapplicant']);
    $_SESSION['applinationality_place']=test_input($_POST['applinationality_place']);
    $_SESSION['appli_citizenship_status']=test_input($_POST['appli_citizenship_status']);
    $_SESSION['nameoffather']=test_input($_POST['nameoffather']);
    $_SESSION['citizen_ship_type']=test_input($_POST['citizen_ship_type']);
    $_SESSION['father_nationality']=test_input($_POST['father_nationality']);
    $_SESSION['father_profession']=test_input($_POST['father_profession']);
    $_SESSION['nameofmother']=test_input($_POST['nameofmother']);
    $_SESSION['villege/house']=test_input($_POST['villege/house']);
    $_SESSION['mother_nationality']=test_input($_POST['mother_nationality']);
    $_SESSION['road/block/sector']=test_input($_POST['road/block/sector']);
    $_SESSION['mother_profession']=test_input($_POST['mother_profession']);
    $_SESSION['district']=test_input($_POST['district']);
    $_SESSION['nameofspouse']=test_input($_POST['nameofspouse']);
    $_SESSION['police']=test_input($_POST['police']);
    $_SESSION['postoffice']=test_input($_POST['postoffice']);
    $_SESSION['spouse_nationality']=test_input($_POST['spouse_nationality']);
    $_SESSION['spouse_profession']=test_input($_POST['spouse_profession']);
    $_SESSION['marital_status']=test_input($_POST['marital_status']);
    $_SESSION['applicant_profession']=test_input($_POST['applicant_profession']);
    $_SESSION['pmvillege/house']=test_input($_POST['pmvillege/house']);
    $_SESSION['pmroad/block/sector']=test_input($_POST['pmroad/block/sector']);
    $_SESSION['birth_country']=test_input($_POST['birth_country']);
    $_SESSION['pmdistrict']=test_input($_POST['pmdistrict']);
    $_SESSION['birthdistrict']=test_input($_POST['birthdistrict']);
    $_SESSION['pmpolice']=test_input($_POST['pmpolice']);
    $_SESSION['pmpostoffice']=test_input($_POST['pmpostoffice']);

    function test_input($data) 
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    if($_SESSION['s1']==1)
    {
        header('Location:stage2ver2.php');
    }
    else
    {
        header('Location:stage2.php');
    }
    
?>