<?php
    session_start();
    $myfile = fopen( $_SESSION['rid'].".txt", "w") or die("Unable to open file!");
    $txt="Name Of The Applicant: ".$_SESSION['dateofbirth'].chr(13).chr(10);
    $txt=$txt."Applying In : ".$_SESSION['app_place'].chr(13).chr(10);
    $txt=$txt."Second Part(surname): ".$_SESSION['surnnameofapplicant'].chr(13).chr(10);
    $txt=$txt."Passport Type: ".$_SESSION['pass_type'].chr(13).chr(10);
    $txt=$txt."First Part(Given Name: ".$_SESSION['givennameofapplicant'].chr(13).chr(10);
    $txt=$txt."Application Type: ".$_SESSION['app_type'].chr(13).chr(10);
    $txt=$txt."Gender: ".$_SESSION['gender'].chr(13).chr(10);
    $txt=$txt."Nationality: ".$_SESSION['applinationality_place'].chr(13).chr(10);
    $txt=$txt."Date Of Birth: ".$_SESSION['dateofbirth'].chr(13).chr(10);
    $txt=$txt."Applicant Mobile No: ".$_SESSION['mobileno'].chr(13).chr(10);
    $txt=$txt."Place of Birth: ".$_SESSION['birthdistrict']." ".$_SESSION['birth_country'].chr(13).chr(10);
    $txt=$txt."Present Address: ".$_SESSION['villege/house']." ".$_SESSION['road/block/sector']." ".$_SESSION['police']." ".$_SESSION['postoffice']." ".$_SESSION['district'].chr(13).chr(10);
    $txt=$txt."Father,s Name: ".$_SESSION['nameoffather'].chr(13).chr(10);
    $txt=$txt."Permanent Address: ".$_SESSION['pmvillege/house']." ".$_SESSION['pmroad/block/sector']." ".$_SESSION['pmpolice']." ".$_SESSION['pmpostoffice']." ".$_SESSION['pmdistrict'].chr(13).chr(10);
    $txt=$txt."Mother's Name: ".$_SESSION['nameofmother'].chr(13).chr(10);
    $txt=$txt."Spouse Name: ".$_SESSION['nameofspouse'].chr(13).chr(10);
    $txt=$txt."Applicant's Email: ".$_SESSION['appliemail'].chr(13).chr(10);
    $txt=$txt."Applicant's BirthID: ".$_SESSION['birthidno'].chr(13).chr(10);
    $txt=$txt."Old Passport no: ".$_SESSION['passportno'].chr(13).chr(10);
    $txt=$txt."Payment Amount: "."(".$_SESSION['currency'].")".$_SESSION['ammn'].chr(13).chr(10);
    $txt=$txt."Payment Date: ".$_SESSION['paymentdate'].chr(13).chr(10);
    $txt=$txt."Receipet No: ".$_SESSION['receiptno'].chr(13).chr(10);
    $txt=$txt."Bank Name: ".$_SESSION['bank'].chr(13).chr(10);
    $txt=$txt."Bramch Name: ".$_SESSION['branch'].chr(13).chr(10);
    fwrite($myfile, $txt);
    fclose($myfile);
 
    ?>
    <!DOCTYPE html>
    <html>
  <head>
    <title>Thank You</title>
    <link rel="stylesheet" href="stylecss.css">
  </head>
  <body>
    <p id="redit">File IS saved</p>
  </body>
</html>
