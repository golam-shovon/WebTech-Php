<!DOCTYPE html>
<html>
<head>
   <title>Stage 3</title>
   <link rel="stylesheet"  href="st1css.css" > 
</head>
<body>
    <h3 id="header">PASSPORT APPLICATION-STAGE 3</h3>
    <?php
        session_start();
    ?>
    <h4 id="h2">Before filling up the online application form read the<div1 id="blueun"> guidelines</div1> carefully.<h4>
    <h5 id="h3">Fiels marked with<div2 id="redit"> (*)</div2>are mandetory.</h5>
    <hr id="marit">
    <br>
    <div id="div02">
        <form action="stage3store.php" method="post">
            <table id="table02">
                <tr>
                    <td colspan="2">
                        <p id="blue"><b>Payment Information</b></p>
                    </td>
                    <td></td><td></td>
                </tr>
                <tr><td></td><td></td><td></td><td></td></tr>
                <tr><td></td><td></td><td></td><td></td></tr>
                <tr>
                    <td rowspan="2">
                         <span id="nmb"><b>Payment:</b></span>
                    
                       <td>
                           <input type="radio" name="payement" value="online" <?php if($_SESSION['payement']=='online') echo "checked"; ?>>Online<br>
                            <input type="radio" name="payment" value="not-online"<?php if($_SESSION['payement']=='not-online') echo "checked"; ?>>Not-online<br> 
                       </td> 
                    </td>  
                    <td></td><td></td><td></td>
                </tr>
                <tr><td></td><td></td><td></td><td></td></tr>
                <tr><td></td><td></td><td></td><td></td></tr>
                <tr>
                    <td >
                        <p id="nmb"><b><input type="checkbox" name="skippay" value="yesskip">Skip Payement</b></p>
                    </td>
                    <td></td><td></td>
                </tr>
                <tr>
                    <td>
                        <p>
                            <span id="nmb" margin-right:"5 em"><b>Amount:<span id="redit">*</span></b></span>   
                    </td >      
                            <td>
                                 <p>
                                    <select  name="currency">
                                        <option value="BDT" <?php if($_SESSION['currency']=='BDT')echo "selected"; ?> >BDT</option>
                                        <option value="USD"<?php if($_SESSION['currency']=='USD')echo "selected"; ?>>USD</option>
                                        <option value="AUD"<?php if($_SESSION['currency']=='AUD')echo "selected"; ?>>AUD</option>
                                    </select> 
                                    <input type="text" id="text02" size="30" name="amount">
                                 </p>
                            </td> 
                    </td>
                    <td></td><td></td>
                </tr>
                <tr><td></td><td></td><td></td><td></td></tr>
                <tr><td></td><td></td><td></td><td></td></tr>
                <tr>
                    <td>
                            <span id="nmb"><b>Date of Payment:<span id="redit">*</span></b></span>
                        </td>
                        <td>
                            <input type="text" id="text01" size="30" name="paymentdate"<?php if(!empty($_SESSION['paymentdate'])) echo "value=".$_SESSION['paymentdate'];?>>
                        </td>  
                    <td></td></td></td>
                </tr>
                <tr><td></td><td></td><td></td><td></td></tr>
                <tr><td></td><td></td><td></td><td></td></tr>
                <tr>
                    <td>
                        <span id="nmb"><b>Receiptno:<span id="redit">*</span></b></span>
                    </td>
                    <td>
                         <input type="text" id="text01" size="30" name="receiptno"<?php if(!empty($_SESSION['receiptno'])) echo "value=".$_SESSION['receiptno'];?>>
                    </td>  
                    <td></td></td></td>
                </tr>
                <tr><td></td><td></td><td></td><td></td></tr>
                <tr><td></td><td></td><td></td><td></td></tr>
                <tr>
                    <td>
                        <span id="nmb"><b>Name of Bank:</b></span><br>
                    </td>
                    <td>
                        <select  id="op01" name="bank">
                             <option hidden></option>
                             <option value="Ncc Bank"  <?php if($_SESSION['bank']=='Ncc Bank')echo "selected"; ?>>Ncc Bank</option>
                             <option value="Dhaka Bank" <?php if($_SESSION['bank']=='Dhaka Bank')echo "selected"; ?>>Dhaka Bank</option>
                         </select>
                    </td>
                    <td></td></td></td>
                </tr>
                <tr><td></td><td></td><td></td><td></td></tr>
                <tr><td></td><td></td><td></td><td></td></tr>
                <tr>
                    <td>
                         <span id="nmb"><b>Name of Branch:</b></span><br>
                    </td>
                    <td>
                        <select  id="op01" name="branch">
                             <option hidden></option>
                             <option value="Mipur" <?php if($_SESSION['branch']=='Mipur Bank')echo "selected"; ?>>Mipur</option>
                             <option value="Kuratoli Sea"<?php if($_SESSION['branch']=='Kuratoli Sea')echo "selected"; ?>>Kuratoli Sea</option>
                        </select>
                    </td>
                    <td></td></td></td>
                </tr>
                <tr><td></td><td></td><td></td><td></td></tr>
                <tr><td></td><td></td><td></td><td></td></tr>
                <tr><td></td><td></td><td></td><td></td></tr>
            </table>
        <table id="table01">
            <tr><td></td><td></td><td></td><td></td></tr>
            <tr><td></td><td></td><td></td><td></td></tr>
            <tr>
                <td></td><td></td>
                <td></td>
                <td align="right" >
                     <input id="button01" type="submit" value="Save & Next" >
                </td>
            </tr>
        </table>
        </from>
    </div>
</body>
</html>