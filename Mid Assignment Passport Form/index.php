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
            <form action="formoneresults.php" method="post">
                <table id="table01">
                    <tr>
                        <td colspan="2">
                            <p id="blue"><b>Passport Application Information</b></p>
                        </td>
                        <td>
                            <span id="nmb"><b>Date of Birth:<span id="redit">*</span></b></span>
                        </td>
                        <td>
                            <input type="date" id="text01" size="30" name="dateofbirth">
                        </td>
                    </tr>
                    <tr>
                        <td>
                        <span id="nmb"><b>Applying In<span id="redit">*</span></b></span>
                        </td>
                        <td>
                            <select  id="op01" name="App_place">
                                 <option value="Bangladesh" selected>Bangladesh</option>
                                 <option value="Sewden">Sewden</option>
                            </select>
                        </td>
                        <td rowspan="2">
                             <span id="nmb"><b>Gender:<span id="redit">*</span></b></span>
                        </td>
                        <td rowspan="2">
                            <input type="radio" name="gender" value="male" >Male<br>
                            <input type="radio" name="gender" value="female"> Female<br>
                            <input type="radio" name="gender" value="other"> Other  
                        </td>   
                    </tr>
                    <tr><td></td><td></td><td></td><td></td></tr>
                    <tr>
                        <td>
                            <span id="nmb"><b>Application Type:b></span>
                        </td>
                        <td colspan=2 >
                            <select id="op01" name="App_type">
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
                            <select id="op01" name="Pass_type">
                                 <option value="Normal" >Normal</option>
                                 <option value="Offical">Offical</option>
                                 <option value="Diplomatic">Diplomatic</option>
                            </select>
                        </td>
                        <td>
                            <span id="nmb"><b>Birth  ID No:<span id="redit">*</span></b></span><br><br>
                        </td>
                        <td>
                            <input type="text" id="text01" size="30" name="birthidno"><br><br>
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
                            <p><input type="text" id="text02" size="30" name="height_cm">
                            <span id="nmb">cm</span>
                            <input type="text" id="text02" size="30" name="height_inch">
                            <span id="nmb">inch</span></p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span id="nmb"><b>Religion:<span id="redit">*</span></b></span>
                        </td>
                        <td>
                            <select id="op01" name="Religion">
                                 <option value="Islam" >Islam</option>
                                 <option value="Chrishtian">Chrishtian</option>
                                 <option value="Hindu">Hindu</option>
                            </select> 
                        </td>
                    </tr>
                    
                </table>
            </form>
    </div>
   
</body>
</html>