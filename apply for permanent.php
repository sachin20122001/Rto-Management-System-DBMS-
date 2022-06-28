<?php

$conn = mysqli_connect("localhost","root","","rto");


if(isset($_POST['sumbit']))
{

						$Application_No=$_POST['Application_No'];
						$TestSlot=$_POST['TestSlot'];
						$Result=$_POST['Result'];
						
						
						$sql="INSERT INTO pla (Application_No,TestSlot,Result) VALUES ('$Application_No','$TestSlot','$Result')";

						mysqli_query($conn,$sql);
						/*$maxid = "SELECT MAX(ID) FROM person";
						$max=mysqli_query($conn,$maxid);
						$sqll="INSERT INTO person_mob VALUES ('$max','$mob')";
						mysqli_query($conn,$sqll);*/
						

}

?>
<html>
<head>
	<title>
		apply for permanent registration : Form
	</title>
</head>
<body vlink="Blue">
	<center>
		<br></br>
		<h1>permanent license application Form</h1>
		<br><br>
		<form action="" method="post" enctype="multipart/form-data">
			<fieldset>
				<legend>Information</legend>
<table align="center" bgcolor=" #daffb3" border="1" cellpadding="8" cellspacing="5">
		<tr>
				<td>Application_No</td>
				<td>:</td>
				<td><input type="number" name="Application_No"  /></td>
		</tr>
		
		<tr>
				<td>TestSlot</td>
				<td>:</td>
				<td><input type="date" name="TestSlot"  /></td>
		</tr>
	
		<tr>
				<td>Result</td>
				<td>:</td>
				<td><input type="text" name="Result"  /></td>
		</tr>
		
		
		</table>
		<br>
		<table cellpadding="8" cellspacing="5">
		<tr>
		<td colspan="3" align="center"><input type="submit" value = "Submit" name="sumbit" /></td>
		<td colspan="3" align="center"></td>
		<td colspan="3" align="center"></td>
		<td colspan="3" align="center"><a href="Home.php" ><img src="back.png" width="30" height="30"></a></td>
		</tr>
</table>
</fieldset>
</form>
	</center>

</body>
</html>
