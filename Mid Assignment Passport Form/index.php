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
                            
                             <input type="date" id="text01" size="30" name="dateofbirth"><br>
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
                        
                        </td>
                        <td>
                            <span id="nmb"><b>Birth  ID No:<span id="redit">*</span></b></span><br><br>
                        </td>
                        <td>
                             <p>
                                 <input type="number" id="text01" size="30" name="birthidno" pattern = "[0-9]"><br><br>
                          
                            </p> 
                        </td>
                    </tr>
                    <tr>                       
                        <td>
                             <span id="nmb"><b>National ID No:</b></span>
                        </td>
                        <td>
                             <input type="number" id="text01" size="30" name="niidno" pattern = "[0-9]">
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
                             <input type="number" id="text01" size="30" name="taxidno"pattern = "[0-9]">
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
                                <input type="number" id="text02" size="30" name="height_cm"pattern = "[0-9]">
                                <span id="nmb">cm</span>
                                <input type="number" id="text02" size="30" name="height_inch"pattern = "[0-9]">
                                <span id="nmb">inch</span>
                            
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
                         
                        </td>
                    </tr>
                    <tr><td></td><td></td><td></td><td></td></tr>
                    <tr>
                        <td>
                            <p id="smb">Name Of</p>
                            <span id="smb">applicant:<span id="redit">*</span></span>
                        </td>
                        <td>
                            <input type="text" id="text01" size="30" name="nameofapplicant" pattern = "[a-zA-Z]*">
                        
                        </td>
                        <td>
                             <span id="nmb"><b>Email:<span id="redit">*</span></b></span>
                        </td>
                        <td>
                            <input type="email" id="text01" size="30" name="appliemail"> 
                      
                        </td>
                    </tr>
                    <tr><td></td><td></td><td></td><td></td></tr>
                    <tr>
                        <td>
                            <p id="smb"><b>First Part(Given</b></p>
                            <span id="smb"><b>Name):</b></span>
                        </td>
                        <td>
                            <input type="text" id="text01" size="30" name="givennameofapplicant" pattern = "[a-zA-Z]*">
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
                            <input type="text" id="text01" size="30" name="surnnameofapplicant" pattern = "[a-zA-Z]*">
                         
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
                            <input type="text" id="text01" size="30" name="nameoffather" pattern = "[a-zA-Z]*">
                           
                        </td>
                        <td>
                            <span id="nmb"><b>Duel Citizenship:<span id="redit">*</span></b></span>
                        </td>
                        <td>
                            <input type="radio" name="citizen_ship_type" value="Yes" >Yes<br>
                            <input type="radio" name="citizen_ship_type" value="No"> No<br>
                          
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
                                 <option value="Privet Service">Privet Service</option>
                                 <option value="Business">Business</option>
                            </select><br><br>
                         
                        </td>
                    </tr>
                    <tr><td></td><td></td><td></td><td></td></tr>
                    <tr>
                        <td>
                            <span id="nmb"><b>Mother's name:<span id="redit">*</span></b></span>
                           
                        </td>
                        <td>
                            <input type="text" id="text01" size="30" name="nameofmother" pattern = "[a-zA-Z]*">
                          
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
                                 <option value="Privet Service">Privet Service</option>
                                 <option value="Business">Business</option>
                            </select><br><br>
                          
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
                          
                        </td>
                    </tr>
                    <tr><td></td><td></td><td></td><td></td></tr>
                    <tr>
                        <td >
                            <span id="nmb"><b>Spouse's name:</b></span>
                        </td>
                        <td >
                            <input type="text" id="text01" size="30" name="nameofspouse" pattern = "[a-zA-Z]*">
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
                                 <option value="Privet Service">Privet Service</option>
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
                                 <option value="Privet Service">Privet Service</option>
                                 <option value="Business">Business</option>
                            </select><br><br>
                          
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
                function place()
            
                
            
            </form>
            
    </div>
   
</body>
</html>