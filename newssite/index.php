<!DOCTYPE HTMl>
	<html>
		<head></head>
		<body>
			
			<form name="user" method="post" action="setuserdata.php">	
				<table >
					<tr>
						<td><input type="text" name="name" placeholder="name"></td>
						
					</tr>
					<tr>
						
					</tr>
					<tr>
						
					</tr>
					<tr>
						<td colspan="2"><input	 style="width:347px;" type="text" name="password" placeholder="Enter Password"></td>
					</tr>
					<tr>
						
					</tr>
					<tr>
						<td> 
							
						</td>
						<td>
							
						</td>
					</tr>
				</table>
                <input type="submit" class="btn btn-success" value="Ragister "/>
                <div class="container">
                    <p>Please use Unique User Name</p>
                </div>
			</form>
            <a href="newspaper.php">See newspaper</a>
            <form name="userverification" method="post" action="checkuser.php">	
				<table >
					<tr>
						<td><input type="text" name="name" ></td>
						
					</tr>
					<tr>
						
					</tr>
					<tr>
						
					</tr>
					<tr>
						<td colspan="2"><input	 style="width:347px;" type="text" name="password"></td>
					</tr>
					<tr>
						
					</tr>
					<tr>
						<td> 
							
						</td>
						<td>
							
						</td>
					</tr>
				</table>
                <input type="submit" class="btn btn-success" value="Login"/>
			</form>
		</body>
	</html>	