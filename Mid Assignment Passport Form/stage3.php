<!DOCTYPE html>
<html>
<head>
   <title>Stage 3</title>
   <link rel="stylesheet"  href="st1css.css" > 
</head>
<body>
    <h3 id="header">PASSPORT APPLICATION-STAGE 3</h3>
    <h4 id="h2">Before filling up the online application form read the<div1 id="blueun"> guidelines</div1> carefully.<h4>
    <h5 id="h3">Fiels marked with<div2 id="redit"> (*)</div2>are mandetory.</h5>
    <hr id="marit">
    <br>
    <div id="div02">
        <form action="stage4.php" method="post">
            <table id="table01">
                <tr>
                    <td colspan="2">
                        <p id="blue"><b>Payment Information</b></p>
                    </td>
                    <td></td><td></td>
                </tr>
                <tr><td></td><td></td><td></td><td></td></tr>
                <tr>
                    <td rowspan="2">
                         <span id="nmb"><b>Payment:</b></span>
                    </td>
                    <td rowspan="2">
                        <input type="radio" name="payement" value="online" >Online<br>
                        <input type="radio" name="payment" value="not-online">Not-onlien<br> 
                    </td>  
                    <td></td><td></td>
                </tr>
                <tr><td></td><td></td><td></td><td></td></tr>
                <tr>
                    <td >
                        <p id="nmb"><b><input type="checkbox" name="skippay" value="yesskip">Skip Payement</b></p>
                    </td>
                    <td></td><td></td>
                </tr>
                <tr>
                    <td>
                    <td>
                        <span id="nmb"><b>Amount:<span id="redit">*</span></b></span>
                     </td>
                    </td>
                </tr>

            </table>
        </from>
    </div>

</body>
</html>