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
    <?php
        session_start();
        $_SESSION['g'];
        $_SESSION['db'];
        $_SESSION['ap'];
        $_SESSION['ps'];
        $_SESSION['bd'];
        $_SESSION['hcm'];
        $_SESSION['hin'];
        $_SESSION['re'];
        $_SESSION['nam'];
        $_SESSION['apm'];
        $_SESSION['sp'];
        $_SESSION['gn'];
        $_SESSION['cit'];
        $_SESSION['fn'];
        $_SESSION['fp'];
        $_SESSION['mn'];
        $_SESSION['mni'];
        $_SESSION['mp'];
        $_SESSION['d'];
        $_SESSION['po'];
        $_SESSION['pos'];
        $_SESSION['mts'];
        $_SESSION['apf'];
        $_SESSION['brc'];
        $_SESSION['pmdis'];
        $_SESSION['bdd'];
        $_SESSION['pp'];
        $_SESSION['ppos'];
    ?>
    <br>
    <div id="div02">
            <form action="stage1validate.php" method="post">
                <table id="table01">
                    <tr>
                        <td colspan="2">
                            <p id="blue"><b>Passport Application Information</b></p>
                        </td>
                        <td>
                            <span id="nmb"><b>Date of Birth:<span id="redit">*</span></b></span>
                        </td>
                        <td>
                            <p>
                             <input type="date" id="text01" size="30" name="dateofbirth"><br>


                             <?php
                                 if($_SESSION['db']==1)
                                 {
                                    echo '<span id="redit">Please Input Birthdate</span>';
                                 }
                              ?>
                            </p>  
                        </td>
                    </tr>
                    <tr>
                        <td>
                        <span id="nmb"><b>Applying In<span id="redit">*</span></b></span>
                        </td>
                        <td>
                            <select  id="op01" name="app_place">
                                 <option value="Bangladesh" selected>Bangladesh</option>
                                 <option value="Sewden">Sewden</option>
                            </select>
                        </td>
                        <td rowspan="2">
                            <span id="nmb"><b>Gender:<span id="redit">*</span></b></span>
                           
                        </td>
                        <td rowspan="2">
                            <p>
                                <input type="radio" name="gender" value="male" >Male<br>
                                <input type="radio" name="gender" value="female"> Female<br>
                                <input type="radio" name="gender" value="other"> Other  
                                <?php
                                if($_SESSION['g']==1)
                                {
                                    echo '<span id="redit">Please Select Gender</span>';
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
                                 <option value="New" selected>New</option>
                                 <option value="Reissue">Reissue</option>
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
                                 <option value="Normal" >Normal</option>
                                 <option value="Offical">Offical</option>
                                 <option value="Diplomatic">Diplomatic</option>
                            </select>
                            <?php
                                 
                                 if($_SESSION['ps']==1)
                                 {
                                    echo '<span id="redit">Please Select an option</span>';
                                 }
                              ?>
                        </td>
                        <td>
                            <span id="nmb"><b>Birth  ID No:<span id="redit">*</span></b></span><br><br>
                        </td>
                        <td>
                             <p>
                                 <input type="text" id="text01" size="30" name="birthidno"><br><br>
                                 <?php
                                    if($_SESSION['bd']==1)
                                    {
                                       echo '<span id="redit">Please Input Birth ID</span>';
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
                             <input type="text" id="text01" size="30" name="niidno">
                        </td>
                    </tr>
                    <tr><td></td><td></td><td></td><td></td></tr>
                    <tr>
                        <td>
                            <span id="nmb"><b>Delivary Type:</b></span>
                        </td>
                        <td>
                            <input type="radio" name="delivary_type" value="Normal" >Normal<br>
                            <input type="radio" name="delivary_type" value="Express"> Express<br>
                        </td>
                        <td>
                            <span id="nmb"><b>Tax Id No:</b></span>
                        </td>
                        <td>
                             <input type="text" id="text01" size="30" name="taxidno">
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
                                <input type="text" id="text02" size="30" name="height_cm">
                                <span id="nmb">cm</span>
                                <input type="text" id="text02" size="30" name="height_inch">
                                <span id="nmb">inch</span>
                                <?php
                                if($_SESSION['hcm']==1||$_SESSION['hin']==1)
                                 {
                                    echo '<span id="redit">Please Input Height</span>';
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
                                 <option value="Islam" >Islam</option>
                                 <option value="Chrishtian">Chrishtian</option>
                                 <option value="Hindu">Hindu</option>
                            </select> 
                            <?php
                                 if($_SESSION['db']==1)
                                 {
                                    echo '<span id="redit">Please Input Reliogion</span>';
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
                            <input type="text" id="text01" size="30" name="nameofapplicant">
                            <?php
                                if($_SESSION['nam']==1)
                                  {
                                     echo '<span id="redit">Please Input Name </span>';
                                  }
                            ?>
                        </td>
                        <td>
                             <span id="nmb"><b>Email:<span id="redit">*</span></b></span>
                        </td>
                        <td>
                            <input type="text" id="text01" size="30" name="appliemail"> 
                            <?php
                                if($_SESSION['apm']==1)
                                  {
                                     echo '<span id="redit">Please Input E-Mail</span>';
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
                            <input type="text" id="text01" size="30" name="givennameofapplicant">
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
                            <input type="text" id="text01" size="30" name="surnnameofapplicant">
                            <?php
                                if($_SESSION['sp']==1)
                                  {
                                     echo '<span id="redit">Please Input Surname</span>';
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
                                 <option value="Bangladesh" selected>Bangladesh</option>
                                 <option value="Sewden">Sewden</option>
                            </select><br><br>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span id="nmb"><b>Citizenship Status:<span id="redit">*</span></b></span><br><br>
                        </td>
                        <td>
                            <select  id="op01" name="appli_citizenship_status">
                                 <option value="Birth" selected>Birth</option>
                                 <option value="Marriage">Marriage</option>
                            </select><br><br>
                        </td>
                    </tr>
                    <tr><td></td><td></td><td></td><td></td></tr>
                    <tr>
                        <td>
                            <span id="nmb"><b>Father's name::<span id="redit">*</span></b></span>
                        </td>
                        <td>
                            <input type="text" id="text01" size="30" name="nameoffather">
                            <?php
                                if($_SESSION['sp']==1)
                                  {
                                     echo '<span id="redit">Please Input Father name</span>';
                                  }
                            ?> 
                        </td>
                        <td>
                            <span id="nmb"><b>Duel Citizenship:<span id="redit">*</span></b></span>
                        </td>
                        <td>
                            <input type="radio" name="citizen_ship_type" value="Yes" >Yes<br>
                            <input type="radio" name="citizen_ship_type" value="No"> No<br>
                            <?php
                                if($_SESSION['cit']==1)
                                  {
                                     echo '<span id="redit">Please Select </span>';
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
                                 <option value="Bangladesh" selected>Bangladesh</option>
                                 <option value="Sewden">Sewden</option>
                            </select><br><br>
                            <?php
                                if($_SESSION['fn']==1)
                                  {
                                     echo '<span id="redit">Please Input Father Name </span>';
                                  }
                            ?> 
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
                                 <option value="Government Service" >Government Service</option>
                                 <option value="Privaet Service">Privaet Service</option>
                                 <option value="Business">Business</option>
                            </select><br><br>
                            <?php
                                if($_SESSION['fp']==1)
                                  {
                                     echo '<span id="redit">Please Input Father Profession </span>';
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
                            <input type="text" id="text01" size="30" name="nameofmother">
                            <?php
                                if($_SESSION['mn']==1)
                                  {
                                     echo '<span id="redit">Please Input Mother Name </span>';
                                  }
                            ?>
                        </td>
                        <td>
                            <span id="nmb"><b>Villege/House:</b></span>
                        </td>
                        <td>
                            <input type="text" id="text01" size="30" name="villege/house">
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
                                 <option value="Bangladesh" selected>Bangladesh</option>
                                 <option value="Sewden">Sewden</option>
                            </select><br><br>
                            <?php
                                if($_SESSION['mn']==1)
                                  {
                                     echo '<span id="redit">Please Input Mother Nationality </span>';
                                  }
                            ?>
                        </td>
                        <td>
                            <span id="nmb"><b>Road/Block/Sector:</b></span>
                        </td>
                        <td>
                            <input type="text" id="text01" size="30" name="road/block/sector">
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
                                 <option value="Government Service" >Government Service</option>
                                 <option value="Privaet Service">Privaet Service</option>
                                 <option value="Business">Business</option>
                            </select><br><br>
                            <?php
                                if($_SESSION['mp']==1)
                                  {
                                     echo '<span id="redit">Please Input Mother Profession </span>';
                                  }
                            ?>
                        </td>
                        <td>
                            <span id="nmb"><b>District:<span id="redit">*</span></b></span><br><br>
                        </td>
                        <td>
                            <select  id="op01" name="district">
                                 <option hidden value="">-select-</option>
                                 <option value="Dhaka" >Dhaka</option>
                                 <option value="Kustia">Kustia</option>
                                 <option value="Barishal">Barishal</option>
                            </select><br><br>
                            <?php
                                if($_SESSION['d']==1)
                                  {
                                     echo '<span id="redit">Please Select District </span>';
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
                            <input type="text" id="text01" size="30" name="nameofspouse">
                        </td>
                        <td>
                            <span id="nmb"><b>Police Station:<span id="redit">*</span></b></span><br><br>
                        </td>
                         <td>
                            <select  id="op01" name="police">
                                 <option hidden value=""></option>
                                 <option value="Dhaka" >Dhaka</option>
                                 <option value="Kustia">Kustia</option>
                                 <option value="Barishal">Barishal</option>
                            </select><br><br>
                            <?php
                                if($_SESSION['po']==1)
                                  {
                                     echo '<span id="redit">Please Select Police Station </span>';
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
                                 <option hidden value=""></option>
                                 <option value="Dhaka" >Dhaka</option>
                                 <option value="Kustia">Kustia</option>
                                 <option value="Barishal">Barishal</option>
                            </select><br><br>
                            <?php
                                if($_SESSION['pos']==1)
                                  {
                                     echo '<span id="redit">Please Select Post Office </span>';
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
                                <option hidden>-select-</option>
                                 <option value="Bangladesh" >Bangladesh</option>
                                 <option value="Sewden">Sewden</option>
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
                                 <option hidden>-select-</option>
                                 <option value="Government Service" >Government Service</option>
                                 <option value="Privaet Service">Privaet Service</option>
                                 <option value="Business">Business</option>
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
                                 <option value="Married" >Married</option>
                                 <option value="Single">Single</option>
                            </select><br><br>
                            <?php
                                if($_SESSION['mts']==1)
                                  {
                                     echo '<span id="redit">Please Select </span>';
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
                                 <option value="Government Service" >Government Service</option>
                                 <option value="Privaet Service">Privaet Service</option>
                                 <option value="Business">Business</option>
                            </select><br><br>
                            <?php
                                if($_SESSION['apf']==1)
                                  {
                                     echo '<span id="redit">Please Select Profession </span>';
                                  }
                            ?>
                        </td>
                        <td>
                            <span id="nmb"><b>Villege/House:</b></span>
                        </td>
                        <td>
                            <input type="text" id="text01" size="30" name="pmvillege/house">
                        </td>
                    </tr>
                    <tr>
                        <td></td><td></td>
                        <td>
                            <span id="nmb"><b>Road/Block/Sector:</b></span>
                        </td>
                        <td>
                            <input type="text" id="text01" size="30" name="pmroad/block/sector">
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
                                 <option value="Bangladesh" selected >Bangladesh</option>
                                 <option value="Sewden">Sewden</option>
                            </select><br><br>
                            <?php
                                if($_SESSION['brc']==1)
                                  {
                                     echo '<span id="redit">Please Select </span>';
                                  }
                            ?>
                        </td>
                        <td>
                            <span id="nmb"><b>District:<span id="redit">*</span></b></span><br><br>
                        </td>
                        <td>
                            <select  id="op01" name="pmdistrict">
                                 <option hidden value="">-select-</option>
                                 <option value="Dhaka" >Dhaka</option>
                                 <option value="Kustia">Kustia</option>
                                 <option value="Barishal">Barishal</option>
                            </select><br><br>
                            <?php
                                if($_SESSION['pmdis']==1)
                                  {
                                     echo '<span id="redit">Please Select</span>';
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
                                 <option value="Dhaka" >Dhaka</option>
                                 <option value="Kustia">Kustia</option>
                                 <option value="Barishal">Barishal</option>
                            </select><br><br>
                            <?php
                                if($_SESSION['bdd']==1)
                                  {
                                     echo '<span id="redit">Please Select</span>';
                                  }
                            ?>
                        </td>
                        <td>
                            <span id="nmb"><b>Police Station:<span id="redit">*</span></b></span><br><br>
                        </td>
                        <td>
                            <select  id="op01" name="pmpolice">
                                 <option hidden></option>
                                 <option value="Dhaka" >Dhaka</option>
                                 <option value="Kustia">Kustia</option>
                                 <option value="Barishal">Barishal</option>
                            </select><br><br>
                            <?php
                                if($_SESSION['pp']==1)
                                  {
                                     echo '<span id="redit">Please Select</span>';
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
                                 <option hidden></option>
                                 <option value="Dhaka" >Dhaka</option>
                                 <option value="Kustia">Kustia</option>
                                 <option value="Barishal">Barishal</option>
                            </select><br><br>
                            <?php
                                if($_SESSION['ppos']==1)
                                  {
                                     echo '<span id="redit">Please Select</span>';
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