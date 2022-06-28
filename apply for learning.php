<?php

$conn = mysqli_connect("localhost","root","","rto");

if(isset($_POST['sumbit']))
{

						$Application_Date=$_POST['Application_Date'];
						$ID=$_POST['ID'];
						$Application_No=$_POST['Application_No'];
						
						
						$sql="INSERT INTO apply_for_learning (Application_Date,ID,Application_No) VALUES ('$Application_Date','$ID','Application_No')";

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
		apply for learning registration : Form
	</title>
</head>
<body vlink="Blue">
	<center>
		<br></br>
		<h1>Learning Registration Form</h1>
		<br><br>
		<form action="" method="post" enctype="multipart/form-data">
			<fieldset>
				<legend>Information</legend>
<table align="center" bgcolor=" #daffb3" border="1" cellpadding="8" cellspacing="5">
		<tr>
				<td>Application_Date</td>
				<td>:</td>
				<td><input type="date" name="Application_Date"  /></td>
		</tr>
		
		<tr>
				<td>ID</td>
				<td>:</td>
				<td><input type="text" name="ID"  /></td>
		</tr>
	
		<tr>
				<td>Application_No</td>
				<td>:</td>
				<td><input type="number" name="Application_No"  /></td>
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
