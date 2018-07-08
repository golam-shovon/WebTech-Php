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
         $oaid=rand(10, 100000000);
         $_SESSION['rid']=$oaid;
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
                         <input type="text" id="text01" size="30" name="officeno">
                    </td>
                    <td>
                        <span id="nmb"><b>Passport No:</b></span>
                    </td>
                    <td>
                         <input type="text" id="text01" size="30" name="passportno">
                    </td>
                </tr>
                <tr><td></td><td></td><td></td><td></td></tr>
                <tr>
                    <td>
                        <span id="nmb"><b>Residence No:</b></span>
                    </td>
                    <td>
                         <input type="text" id="text01" size="30" name="residenceno">
                    </td>
                    <td>
                        <span id="nmb"><b>Place of Issue:</b></span>
                    </td>
                    <td>
                        <input type="text" id="text01" size="30" name="placeofissue">
                    </td>
                </tr>
                <tr><td></td><td></td><td></td><td></td></tr>
                <tr>
                    <td>
                        <span id="nmb"><b>Mobile No:</b></span>
                    </td>
                    <td>
                         <input type="text" id="text01" size="30" name="mobileno">
                    </td>
                    <td>
                        <span id="nmb"><b>Date of Issue:</b></span>
                    </td>
                    <td>
                        <input type="text" id="text01" size="30" name="dateofissue">
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
                            <option value="Lost" >Lost</option>
                            <option value="Damaged">Damaged</option>
                            <option value="Expired">Expired</option>
                        </select> 
                    </td>
                </tr>
                <tr><td></td><td></td><td></td><td></td></tr>
                <tr>
                    <td>
                        <span id="nmb"><b>Name:<span id="redit">*</span></b></span>
                    </td>
                    <td>
                         <input type="text" id="text01" size="30" name="emcontactname">
                    </td>
                    <td></td><td></td>
                </tr>
                <tr>
                    <td>
                        <span id="nmb"><b>Country<span id="redit">*</span></b></span>
                    </td>
                    <td>
                        <select  id="op01" name="em_country">
                            <option value="Bangladesh" selected>Bangladesh</option>
                             <option value="Sewden">Sewden</option>
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
                         <input type="text" id="text01" size="30" name="emvillege/house">
                    </td>
                    <td></td><td></td>
                </tr>
                <tr>
                    <td>
                        <span id="nmb"><b>Road/Block/Sector:</b></span>
                    </td>
                    <td>
                        <input type="text" id="text01" size="30" name="emroad/block/sector">
                    </td>
                    <td></td><td></td>
                </tr>
                <tr>
                    <td>
                        <span id="nmb"><b>District:<span id="redit">*</span></b></span><br><br>
                    </td>
                    <td>
                        <select  id="op01" name="emdistrict">
                            <option hidden>-select-</option>
                            <option value="Dhaka" >Dhaka</option>
                             <option value="Kustia">Kustia</option>
                             <option value="Barishal">Barishal</option>
                        </select><br><br>
                    </td>   
                    <td></td><td></td> 
                </tr>
                <tr>
                    <td>
                        <span id="nmb"><b>Police Station:<span id="redit">*</span></b></span><br><br>
                    </td>
                    <td>
                        <select  id="op01" name="empolice">
                             <option hidden></option>
                             <option value="Dhaka" >Dhaka</option>
                             <option value="Kustia">Kustia</option>
                             <option value="Barishal">Barishal</option>
                        </select><br><br>
                    </td> 
                    <td></td><td></td>  
                </tr>
                <tr>
                     <td>
                         <span id="nmb"><b>Post Office:<span id="redit">*</span></b></span><br><br>
                    </td>
                    <td>
                         <select  id="op01" name="empostoffice">
                             <option hidden></option>
                             <option value="Dhaka" >Dhaka</option>
                             <option value="Kustia">Kustia</option>
                            <option value="Barishal">Barishal</option>
                         </select><br><br>
                     </td>
                     <td></td><td></td>
                </tr>
                <tr>
                    <td>
                        <span id="nmb"><b>Contact No:<span id="redit">*</span></b></span>
                    </td>
                    <td>
                         <input type="text" id="text01" size="30" name="emcontactno">
                    </td>
                    <td></td><td></td>
                </tr>
                <tr>
                    <td>
                        <span id="nmb"><b>Email:</b></span>
                    </td>
                    <td>
                         <input type="email" id="text01" size="30" name="ememail">
                    </td>
                    <td></td><td></td>
                </tr>
                <tr>
                     <td>
                         <span id="nmb"><b>Relation:<span id="redit">*</span></b></span><br><br>
                    </td>
                    <td>
                         <select  id="op01" name="emrelation">
                             <option hidden></option>
                             <option value="Spouse" >Spouse</option>
                             <option value="Father">Father</option>
                            <option value="Mother">Mother</option>
                         </select><br><br>
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