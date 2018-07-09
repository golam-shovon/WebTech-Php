<!DOCTYPE html>
<html>
    <head>
        <title>File Read</title>
        <style>
            #p01
            {
                font-family: Arial, Helvetica, sans-serif;
                font-size:10px;
                
                text-align:center;
            }
        </style>
    </head>
    <body>
        
        <?php
		$dir =getcwd(); 
		$file=scandir($dir);
		$file=array_diff(scandir($dir),array('.','..','index.php'));
		foreach($file as $f)
		{
			echo "filename:" . $f. "<br>";
			foreach(file($f) as $line) 
			{
			echo $line."<br />";
			}
			echo"<hr>";
		}
		
        ?> 
    </body>
</html>
<?php
?>