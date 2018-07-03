<!Doctype html>
 <html>
     <head>
         <style>
             body
             {
                background-color:white;
                margin:10% 20% 20%;
             }
             h1
             {
                 text-align: center;
             }
             p
             {
                text-align: center;
             }
             textarea
             {
                 width: 100%;
                 border-color:aqua;
                 
             }  
             input[type=submit]
             {
                background-color: #4CAF50;
                border-radius: 15px;
                border: 2px solid;
                color: white;
                font-size: 34px;
                width: 150px;
             }      
             input[type=reset]
             {  
                background-color:orange;
                border-radius: 15px;
                border: 2px solid;
                color: white;
                font-size: 34px;  
                text-align: center;
                width: 150px;
             }
             .center
             {
                 margin: auto;
                 width: 28%;
            }
        </style>   
         <body>
            
             <hr>
                <h1>Character Frequency Counter</h1>
            <hr>
            <br>
            <p>
                Insert your sting into the following text area to get the counter per Character
            </p>
            
            <?php

            $comments= $_POST['tex'];
            
            
            ?>
            <form id="tt" action="count.php" method="post">
                <textarea name="tex" form="tt" rows="10" cols="30"></textarea>
                <div class="center">
                <input type="submit" value="count" >
                <input type="reset"value="clear">
                </div>
            </form>   
            
               
         </body>     
     </head>
 </html>   