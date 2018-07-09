	<form name="login" action="log.php" method="post">
		User Name:<input type="text" name="un" /><br/>
		Password:<input type="password" name="pw"/><br/>
		<input type="submit" name="submit" />

	</form>
	<?php
		session_start();
		if($_SESSION['u']==1)
		{
			echo " Wrong Information";
		}
	?>