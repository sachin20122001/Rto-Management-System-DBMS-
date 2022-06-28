<?php

$conn = mysqli_connect("localhost","root","","rto");


if(isset($_POST['sumbit']))
{

						$Temporary_No=$_POST['Temporary_No'];
						$Engine_No=$_POST['Engine_No'];
						$Vechicle_Name=$_POST['Vechicle_Name'];
						$Vechicle_Color=$_POST['Vechicle_Color'];
						
						
						$sql="INSERT INTO nvr (Temporary_No,Engine_No,Vechicle_Name,Vechicle_Color) VALUES ('$Temporary_No','$Engine_No','$Vechicle_Name','$Vechicle_Color')";

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
		new vechicle registration : Form
	</title>
</head>
<body vlink="Blue">
	<center>
		<br></br>
		<h1>new vechicle Registration Form</h1>
		<br><br>
		<form action="" method="post" enctype="multipart/form-data">
			<fieldset>
				<legend>Information</legend>
<table align="center" bgcolor=" #daffb3" border="1" cellpadding="8" cellspacing="5">
		<tr>
				<td>Temporary_No</td>
				<td>:</td>
				<td><input type="text" name="Temporary_No"  /></td>
		</tr>
		
		<tr>
				<td>Engine_No</td>
				<td>:</td>
				<td><input type="text" name="Engine_No"  /></td>
		</tr>
	
		<tr>
				<td>Vechicle_Name</td>
				<td>:</td>
				<td><input type="text" name="Vechicle_Name"  /></td>
		</tr>
		<tr>
				<td>Vechicle_Color</td>
				<td>:</td>
				<td><input type="text" name="Vechicle_Color"  /></td>
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
