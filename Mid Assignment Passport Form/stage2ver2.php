<!DOCTYPE html>
<html>
<head>
   <title>Stage 2</title>
   <link rel="stylesheet"  href="st1css.css" > 
</head>
<body>
    <h3 id="header">PASSPORT APPLICATION-STAGE 2</h3>
    <?php
         session_start();
    ?>
    <h4 id="h3">Online Application ID<?php echo$_SESSION['rid']?><h4>
    <h5 id="h3">Fiels marked with<div2 id="redit"> (*)</div2>are mandetory.</h5>
    <hr id="marit">
    <br>
    <div id="div02">
        <form action="stage2store.php" method="post">
            <table id="table01">
                <tr>
                    <td colspan="2">
                        <p id="blue"><b>Applicant Contact Information</b></p>
                    </td>
                    <td colspan="2">
                        <p id="blue"><b>Old Passport Information</b></p>
                    </td>
                </tr>
                <tr><td></td><td></td><td></td><td></td></tr>
                <tr>
                    <td>
                        <span id="nmb"><b>Office No:</b></span>
                    </td>
                    <td>
                         <input type="text" id="text01" size="30" name="officeno"<?php if(!empty($_SESSION['officeno'])) echo "value=".$_SESSION['officeno'];?>>
                    </td>
                    <td>
                        <span id="nmb"><b>Passport No:</b></span>
                    </td>
                    <td>
                         <input type="text" id="text01" size="30" name="passportno"<?php if(!empty($_SESSION['passportno'])) echo "value=".$_SESSION['passportno'];?>>
                    </td>
                </tr>
                <tr><td></td><td></td><td></td><td></td></tr>
                <tr>
                    <td>
                        <span id="nmb"><b>Residence No:</b></span>
                    </td>
                    <td>
                         <input type="text" id="text01" size="30" name="residenceno"<?php if(!empty($_SESSION['residenceno'])) echo "value=".$_SESSION['residenceno'];?>>

                    </td>
                    <td>
                        <span id="nmb"><b>Place of Issue:</b></span>
                    </td>
                    <td>
                        <input type="text" id="text01" size="30" name="placeofissue" <?php if(!empty($_SESSION['placeofissue'])) echo "value=".$_SESSION['placeofissue'];?>>

                    </td>
                </tr>
                <tr><td></td><td></td><td></td><td></td></tr>
                <tr>
                    <td>
                        <span id="nmb"><b>Mobile No:</b></span>
                    </td>
                    <td>
                         <input type="text" id="text01" size="30" name="mobileno"<?php if(!empty($_SESSION['mobileno'])) echo "value=".$_SESSION['mobileno'];?>>
                    </td>
                    <td>
                        <span id="nmb"><b>Date of Issue:</b></span>
                    </td>
                    <td>
                        <input type="date" id="text01" size="30" name="dateofissue"<?php if(!empty($_SESSION['dateofissue'])) echo "value=".$_SESSION['dateofissue'];?>>

                    </td>
                </tr>
                <tr>
                    <td rowspan="2" colspan="2">
                        <p id="blue"><b>Emergency Conctact Person's Information</b></p>
                    </td>
                    <td>
                        <span id="nmb"><b>Re-issue Reason:</b></span>
                    </td>
                    <td>
                        <select id="op01" name="reissuereason">
                            <option hidden>-select-</option>
                            <option value="Lost" <?php if($_SESSION['reissuereason']=='Lost')echo "selected"; ?> >Lost</option>
                            <option value="Damaged"<?php if($_SESSION['reissuereason']=='Damaged')echo "selected"; ?> >Damaged</option>
                            <option value="Expired"<?php if($_SESSION['reissuereason']=='Expired')echo "selected"; ?> >Expired</option>
                        </select> 
                    </td>
                </tr>
                <tr><td></td><td></td><td></td><td></td></tr>
                <tr>
                    <td>
                        <span id="nmb"><b>Name:<span id="redit">*</span></b></span>
                    </td>
                    <td>
                         <input type="text" id="text01" size="30" name="emcontactname" <?php if(!empty($_SESSION['emcontactname'])) echo "value=".$_SESSION['emcontactname'];?>>
                         <?php
                                if(empty($_SESSION['emcontactname']))
                                {
                                echo"<span id='redit'><b>Input Name </b></span>";
                                }
                        ?>
                    </td>

                    <td></td><td></td>
                </tr>
                <tr>
                    <td>
                        <span id="nmb"><b>Country<span id="redit">*</span></b></span>
                    </td>
                    <td>
                        <select  id="op01" name="em_country">
                            <option value="Bangladesh" <?php if($_SESSION['em_country']=='Bangladesh')echo "selected"; ?>>Bangladesh</option>
                            <option value="Sewden"<?php if($_SESSION['em_country']=='Sewden')echo "selected"; ?>>Sewden</option>
                        </select>
                    </td>
                    <td></td><td></td>
                </tr>
                <tr><td></td><td></td><td></td><td></td></tr>
                <tr>
                    <td colspan="2">
                        <p id="nmb"><b><input type="checkbox" name="addresssameaspermaem" value="yessame">Same as Permanent Address</b></p>
                    </td>
                    <td></td><td></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <p id="nmb"><b><input type="checkbox" name="addresssameaspreem" value="yessame">Same as Persent Address</b></p>
                    </td>
                    <td></td><td></td>
                </tr>
                <tr><td></td><td></td><td></td><td></td></tr>
                <tr>
                     <td>
                        <span id="nmb"><b>Villege/House:</b></span>
                    </td>
                    <td>
                        <input type="text" id="text01" size="30" name="emvillege/house"<?php if(!empty($_SESSION['emvillege/house'])) echo "value=".$_SESSION['emvillege/house'];?>>
                    </td>
                    <td></td><td></td>
                </tr>
                <tr>
                    <td>
                        <span id="nmb"><b>Road/Block/Sector:</b></span>
                    </td>
                    <td>
                        <input type="text" id="text01" size="30" name="emroad/block/sector"<?php if(!empty($_SESSION['emroad/block/sector'])) echo "value=".$_SESSION['emroad/block/sector'];?>>
                    </td>
                    <td></td><td></td>
                </tr>
                <tr>
                    <td>
                        <span id="nmb"><b>District:<span id="redit">*</span></b></span><br><br>
                    </td>
                    <td>
                        <select  id="op01" name="emdistrict">
                            <option hidden value="">-select-</option>
                            <option value="Dhaka" <?php if($_SESSION['emdistrict']=='Dhaka')echo "selected"; ?>>Dhaka</option>
                            <option value="Kustia"<?php if($_SESSION['emdistrict']=='kustia')echo "selected"; ?>>Kustia</option>
                            <option value="Barishal"<?php if($_SESSION['emdistrict']=='Barishal')echo "selected"; ?>>Barishal</option>
                        </select><br><br>
                        <?php
                                if(empty($_SESSION['emdistrict']))
                                {
                                echo"<span id='redit'><b>Select District </b></span>";
                                }
                        ?>
                    </td>   
                    <td></td><td></td> 
                </tr>
                <tr>
                    <td>
                        <span id="nmb"><b>Police Station:<span id="redit">*</span></b></span><br><br>
                    </td>
                    <td>
                        <select  id="op01" name="empolice">
                            <option hidden value="">-select-</option>
                            <option value="Dhaka" <?php if($_SESSION['empolice']=='Dhaka')echo "selected"; ?>>Dhaka</option>
                            <option value="Kustia"<?php if($_SESSION['empolice']=='kustia')echo "selected"; ?>>Kustia</option>
                            <option value="Barishal"<?php if($_SESSION['empolice']=='Barishal')echo "selected"; ?>>Barishal</option>
                        </select><br><br>
                        <?php
                                 if(empty($_SESSION['empolice']))
                                {
                                echo"<span id='redit'><b>Select Police Station</b></span>";
                                }
                        ?>
                    </td> 
                    <td></td><td></td>  
                </tr>
                <tr>
                     <td>
                         <span id="nmb"><b>Post Office:<span id="redit">*</span></b></span><br><br>
                    </td>
                    <td>
                         <select  id="op01" name="empostoffice">
                             <option hidden value="">-select-</option>
                            <option value="Dhaka" <?php if($_SESSION['empostoffice']=='Dhaka')echo "selected"; ?>>Dhaka</option>
                            <option value="Kustia"<?php if($_SESSION['empostoffice']=='kustia')echo "selected"; ?>>Kustia</option>
                            <option value="Barishal"<?php if($_SESSION['empostoffice']=='Barishal')echo "selected"; ?>>Barishal</option>
                         </select><br><br>
                         <?php
                                  if(empty($_SESSION['empostoffice']))

                                {
                                echo"<span id='redit'><b>Select Post Office </b></span>";
                                }
                        ?>
                     </td>
                     <td></td><td></td>
                </tr>
                <tr>
                    <td>
                        <span id="nmb"><b>Contact No:<span id="redit">*</span></b></span>
                    </td>
                    <td>
                         <input type="text" id="text01" size="30" name="emcontactno"<?php if(!empty($_SESSION['emcontactno'])) echo "value=".$_SESSION['emcontactno'];?>>
                    </td>
                    <?php
                                if(empty($_SESSION['emcontactno']))
                                {
                                echo"<span id='redit'><b>Input Contact Number </b></span>";
                                }
                        ?>
                    <td></td><td></td>
                </tr>
                <tr>
                    <td>
                        <span id="nmb"><b>Email:</b></span>
                    </td>
                    <td>
                        <input type="email" id="text01" size="30" name="ememail"<?php if(!empty($_SESSION['ememail'])) echo "value=".$_SESSION['ememail'];?>>
                        <?php
                                  if(empty($_SESSION['ememail']))
                                {
                                echo"<span id='redit'><b>Input Email</b></span>";
                                }
                        ?>
                    </td>
                    <td></td><td></td>
                </tr>
                <tr>
                     <td>
                         <span id="nmb"><b>Relation:<span id="redit">*</span></b></span><br><br>
                    </td>
                    <td>
                         <select  id="op01" name="emrelatio">
                             <option hidden></option>
                             <option value="Spouse"<?php
                            if($_SESSION['emrelatio']=='Spouse')echo "selected"; ?> >Spouse</option>
                             <option value="Father"<?php if($_SESSION['emrelatio']=='Father')echo "selected"; ?> >Father</option>
                            <option value="Mother"<?php if($_SESSION['emrelatio']=='Mother')echo "selected"; 
                           ?> >Mother</option>
                             
                         </select><br><br>
                         <?php
                                  if(empty($_SESSION['emrelatio']))
                                {
                                echo"<span id='redit'><b>Select Relation </b></span>";
                                }
                        ?>
                     </td>
                     <td></td><td></td>
                </tr>
                <tr><td></td><td></td><td></td><td></td></tr>
                <tr><td></td><td></td><td></td><td></td></tr>
                <tr>
                    <td></td><td></td>
                    <td></td>
                    <td align="right" >
                        <button class="button01" formaction="indexver2.php">Previous Page</button>
                        <input class="button01" type="submit" value="Save & Next" name="save">
                    </td>
                </tr>
            </table>
        </form>
    </div> 
</body>
</html>