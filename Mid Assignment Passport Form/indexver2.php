<!DOCTYPE html>
<html>
<head>
   <title>Stage 1</title>
   <link rel="stylesheet"  href="st1css.css" > 
</head>
<body>
    <h3 id="header">PASSPORT APPLICATION-STAGE 1</h3>
    <h4 id="h2">Before filling up the online application form read the<div1 id="blueun"> guidelines</div1> carefully.<h4>
    <h5 id="h3">Fiels marked with<div2 id="redit"> (*)</div2>are mandetory.</h5>
    <hr id="marit">
    <br>
    <?php 
     session_start();
    ?>
    <div id="div02">
            <form action="stage1store.php" method="post">
                <table id="table01">
                    <tr>
                        <td colspan="2">
                            <p id="blue"><b>Passport Application Information</b></p>
                        </td>
                        <td>
                            <span id="nmb"><b>Date of Birth:<span id="redit">*</span></b></span>
                        </td>
                        <td>
                            <input type="date" id="text01" size="30" name="dateofbirth"<?php if(!empty($_SESSION['dateofbirth'])) echo "value=".$_SESSION['dateofbirth'];?>>
                            <?php
                                if($_SESSION['db']==1)
                                {
                                echo"<span id='redit'><b>Input Information</b></span>";
                                }
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                        <span id="nmb"><b>Applying In<span id="redit">*</span></b></span>
                        </td>
                        <td>
                            <select  id="op01" name="app_place">
                                 <option value="Bangladesh" <?php if($_SESSION['app_place']=='Bangladesh')echo "selected"; ?>>Bangladesh</option>
                                 <option value="Sewden"<?php if($_SESSION['app_place']=='Sewden')echo "selected"; ?>>Sewden</option>
                            </select>
                        </td>
                        <td rowspan="2">
                            <span id="nmb"><b>Gender:<span id="redit">*</span></b></span>
                           
                        </td>
                        <td rowspan="2">
                            <p>
                                <input type="radio" name="gender" value="male"<?php if($_SESSION['gender']=='male') echo "checked"; ?> >Male<br>
                                <input type="radio" name="gender" value="female"<?php if($_SESSION['gender']=='female') echo "checked"; ?>> Female<br>
                                <input type="radio" name="gender" value="other"<?php if($_SESSION['gender']=='other') echo "checked"; ?>> Other  
                                <?php
                                if($_SESSION['g']==1)
                                {
                                echo"<span id='redit'><b>Input Information</b></span>";
                                }
                            ?>
                        
                            </p>
                            
                        </td>   
                    </tr>
                    <tr><td></td><td></td><td></td><td></td></tr>
                    <tr>
                        <td>
                            <span id="nmb"><b>Application Type:<b></span>
                        </td>
                        <td colspan=2 >
                            <select id="op01" name="app_type">
                                 <option value="New" <?php if($_SESSION['app_type']=='New')echo "selected"; ?>>New</option>
                                 <option value="Reissue"<?php if($_SESSION['app_type']=='Reissue')echo "selected"; ?>>Reissue</option>
                            </select>
                        </td>
                    </tr>
                    <tr><td></td><td></td><td></td><td></td></tr>
                    <tr>
                        <td rowspan=2>
                            <span id="nmb"><b>Passport Type:<span id="redit">*</span></b></span>
                        </td>
                        <td rowspan=2>
                            <select id="op01" name="pass_type">
                                 <option value="" >-select-</option>
                                 <option value="Normal"<?php if($_SESSION['pass_type']=='Normal')echo "selected"; ?>>Normal</option>
                                 <option value="Offical"<?php if($_SESSION['pass_type']=='Official')echo "selected"; ?>>Offical</option>
                                 <option value="Diplomatic"<?php if($_SESSION['pass_type']=='Diplomatic')echo "selected"; ?>>Diplomatic</option>
                                 <?php
                                if($_SESSION['ps']==1)
                                {
                                echo"<span id='redit'><b>Input Information</b></span>";
                                }
                            ?>
                            </select>
                        
                        </td>
                        <td>
                            <span id="nmb"><b>Birth  ID No:<span id="redit">*</span></b></span><br><br>
                        </td>
                        <td>
                             <p>                         
                                <input type="number" id="text01" size="30" name="birthidno" pattern = "[0-9]"<?php if(!empty($_SESSION['birthidno'])) echo "value=".$_SESSION['birthidno'];?>>
                                <?php
                                if($_SESSION['bd']==1)
                                {
                                echo"<span id='redit'><b>Input Information</b></span>";
                                }
                            ?>
                            </p> 
                        </td>
                    </tr>
                    <tr>                       
                        <td>
                             <span id="nmb"><b>National ID No:</b></span>
                        </td>
                        <td>
                            
                             <input type="number" id="text01" size="30" name="niidno" pattern = "[0-9]"<?php if(!empty($_SESSION['niidno'])) echo "value=".$_SESSION['niidno'];?>>
                        </td>
                    </tr>
                    <tr><td></td><td></td><td></td><td></td></tr>
                    <tr>
                        <td>
                            <span id="nmb"><b>Delivary Type:</b></span>
                        </td>
                        <td>
                            <input type="radio" name="delivary_type" value="Normal" <?php if($_SESSION['delivary_type']=='Normal') echo "checked"; ?>>Normal<br>
                            <input type="radio" name="delivary_type" value="Express"<?php if($_SESSION['delivary_type']=='Express') echo "checked"; ?>> Express<br>
                        </td>
                        <td>
                            <span id="nmb"><b>Tax Id No:</b></span>
                        </td>
                        <td>
                             
                             <input type="number" id="text01" size="30" name="taxidno" pattern = "[0-9]" <?php if(!empty($_SESSION['taxidno'])) echo "value=".$_SESSION['taxidno'];?>>

                        </td>
                    </tr>
                    <tr><td></td><td></td><td></td><td></td></tr>
                    <tr>
                        <td colspan="2" rowspan="2">
                            <p id="blue"><b>Personal Information</b></p> 
                        </td>
                        <td>
                            <span id="nmb"><b>Height:<span id="redit">*</span></b></span>
                        </td>
                        <td>
                            <p>
                                
                                <input type="number" id="text01" size="30" name="height_cm" pattern = "[0-9]"<?php if(!empty($_SESSION['height_cm'])) echo "value=".$_SESSION['height_cm'];?>>
                                <?php
                                if($_SESSION['hcm']==1)
                                {
                                echo"<span id='redit'><b>Input Information</b></span>";
                                }
                            ?>
                                <span id="nmb">cm</span>
                                
                                <input type="number" id="text01" size="30" name="height_inch" pattern = "[0-9]"<?php if(!empty($_SESSION['height_inch'])) echo "value=".$_SESSION['height_inch'];?>>
                                <span id="nmb">inch</span>
                                <?php
                                if($_SESSION['hin']==1)
                                {
                                echo"<span id='redit'><b>Input Information</b></span>";
                                }
                            ?>
                            
                            </p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span id="nmb"><b>Religion:<span id="redit">*</span></b></span>
                        </td>
                        <td>
                            <select id="op01" name="religion">
                                 <option hidden value="">-select-</option>
                                 <option value="Islam" <?php if($_SESSION['religion']=='Islam')echo "selected"; ?>>Islam</option>
                                 <option value="Chrishtian"<?php if($_SESSION['religion']=='Chrishtian')echo "selected"; ?>>Chrishtian</option>
                                 <option value="Hindu"<?php if($_SESSION['religion']=='Hindu')echo "selected"; ?>>Hindu</option>
                               
                            </select>
                            <?php
                                if($_SESSION['re']==1)
                                {
                                echo"<span id='redit'><b>Select Religion</b></span>";
                                }
                            ?>
                         
                        </td>
                    </tr>
                    <tr><td></td><td></td><td></td><td></td></tr>
                    <tr>
                        <td>
                            <p id="smb">Name Of</p>
                            <span id="smb">applicant:<span id="redit">*</span></span>
                        </td>
                        <td>
                            
                            <input type="text" id="text01" size="30" name="nameofapplicant" pattern = "[a-zA-Z]*"<?php if(!empty($_SESSION['nameofapplicant'])) echo "value=".$_SESSION['nameofapplicant'];?>>
                            <?php
                                if($_SESSION['nam']==1)
                                {
                                echo"<span id='redit'><b>Input Name</b></span>";
                                }
                            ?>
                        </td>
                        <td>
                             <span id="nmb"><b>Email:<span id="redit">*</span></b></span>
                        </td>
                        <td>
                            
                            <input type="email" id="text01" size="30" name="appliemail"<?php if(!empty($_SESSION['appliemail'])) echo "value=".$_SESSION['appliemail'];?>>
                            <?php
                                if($_SESSION['apm']==1)
                                {
                                echo"<span id='redit'><b>Input Email</b></span>";
                                }
                            ?>
                      
                        </td>
                    </tr>
                    <tr><td></td><td></td><td></td><td></td></tr>
                    <tr>
                        <td>
                            <p id="smb"><b>First Part(Given</b></p>
                            <span id="smb"><b>Name):</b></span>
                        </td>
                        <td>
                            <input type="text" id="text01" size="30" name="givennameofapplicant" pattern = "[a-zA-Z]*"<?php if(!empty($_SESSION['givennameofapplicant'])) echo "value=".$_SESSION['givennameofapplicant'];?>>
                        </td>
                        <td colspan="2" rowspan="2">
                            <p id="blue"><b>Citizenship Information</b></p> 
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p id="smb">Second Part</p>
                            <span id="smb">(surname)<span id="redit">*</span></span>
                        </td>
                        <td>
                            <input type="text" id="text01" size="30" name="surnnameofapplicant" pattern = "[a-zA-Z]*"<?php if(!empty($_SESSION['surnnameofapplicant'])) echo "value=".$_SESSION['surnnameofapplicant'];?>>
                            <?php
                                if($_SESSION['sp']==1)
                                {
                                echo"<span id='redit'><b>Input surname</b></span>";
                                }
                            ?>
                         
                        </td>
                    </tr>
                    <tr><td></td><td></td><td></td><td></td></tr>
                    <tr>
                        <td colspan="2" rowspan="2">
                            <span id="nmb"><b>Gurdian <input type="checkbox" name="adopted" value="yesadopted"><span id="redit">"Tick"</span>only if the Appllicant is legally adapted</b></span> 
                        </td>
                         <td>
                            <span id="nmb"><b>Nationality:<span id="redit">*</span></b></span><br><br>
                        </td>
                        <td>
                            <select  id="op01" name="applinationality_place">
                                <option value="Bangladesh" <?php if($_SESSION['applinationality_place']=='Bangladesh')echo "selected"; ?>>Bangladesh</option>
                                 <option value="Sewden"<?php if($_SESSION['applinationality_place']=='Sewden')echo "selected"; ?>>Sewden</option>
                            
                            </select><br><br>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span id="nmb"><b>Citizenship Status:<span id="redit">*</span></b></span><br><br>
                        </td>
                        <td>
                            <select  id="op01" name="appli_citizenship_status">
                                 <option value="Birth" <?php if($_SESSION['appli_citizenship_status']=='Birth')echo "selected"; ?>>Birth</option>
                                 <option value="Marriage"<?php if($_SESSION['appli_citizenship_status']=='Marriage')echo "selected"; ?>>Marriage</option>
                            </select><br><br>
                        </td>
                    </tr>
                    <tr><td></td><td></td><td></td><td></td></tr>
                    <tr>
                        <td>
                            <span id="nmb"><b>Father's name::<span id="redit">*</span></b></span>
                        </td>
                        <td>
                            <input type="text" id="text01" size="30" name="nameoffather" pattern = "[a-zA-Z]*"<?php if(!empty($_SESSION['nameoffather'])) echo "value=".$_SESSION['nameoffather'];?>>
                            <?php
                                if($_SESSION['gn']==1)
                                {
                                echo"<span id='redit'><b>Input Father Name</b></span>";
                                }
                            ?>
                           
                        </td>
                        <td>
                            <span id="nmb"><b>Duel Citizenship:<span id="redit">*</span></b></span>
                        </td>
                        <td>
                            <input type="radio" name="citizen_ship_type" value="Yes"<?php if($_SESSION['citizen_ship_type']=='Yes') echo "checked"; ?>>Yes<br>
                            <input type="radio" name="citizen_ship_type" value="No"<?php if($_SESSION['citizen_ship_type']=='No') echo "checked"; ?>> No<br>
                            <?php
                                if($_SESSION['cit']==1)
                                {
                                echo"<span id='redit'><b>Select Citizen Ship Type</b></span>";
                                }
                            ?>
                        </td>
                    </tr>
                    <tr><td></td><td></td><td></td><td></td></tr>
                    <tr>
                        <td>
                            <p id="smb"><b>Father's</b></p>
                            <span id="smb"><b>Nationality:<span id="redit">*</span></b></span>
                        </td>
                        <td>
                            <select  id="op01" name="father_nationality">
                                <option value="Bangladesh" <?php if($_SESSION['father_nationality']=='Bangladesh')echo "selected"; ?>>Bangladesh</option>
                                <option value="Sewden"<?php if($_SESSION['father_nationality']=='Sewden')echo "selected"; ?>>Sewden</option>
                            </select><br><br>
                          
                        </td>
                        <td colspan="2" rowspan="2">
                            <p id="blue"><b>Present Address</b></p> 
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p id="smb"><b>Father's</b></p>
                            <span id="smb"><b>Profession:<span id="redit">*</span></b></span>
                        </td>
                        <td>
                            <select  id="op01" name="father_profession">
                                 <option hidden value="">-select-</option>
                                 <option value="Government Service" <?php if($_SESSION['father_profession']=='Government Service')echo "selected"; ?>>Government Service</option>
                                 <option value="Privet Service"<?php if($_SESSION['father_profession']=='Privet Service')echo "selected"; ?>>Privet Service</option>
                                 <option value="Business"<?php if($_SESSION['father_profession']=='Business')echo "selected"; ?>>Business</option>
                           
                            </select><br><br>
                          <?php
                            if($_SESSION['fp']==1)
                                {
                                echo"<span id='redit'><b>Input Father Profession</b></span>";
                                }
                            ?>
                        </td>
                    </tr>
                    <tr><td></td><td></td><td></td><td></td></tr>
                    <tr>
                        <td>
                            <span id="nmb"><b>Mother's name:<span id="redit">*</span></b></span>
                           
                        </td>
                        <td>
                            <input type="text" id="text01" size="30" name="nameofmother" pattern = "[a-zA-Z]*"<?php if(!empty($_SESSION['nameofmother'])) echo "value=".$_SESSION['nameofmother'];?>>
                            <?php
                                    if($_SESSION['mn']==1)
                                {
                                echo"<span id='redit'><b>Input Mother Name</b></span>";
                                }
                            ?>
                          
                        </td>
                        <td>
                            <span id="nmb"><b>Villege/House:</b></span>
                        </td>
                        <td>
                            <input type="text" id="text01" size="30" name="villege/house"<?php if(!empty($_SESSION['villege/house'])) echo "value=".$_SESSION['villege/house'];?>>

                        </td>
                    </tr>
                    <tr><td></td><td></td><td></td><td></td></tr>
                    <tr>
                        <td>
                            <p id="smb"><b>Mother's</b></p>
                            <span id="smb"><b>Nationality:<span id="redit">*</span></b></span>
                           
                        </td>
                        <td>
                            <select  id="op01" name="mother_nationality">
                                <option value="Bangladesh" <?php if($_SESSION['mother_nationality']=='Bangladesh')echo "selected"; ?>>Bangladesh</option>
                                <option value="Sewden"<?php if($_SESSION['mother_nationality']=='Sewden')echo "selected"; ?>>Sewden</option>
                            </select><br><br>
                         
                        </td>
                        <td>
                            <span id="nmb"><b>Road/Block/Sector:</b></span>
                        </td>
                        <td>
                            <input type="text" id="text01" size="30" name="road/block/sector"<?php if(!empty($_SESSION['road/block/sector'])) echo "value=".$_SESSION['road/block/sector'];?>>

                        </td>
                    </tr>
                    <tr><td></td><td></td><td></td><td></td></tr>
                    <tr>
                        <td>
                            <p id="smb"><b>Mother's</b></p>
                            <span id="smb"><b>Profession:<span id="redit">*</span></b></span>
                        </td>
                        <td>
                            <select  id="op01" name="mother_profession">
                                <option hidden value="">-select-</option>
                                 <option value="Government Service" <?php if($_SESSION['mother_profession']=='Government Service')echo "selected"; ?>>Government Service</option>
                                 <option value="Privet Service"<?php if($_SESSION['mother_profession']=='Privet Service')echo "selected"; ?>>Privet Service</option>
                                 <option value="Business"<?php if($_SESSION['mother_profession']=='Business')echo "selected"; ?>>Business</option>
                            </select><br><br>
                            <?php
                                    if($_SESSION['mp']==1)
                                {
                                echo"<span id='redit'><b>Input Mother Profession</b></span>";
                                }
                            ?>
                          
                        </td>
                        <td>
                            <span id="nmb"><b>District:<span id="redit">*</span></b></span><br><br>
                        </td>
                        <td>
                            <select  id="op01" name="district">
                                 <option hidden value="">-select-</option>
                                 <option value="Dhaka" <?php if($_SESSION['district']=='Dhaka')echo "selected"; ?>>Dhaka</option>
                                 <option value="Kustia"<?php if($_SESSION['district']=='kustia')echo "selected"; ?>>Kustia</option>
                                 <option value="Barishal"<?php if($_SESSION['district']=='Barishal')echo "selected"; ?>>Barishal</option>
                            </select><br><br>
                            <?php
                                    if($_SESSION['d']==1)
                                {
                                echo"<span id='redit'><b>Select District</b></span>";
                                }
                            ?>
                          
                        </td>
                    </tr>
                    <tr><td></td><td></td><td></td><td></td></tr>
                    <tr>
                        <td >
                            <span id="nmb"><b>Spouse's name:</b></span>
                        </td>
                        <td >
                            <input type="text" id="text01" size="30" name="nameofspouse" pattern = "[a-zA-Z]*"<?php if(!empty($_SESSION['nameofspouse'])) echo "value=".$_SESSION['nameofspouse'];?>>

                        </td>
                        <td>
                            <span id="nmb"><b>Police Station:<span id="redit">*</span></b></span><br><br>
                        </td>
                         <td>
                            <select  id="op01" name="police">
                                 <option hidden value="">-select-</option>
                                 <option value="Dhaka" <?php if($_SESSION['police']=='Dhaka')echo "selected"; ?>>Dhaka</option>
                                 <option value="Kustia"<?php if($_SESSION['police']=='kustia')echo "selected"; ?>>Kustia</option>
                                 <option value="Barishal"<?php if($_SESSION['police']=='Barishal')echo "selected"; ?>>Barishal</option>
                            </select><br><br>
                            <?php
                                    if($_SESSION['po']==1)
                                {
                                echo"<span id='redit'><b>Select Police Station</b></span>";
                                }
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td></td><td></td>
                        <td>
                            <span id="nmb"><b>Post Office:<span id="redit">*</span></b></span><br><br>
                        </td>
                         <td>
                            <select  id="op01" name="postoffice">
                                 <option hidden value="">-select-</option>
                                 <option value="Dhaka" <?php if($_SESSION['postoffice']=='Dhaka')echo "selected"; ?>>Dhaka</option>
                                 <option value="Kustia"<?php if($_SESSION['postoffice']=='kustia')echo "selected"; ?>>Kustia</option>
                                 <option value="Barishal"<?php if($_SESSION['postoffice']=='Barishal')echo "selected"; ?>>Barishal</option>
                            </select><br><br>
                            <?php
                                    if($_SESSION['pos']==1)
                                {
                                echo"<span id='redit'><b>Select Post Office</b></span>";
                                }
                            ?>
                          
                        </td>
                    </tr>
                    <tr><td></td><td></td><td></td><td></td></tr>
                    <tr>
                    <td>
                            <p id="smb"><b>Spouse's</b></p>
                            <span id="smb"><b>Nationality:</b></span>
                        </td>
                        <td>
                            <select  id="op01" name="spouse_nationality">
                                <option value="Bangladesh" <?php if($_SESSION['spouse_nationality']=='Bangladesh')echo "selected"; ?>>Bangladesh</option>
                                <option value="Sewden"<?php if($_SESSION['spouse_nationality']=='Sewden')echo "selected"; ?>>Sewden</option>
                            </select><br><br>
                        </td>
                        <td colspan="2" rowspan="2">
                            <p id="blue"><b>Permanent Address</b></p> 
                        </td>
                    </tr>
                    <tr>
                         <td>
                            <p id="smb"><b>Spouse's</b></p>
                            <span id="smb"><b>Profession:</b></span>
                        </td>
                        <td>
                            <select  id="op01" name="spouse_profession">
                                <option hidden value="">-select-</option>
                                 <option value="Government Service" <?php if($_SESSION['spouse_profession']=='Government Service')echo "selected"; ?>>Government Service</option>
                                 <option value="Privet Service"<?php if($_SESSION['spouse_profession']=='Privet Service')echo "selected"; ?>>Privet Service</option>
                                 <option value="Business"<?php if($_SESSION['spouse_profession']=='Business')echo "selected"; ?>>Business</option>
                            </select><br><br>
                        </td>
                    </tr>
                    <tr><td></td><td></td><td></td><td></td></tr>
                    <tr>
                        <td>
                            <span id="nmb"><b>Marital Status:<span id="redit">*</span></b></span><br><br>
                        </td>
                        <td>
                            <select  id="op01" name="marital_status">
                                 <option hidden value="">-select-</option>
                                 <option value="Married"<?php if($_SESSION['marital_status']=='Married')echo "selected"; ?> >Married</option>
                                 <option value="Single"<?php if($_SESSION['marital_status']=='Single')echo "selected"; ?>>Single</option>
                            </select><br><br>
                            <?php
                                    if($_SESSION['mts']==1)
                                {
                                echo"<span id='redit'><b>Select Status</b></span>";
                                }
                            ?>
                           
                        </td>
                        <td colspan="2">
                            <p id="nmb"><b><input type="checkbox" name="addresssameas" value="yessame">Same as above</b></p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p id="smb"><b>Applicant's</b></p>
                            <span id="smb"><b>Profession:<span id="redit">*</span></b></span>
                        </td>
                        <td>
                            <select  id="op01" name="applicant_profession">
                                <option hidden value="">-select-</option>
                                 <option value="Government Service" <?php if($_SESSION['applicant_profession']=='Government Service')echo "selected"; ?>>Government Service</option>
                                 <option value="Privet Service"<?php if($_SESSION['applicant_profession']=='Privet Service')echo "selected"; ?>>Privet Service</option>
                                 <option value="Business"<?php if($_SESSION['applicant_profession']=='Business')echo "selected"; ?>>Business</option>
                            </select><br><br>
                            <?php
                                    if($_SESSION['apf']==1)
                                {
                                echo"<span id='redit'><b>Select Profession</b></span>";
                                }
                            ?>
                          
                        </td>
                        <td>
                            <span id="nmb"><b>Villege/House:</b></span>
                        </td>
                        <td>
                            <input type="text" id="text01" size="30" name="pmvillege/house"<?php if(!empty($_SESSION['pmvillege/house'])) echo "value=".$_SESSION['pmvillege/house'];?>>

                        </td>
                    </tr>
                    <tr>
                        <td></td><td></td>
                        <td>
                            <span id="nmb"><b>Road/Block/Sector:</b></span>
                        </td>
                        <td>
                            <input type="text" id="text01" size="30" name="pmroad/block/sector"<?php if(!empty($_SESSION['pmroad/block/sector'])) echo "value=".$_SESSION['pmroad/block/sector'];?>>

                        </td>
                    </tr>
                    <tr><td></td><td></td><td></td><td></td></tr>
                    <tr>
                         <td>
                            <p id="smb"><b>Country</b></p>
                            <span id="smb"><b>of birth:<span id="redit">*</span></b></span>
                        </td>
                        <td>
                            <select  id="op01" name="birth_country">
                                <option value="Bangladesh" <?php if($_SESSION['birth_country']=='Bangladesh')echo "selected"; ?>>Bangladesh</option>
                                <option value="Sewden"<?php if($_SESSION['birth_country']=='Sewden')echo "selected"; ?>>Sewden</option>
                            </select><br><br>
                         
                        </td>
                        <td>
                            <span id="nmb"><b>District:<span id="redit">*</span></b></span><br><br>
                        </td>
                        <td>
                            <select  id="op01" name="pmdistrict">
                                 <option hidden value="">-select-</option>
                                 <option value="Dhaka" <?php if($_SESSION['pmdistrict']=='Dhaka')echo "selected"; ?>>Dhaka</option>
                                 <option value="Kustia"<?php if($_SESSION['pmdistrict']=='kustia')echo "selected"; ?>>Kustia</option>
                                 <option value="Barishal"<?php if($_SESSION['pmdistrict']=='Barishal')echo "selected"; ?>>Barishal</option>
                            </select><br><br>
                            <?php
                                    if($_SESSION['pmdis']==1)
                                {
                                echo"<span id='redit'><b>Select District</b></span>";
                                }
                            ?>
                           
                        </td>
                    </tr>
                    <tr><td></td><td></td><td></td><td></td></tr>
                    <tr>
                        <td>
                            <span id="nmb"><b>Birth District:<span id="redit">*</span></b></span><br><br>
                        </td>
                        <td>
                            <select  id="op01" name="birthdistrict">
                                 <option hidden value="">-select-</option>
                                 <option value="Dhaka" <?php if($_SESSION['birthdistrict']=='Dhaka')echo "selected"; ?>>Dhaka</option>
                                 <option value="Kustia"<?php if($_SESSION['birthdistrict']=='kustia')echo "selected"; ?>>Kustia</option>
                                 <option value="Barishal"<?php if($_SESSION['birthdistrict']=='Barishal')echo "selected"; ?>>Barishal</option>
                            </select><br><br>
                            <?php
                                    if($_SESSION['bdd']==1)
                                {
                                echo"<span id='redit'><b>Select District</b></span>";
                                }
                            ?>
                          
                        </td>
                        <td>
                            <span id="nmb"><b>Police Station:<span id="redit">*</span></b></span><br><br>
                        </td>
                        <td>
                            <select  id="op01" name="pmpolice">
                                <option hidden value="">-select-</option>
                                 <option value="Dhaka" <?php if($_SESSION['pmpolice']=='Dhaka')echo "selected"; ?>>Dhaka</option>
                                 <option value="Kustia"<?php if($_SESSION['pmpolice']=='kustia')echo "selected"; ?>>Kustia</option>
                                 <option value="Barishal"<?php if($_SESSION['pmpolice']=='Barishal')echo "selected"; ?>>Barishal</option>
                            </select><br><br>
                            <?php
                                    if($_SESSION['pp']==1)
                                {
                                echo"<span id='redit'><b>Select Police Station</b></span>";
                                }
                            ?>
                           
                        </td>
                    </tr>
                    <tr>
                        <td></td><td></td>
                        <td>
                            <span id="nmb"><b>Post Office:<span id="redit">*</span></b></span><br><br>
                        </td>
                         <td>
                            <select  id="op01" name="pmpostoffice">
                                <option hidden value="">-select-</option>
                                 <option value="Dhaka" <?php if($_SESSION['pmpostoffice']=='Dhaka')echo "selected"; ?>>Dhaka</option>
                                 <option value="Kustia"<?php if($_SESSION['pmpostoffice']=='kustia')echo "selected"; ?>>Kustia</option>
                                 <option value="Barishal"<?php if($_SESSION['pmpostoffice']=='Barishal')echo "selected"; ?>>Barishal</option>
                            </select><br><br>
                            <?php
                                    if($_SESSION['ppos']==1)
                                {
                                echo"<span id='redit'><b>Select Post Office</b></span>";
                                }
                            ?>
                           
                        </td>
                    </tr>
                    <tr><td></td><td></td><td></td><td></td></tr>
                    <tr><td></td><td></td><td></td><td></td></tr>
                    <tr>
                        <td></td><td></td>
                        <td ></td>
                         <td align="right" >
                            <input class="button01" type="submit" value="SAVE NOW & CONTINUE IN THE FUTURE" name="sc">  
                            <input class="button01" type="submit" value="Save & Next" name="save">  
                       </td>
                    </tr>
                </table>
            </form>
    </div>
   
</body>
</html>