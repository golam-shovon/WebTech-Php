<?php
    session_start();
    $_SESSION['s1']=0;
    $_SESSION['s2']=0;

?>
<!DOCTYPE html>
<html>
    <head>
        <title>form results</title>
        <link rel="stylesheet" href="st1css.css">
    </head>
    <body>
        <p id="header"><b>PASSPORT APPLICATION - REVIEW ENROLMENT SUMMARY</b></p>
        <p id="h3"><b>Enrolment Date:<?php echo date("d/m/Y"); ?></b></p>
        <p id="h3"><b><span id="redit">Reminder before submitting your application.</b></p>

        <ul id="h3">
            <li ><span id="h3"><i>After you click submit,you are not allowed to modify your information.</i></span></li>
            <li ><span id="h3"><i>Please visit <b><?php echo $_SESSION['app_place']; ?></b> on working day within the next 15 days for biometric capture except government holiday.</i></span></li>
        </ul>
        <hr id="marit">
        <br>
            <div id="div02">
                <table id="table01">
                    <tr>
                        <td colspan="2">
                            <p id="blue"><b>Personal Information Summary</b></p>
                        </td>
                        <td colspan="2">
                            <p id="blue"><b>Passport Information Summary</b></p>
                        </td>
                    </tr> 
                    <tr><td></td><td></td><td></td><td></td></tr>
                    <tr><td></td><td></td><td></td><td></td></tr>
                    <tr>
                         <td>
                            <span id="nmb"><b>Name Of The Applicant:</b></span>
                        
                            <b><?php echo $_SESSION['nameofapplicant'];?></b>
                        </td>
                        <td></td><td></td>
                        <td>
                            <span id="nmb"><b>Applying In:</b></span>
                        
                            <b><?php echo $_SESSION['app_place'];?></b>
                        </td> 
                    </tr>                       
                    <tr><td></td><td></td><td></td><td></td></tr>
                    <tr><td></td><td></td><td></td><td></td></tr>
                    <tr>
                         <td>
                            <span id="nmb"><b>Second Part(surname):</b></span>
                        
                            <b><?php echo $_SESSION['surnnameofapplicant'];?></b>
                        </td>
                        <td></td><td></td>
                        <td>
                            <span id="nmb"><b>Passport Type</b></span>
                        
                            <b><?php echo $_SESSION['pass_type'];?></b>
                        </td> 
                    </tr>                       
                    <tr><td></td><td></td><td></td><td></td></tr>
                    <tr><td></td><td></td><td></td><td></td></tr>
                    <tr>
                         <td>
                            <span id="nmb"><b>First Part(Given Name):</b></span>
                        
                            <b><?php echo $_SESSION['givennameofapplicant'];?></b>
                        </td>
                        <td></td><td></td>
                        <td>
                            <span id="nmb"><b>Application Type</b></span>
                        
                            <b><?php echo $_SESSION['app_type'];?></b>
                        </td> 
                    </tr>                       
                    <tr><td></td><td></td><td></td><td></td></tr>
                    <tr><td></td><td></td><td></td><td></td></tr>
                    <tr>
                         <td>
                            <span id="nmb"><b>Gender:</b></span>
                        
                            <b><?php echo $_SESSION['gender'];?></b>
                        </td>
                        <td></td>
                        <td colspan="2">
                            <p id="blue"><b>Contact Information Summary</b></p>
                        </td> 
                    </tr>                       
                    <tr><td></td><td></td><td></td><td></td></tr>
                    <tr><td></td><td></td><td></td><td></td></tr>
                    <tr>
                         <td>
                            <span id="nmb"><b>Nationality:</b></span>
                        
                            <b><?php echo $_SESSION['applinationality_place'];?></b>
                        </td>
                        <td></td><td></td>
                        <td>
                         
                        </td> 
                    </tr>                       
                    <tr><td></td><td></td><td></td><td></td></tr>
                    <tr><td></td><td></td><td></td><td></td></tr>
                    <tr>
                         <td>
                            <span id="nmb"><b>Date Of Birth:</b></span>
                        
                            <b><?php echo $_SESSION['dateofbirth'];?></b>
                        </td>
                        <td></td><td></td>
                        <td>
                            <span id="nmb"><b>Mobile No</b></span>
                        
                            <b><?php echo $_SESSION['mobileno'];?></b>
                        </td> 
                    </tr>                       
                    <tr><td></td><td></td><td></td><td></td></tr>
                    <tr><td></td><td></td><td></td><td></td></tr>
                    <tr>
                         <td>
                            <span id="nmb"><b>Place of Birth:</b></span>
                        
                            <b><?php echo $_SESSION['birthdistrict']." ".$_SESSION['birth_country'];?></b>
                        </td>
                        <td></td><td></td>
                        <td>
                            <span id="nmb"><b>Present Addresss:</b></span>
                        
                            <b><?php echo $_SESSION['villege/house']." ".$_SESSION['road/block/sector']." ".$_SESSION['police']." ".$_SESSION['postoffice']." ".$_SESSION['district'];?></b>
                        </td> 
                    </tr>                       
                    <tr><td></td><td></td><td></td><td></td></tr>
                    <tr><td></td><td></td><td></td><td></td></tr>
                    <tr>
                         <td>
                            <span id="nmb"><b>Father's Name:</b></span>
                        
                            <b><?php echo $_SESSION['nameoffather'];?></b>
                        </td>
                        <td></td><td></td>
                        <td>
                            <span id="nmb"><b>Permanent Addresss:</b></span>
                        
                            <b><?php echo $_SESSION['pmvillege/house']." ".$_SESSION['pmroad/block/sector']." ".$_SESSION['pmpolice']." ".$_SESSION['pmpostoffice']." ".$_SESSION['pmdistrict'];?></b>
                        </td> 
                    </tr>                       
                    <tr><td></td><td></td><td></td><td></td></tr>
                    <tr><td></td><td></td><td></td><td></td></tr>
                    <tr>
                         <td>
                            <span id="nmb"><b>Mother's Name:</b></span>
                        
                            <b><?php echo $_SESSION['nameofmother'];?></b>
                        </td>
                        <td></td><td></td>
                        <td>
                         </td>   
                    </tr>                       
                    <tr><td></td><td></td><td></td><td></td></tr>
                    <tr><td></td><td></td><td></td><td></td></tr>
                    <tr>
                         <td>
                            <span id="nmb"><b>Spouse Name:</b></span>
                        
                            <b><?php echo $_SESSION['nameofspouse'];?></b>
                        </td>
                        <td></td><td></td>
                        <td>
                            <span id="nmb"><b>Email:</b></span>
                        
                            <b><?php echo $_SESSION['appliemail'];?></b>
                        </td> 
                    </tr>                       
                    <tr><td></td><td></td><td></td><td></td></tr>
                    <tr><td></td><td></td><td></td><td></td></tr>
                    <tr>
                         <td>
                            <span id="nmb"><b>National ID no:</b></span>
                        
                            <b><?php echo $_SESSION['niidno'];?></b>
                        </td>
                        <td></td><td></td>
                        <td>

                        </td> 
                    </tr>                       
                    <tr><td></td><td></td><td></td><td></td></tr>
                    <tr><td></td><td></td><td></td><td></td></tr>
                    <tr>
                         <td>
                            <span id="nmb"><b>Birth ID No:</b></span>
                        
                            <b><?php echo $_SESSION['birthidno'];?></b>
                        </td>
                        <td></td>
                        <td colspan="2">
                            <p id="blue"><b>Payement Information Summary</b></p>
                        </td> 
                    </tr>                       
                    <tr><td></td><td></td><td></td><td></td></tr>
                    <tr><td></td><td></td><td></td><td></td></tr>
                    <tr>
                         <td>
                            <span id="nmb"><b>Old Passport no:</b></span>
                        
                            <b><?php echo $_SESSION['passportno'];?></b>
                        </td>
                        <td></td><td></td>
                        <td>

                        </td> 
                    </tr>                       
                    <tr><td></td><td></td><td></td><td></td></tr>
                    <tr><td></td><td></td><td></td><td></td></tr>
                    <tr>
                         <td></td><td></td><td></td>                                                                         
                        <td>
                            <span id="nmb"><b>Payment Amount:</b></span>
                            <b><?php echo "(".$_SESSION['currency'].")".$_SESSION['ammn'];?></b>
                        </td> 
                    </tr>                       
                    <tr><td></td><td></td><td></td><td></td></tr>
                    <tr><td></td><td></td><td></td><td></td></tr>
                    <tr>
                         <td></td><td></td><td></td>                                                                         
                        <td>
                            <span id="nmb"><b>Payment Date:</b></span>
                            <b><?php echo $_SESSION['paymentdate'];?></b>
                        </td> 
                    </tr>                       
                    <tr><td></td><td></td><td></td><td></td></tr>
                    <tr><td></td><td></td><td></td><td></td></tr>
                    <tr>
                         <td></td><td></td><td></td>                                                                         
                        <td>
                            <span id="nmb"><b>Receipt No:</b></span>
                            <b><?php echo $_SESSION['receiptno'];?></b>
                        </td> 
                    </tr>                       
                    <tr><td></td><td></td><td></td><td></td></tr>
                    <tr><td></td><td></td><td></td><td></td></tr>
                    <tr>
                         <td></td><td></td><td></td>                                                                         
                        <td>
                            <span id="nmb"><b>Bank Name:</b></span>
                            <b><?php echo $_SESSION['bank'];?></b>
                        </td> 
                    </tr>                       
                    <tr><td></td><td></td><td></td><td></td></tr>
                    <tr><td></td><td></td><td></td><td></td></tr>
                    <tr>
                         <td></td><td></td><td></td>                                                                         
                        <td>
                            <span id="nmb"><b>Bank Branch:</b></span>
                            <b><?php echo $_SESSION['branch'];?></b>
                        </td> 
                    </tr>                       
                    <tr><td></td><td></td><td></td><td></td></tr>
                    <tr><td></td><td></td><td></td><td></td></tr>
                    <tr>
                    <td colspan="4"><p id="redit"><b>Reminder:Bring old passport during collecting MRP;No correction after handover of delivery slip without fee.</b></p></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>
                             <span>
                                    <a class="btn" href="stage3ver2.php"><button class="button01">Previous Page</button></a>

                                    <a class="btn" href="save.php"><button class="button01">Save</button></a>
                            </span>                
                        </td>
                    </tr>
                </table>    
            </div>
                                               
    </body>
</html>