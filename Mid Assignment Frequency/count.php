<!DOCTYPE html>
<html>
    <head>
        <title>Counter</title>
        <link rel="stylesheet" href="countcss.css">
    </head>
<body>
        <hr>
        <p id="p01">Character Frequency Count</p>
        <hr>
       <table id="table01">
            <tr>
                <td>Character</td>
                <td>Count</td>
             </tr>
             <?php
                $str= $_POST['tex'];
                $arru=str_split($str);
                $atr=array();
                foreach($arru as $q)
                {   
                   if(in_array($q,$atr))
                   {
                       
                   }
                   else
                   {
                    echo"<tr>";
                    echo"<td>";
                    echo $q;
                    echo"</td>";
                    echo"<td>";
                    echo array_count_values($arru)[$q];
                    echo"</td>";
                    echo "</tr>";                  
                    array_push($atr,$q);
                   }
                     
                }
                ?>
        </table>
        
        <br>
        <br>
        <a cls="btn" id="button" href="index.php">Input Another String</a> 
        <br>
        <hr>
        <p id="p01">Word Frequency Count</p>
        <hr>
        <table id="table01">
            <tr>
                <td>Word</td>
                <td>Count</td>
             </tr>
             <?php
                $str= $_POST['tex'];              
                $arr =  explode(" ", $str);
                $at=array();
                foreach($arr as $v)
                {   
                    if(in_array($v,$at))
                   {
                       
                   }
                   else
                   {
                    echo"<tr>";
                    echo"<td>";
                    echo $v;
                    echo"</td>";
                    echo"<td>";
                    echo array_count_values($arr)[$v];
                    echo"</td>";
                    echo "</tr>";                  
                    array_push($at,$v);
                   }
                     
                }
                ?>
        </table>
        <br>
        <a cls="btn" id="button" href="index.php">Input Another String</a>        
                
            

</body>
</html>