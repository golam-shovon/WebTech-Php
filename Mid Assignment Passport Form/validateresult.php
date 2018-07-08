<!DOCTYPE html>
<html>
<head>
   <title>Error Check</title>
   <link rel="stylesheet"  href="st1css.css" > 
</head>
<body>
    <h3 id="header">PASSPORT APPLICATION Final Stage</h3>
    <h4 id="h2">Before filling up the online application form read the<div1 id="blueun"> guidelines</div1> carefully.<h4>
    <h5 id="h3">Fiels marked with<div2 id="redit"> (*)</div2>are mandetory.</h5>
    <hr id="marit">
    <?php
          session_start();
    ?>
    <br>
    <div id="div02">
        <table id="table01">
            <?php
                if($_SESSION['Flag 1']==1)
                {
                    echo"
                <tr>
                    <td colspan='4'>
                        <p id='blue'><b>Input Some Information Information In Stage 1</b></p>
                    </td>
                </tr>
                <tr></tr><tr></tr>
                "; 
                }
               
          
                if($_SESSION['g']==1)
               {
                  echo"
                <tr>
                    <td colspan='2'>
                        <p id='nmb'><b>Input Gender In Stage 1</b></p>
                    </td>
                    <td colspan='2'>
                        <a href='indexver2.php' class='button01'>GO TO PAGE</a>
                    </td>
                </tr>
                <tr></tr><tr></tr>
                ";
               };
            
              
                if($_SESSION['db']==1)
                {
                     echo"
                <tr>
                    <td colspan='2'>
                        <p id='nmb'><b>Input Date Of Birth In Stage 1</b></p>
                    </td>
                    <td colspan='2'>
                        <a href='indexver2.php' class='button01'>GO TO PAGE</a>
                    </td>
                </tr>
                <tr></tr><tr></tr>
                ";
                }
                if($_SESSION['ps']==1)
                {
                   echo"
                <tr>
                    <td colspan='2'>
                        <p id='nmb'><b>Input Passport Type In Stage 1</b></p>
                    </td>
                    <td colspan='2'>
                        <a href='indexver2.php' class='button01'>GO TO PAGE</a>
                    </td>
                </tr>
                <tr></tr><tr></tr>
                "; 
                }
                
           
                if($_SESSION['bd']==1)
                {
                 echo"
                <tr>
                    <td colspan='2'>
                        <p id='nmb'><b>Input BirthId  In Stage 1</b></p>
                    </td>
                    <td colspan='2'>
                        <a href='indexver2.php' class='button01'>GO TO PAGE</a>
                    </td>
                </tr>
                <tr></tr><tr></tr>
                ";
                }

                
          
                if($_SESSION['hcm']==1)
                {
                     echo"
                <tr>
                    <td colspan='2'>
                        <p id='nmb'><b>Input Heigh In Cm In Stage 1</b></p>
                    </td>
                    <td colspan='2'>
                        <a href='indexver2.php' class='button01'>GO TO PAGE</a>
                    </td>
                </tr>
                <tr></tr><tr></tr>
                "; 
                }
              
            
                if($_SESSION['hin']==1)
                {
                    echo"
                <tr>
                    <td colspan='2'>
                        <p id='nmb'><b>Input Height In Inch In Stage 1</b></p>
                    </td>
                    <td colspan='2'>
                        <a href='indexver2.php' class='button01'>GO TO PAGE</a>
                    </td>
                </tr>
                <tr></tr><tr></tr>
                "; 
                }
               
            
                if($_SESSION['re']==1)
                {
                    echo"
                <tr>
                    <td colspan='2'>
                        <p id='nmb'><b>Input Religion In Stage 1</b></p>
                    </td>
                    <td colspan='2'>
                        <a href='indexver2.php' class='button01'>GO TO PAGE</a>
                    </td>
                </tr>
                <tr></tr><tr></tr>
                ";  
                }
              
            
                if($_SESSION['nam']==1)
                {
                echo"
                <tr>
                    <td colspan='2'>
                        <p id='nmb'><b>Input Name Of the Applicant In Stage 1</b></p>
                    </td>
                    <td colspan='2'>
                        <a href='indexver2.php' class='button01'>GO TO PAGE</a>
                    </td>
                </tr>
                <tr></tr><tr></tr>
                ";

                }
                
           
                if($_SESSION['apm']==1)
                {
                echo"
                <tr>
                    <td colspan='2'>
                        <p id='nmb'><b>Input Applicant Email  In Stage 1</b></p>
                    </td>
                    <td colspan='2'>
                        <a href='indexver2.php' class='button01'>GO TO PAGE</a>
                    </td>
                </tr>
                <tr></tr><tr></tr>
                "; 
                }
               
            
                if($_SESSION['sp']==1)
                {
                     echo"
                <tr>
                    <td colspan='2'>
                        <p id='nmb'><b>Input Applicant Sur Name In Stage 1</b></p>
                    </td>
                    <td colspan='2'>
                        <a href='indexver2.php' class='button01'>GO TO PAGE</a>
                    </td>
                </tr>
                <tr></tr><tr></tr>
                ";
                }
               
          
                if($_SESSION['gn']==1)
                {
                  echo"
                <tr>
                    <td colspan='2'>
                        <p id='nmb'><b>Input Applicant Father Name  In Stage 1</b></p>
                    </td>
                    <td colspan='2'>
                        <a href='indexver2.php' class='button01'>GO TO PAGE</a>
                    </td>
                </tr>
                <tr></tr><tr></tr>
                ";  
                }
                
        
                if($_SESSION['fp']==1)
                {
                     echo"
                <tr>
                    <td colspan='2'>
                        <p id='nmb'><b>Input Father Profession  In Stage 1</b></p>
                    </td>
                    <td colspan='2'>
                        <a href='indexver2.php' class='button01'>GO TO PAGE</a>
                    </td>
                </tr>
                <tr></tr><tr></tr>
                ";
                }
               
           
                if($_SESSION['mn']==1)
                {
                    echo"
                <tr>
                    <td colspan='2'>
                        <p id='nmb'><b>Input Applicant Mother Name In Stage 1</b></p>
                    </td>
                    <td colspan='2'>
                        <a href='indexver2.php' class='button01'>GO TO PAGE</a>
                    </td>
                </tr>
                <tr></tr><tr></tr>
                "; 
                }
               
          
                if($_SESSION['mp']==1)
                {
                 echo"
                <tr>
                    <td colspan='2'>
                        <p id='nmb'><b>Input Applicant Mother Profession  In Stage 1</b></p>
                    </td>
                    <td colspan='2'>
                        <a href='indexver2.php' class='button01'>GO TO PAGE</a>
                    </td>
                </tr>
                <tr></tr><tr></tr>
                ";
                }
                
         
                if($_SESSION['d']==1)
                {
                   echo"
                <tr>
                    <td colspan='2'>
                        <p id='nmb'><b>Input Applicant Present Addres District  In Stage 1</b></p>
                    </td>
                    <td colspan='2'>
                        <a href='indexver2.php' class='button01'>GO TO PAGE</a>
                    </td>
                </tr>
                <tr></tr><tr></tr>
                "; 
                }
                
         
                if($_SESSION['po']==1)
                {
                     echo"
                <tr>
                    <td colspan='2'>
                        <p id='nmb'><b>Input Applicant Present Address Police Station  In Stage 1</b></p>
                    </td>
                    <td colspan='2'>
                        <a href='indexver2.php' class='button01'>GO TO PAGE</a>
                    </td>
                </tr>
                <tr></tr><tr></tr>
                ";
                }
               
          
                if($_SESSION['pos']==1)
                {
                 echo"
                <tr>
                    <td colspan='2'>
                        <p id='nmb'><b>Input Applicant Present Address Post Office In Stage 1</b></p>
                    </td>
                    <td colspan='2'>
                        <a href='indexver2.php' class='button01'>GO TO PAGE</a>
                    </td>
                </tr>
                <tr></tr><tr></tr>
                ";
                }
               
       
                if($_SESSION['mts']==1)
                {
                 echo"
                <tr>
                    <td colspan='2'>
                        <p id='nmb'><b>Input Applicant Marital Status In Stage 1</b></p>
                    </td>
                    <td colspan='2'>
                        <a href='indexver2.php' class='button01'>GO TO PAGE</a>
                    </td>
                </tr>
                <tr></tr><tr></tr>
                "; 
                }
                 if($_SESSION['apf']==1)
                 {
                    echo"
                <tr>
                    <td colspan='2'>
                        <p id='nmb'><b>Input Applicant Profession  In Stage 1</b></p>
                    </td>
                    <td colspan='2'>
                        <a href='indexver2.php' class='button01'>GO TO PAGE</a>
                    </td>
                </tr>
                <tr></tr><tr></tr>
                ";  
                 }
                if($_SESSION['pmdis']==1)
                {
                  echo"
                <tr>
                    <td colspan='2'>
                        <p id='nmb'><b>Input Applicant Permanent Address District In Stage 1</b></p>
                    </td>
                    <td colspan='2'>
                        <a href='indexver2.php' class='button01'>GO TO PAGE</a>
                    </td>
                </tr>
                <tr></tr><tr></tr>
                ";
                }
                if($_SESSION['bdd']==1)
                {
                    echo"
                <tr>
                    <td colspan='2'>
                        <p id='nmb'><b>Input Applicant Birth District In Stage 1</b></p>
                    </td>
                    <td colspan='2'>
                        <a href='indexver2.php' class='button01'>GO TO PAGE</a>
                    </td>
                </tr>
                <tr></tr><tr></tr>
                "; 
                }     
                if($_SESSION['pp']==1)
                {
                   echo"
                <tr>
                    <td colspan='2'>
                        <p id='nmb'><b>Input Applicant Permanent Address Police Station In Stage 1</b></p>
                    </td>
                    <td colspan='2'>
                        <a href='indexver2.php' class='button01'>GO TO PAGE</a>
                    </td>
                </tr>
                <tr></tr><tr></tr>
                ";  
                }              
                if($_SESSION['ppos']==1)
                {
                  echo"
                <tr>
                    <td colspan='2'>
                        <p id='nmb'><b>Input Applicant Permanent Address Police Station In Stage 1</b></p>
                    </td>
                    <td colspan='2'>
                        <a href='indexver2.php' class='button01'>GO TO PAGE</a>
                    </td>
                </tr>
                <tr></tr><tr></tr>
                ";  
                }
                if($_SESSION['Flag 2']==1)
                {
                    echo"
                <tr>
                    <td colspan='4'>
                        <p id='blue'><b>Input Some Information Information In Stage 2</b></p>
                    </td>
                </tr>
                <tr></tr><tr></tr>
                "; 
                }
                if($_SESSION['emn']==1)
                {
                  echo"
                <tr>
                    <td colspan='2'>
                        <p id='nmb'><b>Input Applicant  Emergency Contact Name In Stage 2</b></p>
                    </td>
                    <td colspan='2'>
                        <a href='stage2ver2.php' class='button01'>GO TO PAGE</a>
                    </td>
                </tr>
                <tr></tr><tr></tr>
                ";  
                }
                if($_SESSION['emc']==1)
                {
                  echo"
                <tr>
                    <td colspan='2'>
                        <p id='nmb'><b>Input Applicant  Emergency Contact Country In Stage 2</b></p>
                    </td>
                    <td colspan='2'>
                        <a href='stage2ver2.php' class='button01'>GO TO PAGE</a>
                    </td>
                </tr>
                <tr></tr><tr></tr>
                ";  
                }
                if($_SESSION['emd']==1)
                {
                  echo"
                <tr>
                    <td colspan='2'>
                        <p id='nmb'><b>Input Applicant  Emergency Contact District In Stage 2</b></p>
                    </td>
                    <td colspan='2'>
                        <a href='stage2ver2.php' class='button01'>GO TO PAGE</a>
                    </td>
                </tr>
                <tr></tr><tr></tr>
                ";  
                }
                if($_SESSION['emp']==1)
                {
                  echo"
                <tr>
                    <td colspan='2'>
                        <p id='nmb'><b>Input Applicant  Emergency Contact Police Station In Stage 2</b></p>
                    </td>
                    <td colspan='2'>
                        <a href='stage2ver2.php' class='button01'>GO TO PAGE</a>
                    </td>
                </tr>
                <tr></tr><tr></tr>
                ";  
                }
                if($_SESSION['empos']==1)
                {
                  echo"
                <tr>
                    <td colspan='2'>
                        <p id='nmb'><b>Input Applicant  Emergency Contact Post Office In Stage 2</b></p>
                    </td>
                    <td colspan='2'>
                        <a href='stage2ver2.php' class='button01'>GO TO PAGE</a>
                    </td>
                </tr>
                <tr></tr><tr></tr>
                ";  
                }
                if($_SESSION['emcon']==1)
                {
                  echo"
                <tr>
                    <td colspan='2'>
                        <p id='nmb'><b>Input Applicant  Emergency Contact Phone Number In Stage 2</b></p>
                    </td>
                    <td colspan='2'>
                        <a href='stage2ver2.php' class='button01'>GO TO PAGE</a>
                    </td>
                </tr>
                <tr></tr><tr></tr>
                ";  
                }
                if($_SESSION['eme']==1)
                {
                  echo"
                <tr>
                    <td colspan='2'>
                        <p id='nmb'><b>Input Applicant  Emergency Contact Email In Stage 2</b></p>
                    </td>
                    <td colspan='2'>
                        <a href='stage2ver2.php' class='button01'>GO TO PAGE</a>
                    </td>
                </tr>
                <tr></tr><tr></tr>
                ";  
                }
                if($_SESSION['emre']==1)
                {
                echo"
                <tr>
                    <td colspan='2'>
                        <p id='nmb'><b>Input Applicant  Emergency Contact Relation In Stage 2</b></p>
                    </td>
                    <td colspan='2'>
                        <a href='stage2ver2.php' class='button01'>GO TO PAGE</a>
                    </td>
                </tr>
                <tr></tr><tr></tr>
                ";  
                }
                if(empty($_POST['skippay']))
                {
                    echo"
                     <tr>
                         <td colspan='4'>
                        <p id='blue'><b>Input Some Information Information In Stage 3</b></p>
                     </td>
                     </tr>
                    <tr></tr><tr></tr>
                     "; 
                    if($_SESSION['ammn']==1 ||!is_numeric($_SESSION['amount']))
                    {
                    echo"
                    <tr>
                        <td colspan='2'>
                            <p id='nmb'><b>Input Amount In Stage 3</b></p>
                        </td>
                        <td colspan='2'>
                             <a href='stage3ver2.php' class='button01'>GO TO PAGE</a>
                        </td>
                    </tr>
                    <tr></tr><tr></tr>
                         ";  
                     }
                        if($_SESSION['dap']==1)
                        {
                        echo"
                        <tr>
                            <td colspan='2'>
                                <p id='nmb'><b>Input paymentdate In Stage 3</b></p>
                            </td>
                            <td colspan='2'>
                                <a href='stage3ver2.php' class='button01'>GO TO PAGE</a>
                            </td>
                        </tr>
                        <tr></tr><tr></tr>
                        ";  
                        }
                
                        if($_SESSION['rep']==1||!is_numeric($_SESSION['receiptno']))
                        {
                        echo"
                        <tr>
                            <td colspan='2'>
                                <p id='nmb'><b>Input Receipt Np In Stage 3</b></p>
                            </td>
                            <td colspan='2'>
                                <a href='stage3ver2.php' class='button01'>GO TO PAGE</a>
                            </td>
                        </tr>
                        <tr></tr><tr></tr>
                        ";  
                        }
                    }
                    
                
                
                 
                echo"
                <tr>
                    <td colspan='3'>
                        <p id='blue'><b>Show The Complete File</b></p>
                    </td>
                    <td>
                        <a href='show.php' class='button01'>Show</a>
                    </td>
                </tr>
                <tr></tr><tr></tr>"
                
            ?>  
           
             
             

                   
        </table>
    </div>
</body>
</html>