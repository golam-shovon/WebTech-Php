<!DOCTYPE HTMl>
	<html>
		<head></head>
		<body>
			<h1>Sign Up</h1>
			<h3>It's Free and Always Will Be </h3>
			<form>	
				<table >
					<tr>
						<td><input type="text" name="Fn" placeholder="Firstname"></td>
						<td><input type="text" name="Ln" placeholder="Lasttname"></td>
					</tr>
					<tr>
						<td colspan="2"><input style="width:347px;" type="text" name="Em" placeholder="Email"></td>
					</tr>
					<tr>
						<td colspan="2"><input	 style="width:347px;" type="text" name="REm" placeholder="Reenter Email"></td>
					</tr>
					<tr>
						<td colspan="2"><input	 style="width:347px;" type="text" name="Pw" placeholder="New Password"></td>
					</tr>
					<tr>
						<td>Birthday</td>
					</tr>
					<tr>
						<td> <select name="Month" >
								<option value="January">January</option>
								<option value="February">February</option>
								<option value="March">March</option>
								<option value="April">April</option>	
								<option value="May">May</option>
								<option value="June">June</option>
								<option value="July">July</option>
								<option value="August">August</option>
								<option value="September">September</option>
								<option value="October">October</option>
								<option value="November">October</option>	
								<option value="December">December</option>
							</select>
						</td>
						<td>
							<select name="Date" >		
								<?php
								
									for($i=1;$i<31;$i++)
										echo"<option value=$i>$i</option>"
								?>
							</select>
						</td>
					</tr>
				</table
			</form>
		</body>
	</html>	