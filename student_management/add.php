<!DOCTYPE html>
<html>
<head>
<title>PHP insertion</title>
<link href="i.css" rel="stylesheet">
</head>
<body>
	
<center>
<h1>Add New Student</h1>
<form action="insert.php" method="POST">
<!-- Method can be set as POST for hiding values in URL-->
<div class="form">
<table cellspacing="20">
	
<tr><td>Roll_no:
<input name="roll_no" type="text" ></td>
<td>Name:
<input name="name" type="text" ></td>
<tr>	<td>Father Nm:

	<input  name="father_name" type="text" ></td>
	<td>Mother Nm:
	<input name="mother_name" type="text" ></td>
</tr>
<tr>	<td>Reg_no:

	<input name="reg_no" type="text" ></td>
	<td>Year:

	<input  name="year" type="text"></td>
</tr>
<tr>	<td>Email:

	<input name="email" type="text" ></td>
	<td>Phone:
	<input name="ph_no" type="text" ></td>
</tr>

<tr><td>
Address:
     <textarea cols="30" name="address" rows="2"></textarea>
	
	</td>
</tr>
</center>
<p align="center">
<tr><td>
	<input name="submit" type="submit">
</p>

	</td></tr>
</div>
</table>
</form>
</div>
</div>
</body>
</html>