<?php

$conn = mysqli_connect("localhost","root","","rto");

if(isset($_POST['sumbit']))
{

						$License_No=$_POST['License_No'];
						$Application_Date=$_POST['Application_Date'];
						$ID=$_POST['ID'];
						
						
						$sql="INSERT INTO renewal (License_No,Application_Date,ID) VALUES ('$License_No',$Application_Date','$ID')";

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
		renewal : Form
	</title>
</head>
<body vlink="Blue">
	<center>
		<br></br>
		<h1>RENEWAL</h1>
		<br><br>
		<form action="" method="post" enctype="multipart/form-data">
			<fieldset>
				<legend>Information</legend>
<table align="center" bgcolor=" #daffb3" border="1" cellpadding="8" cellspacing="5">
        
<tr>
				<td>License_No</td>
				<td>:</td>
				<td><input type="number" name="License_No"  /></td>
		</tr>
		<tr>
				<td>Application_Date</td>
				<td>:</td>
				<td><input type="date" name="Application_Date"  /></td>
		</tr>
		
		<tr>
				<td>ID</td>
				<td>:</td>
				<td><input type="number" name="ID"  /></td>
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
