<!DOCTYPE html>
<html>
    <head>
        <title>Counter</title>
        <link rel="stylesheet" href="countcss.css">
    </head>
<body>
    <?php
    

     $str= $_POST['tex'];
     $sstr=trim($str);
     $arr =  explode(" ", $str);
     $arru=str_split($str);
     $at=array();
     $atr=array();
     foreach($arr as $v)
     {   
         if(in_array($v,$at))
        {
            
        }
        else
        {
           echo $v." ".substr_count($sstr,$v);
            array_push($at,$v);
        }
          
     }
     foreach($arru as $q)
     {   
         if(in_array($q,$atr))
        {
            
        }
        else
        {
           echo $q." ".substr_count($str,$q);
             array_push($atr,$q);
        }
          
     }
      ?>
        <hr>
        <p id="p01">Character Frequency Count</p>
        <hr>
       <table id="table01">
            <tr>
                <th>Character</th>
                <th>Count</th>
             </tr>
             <?php
                $str= $_POST['tex'];
                $sstr=trim($str);
                $arr =  explode(" ", $str);
                $arru=str_split($str);
                $at=array();
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
                    echo substr_count($str,$q);
                    echo"</td>";
                    echo "</tr>";                  
                    array_push($atr,$q);
                   }
                     
                }
                ?>
        </table>
                
                
            

</body>
</html>