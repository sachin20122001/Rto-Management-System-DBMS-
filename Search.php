<?php
$con = mysqli_connect("localhost","root","","rto");
?>
<html>
<head>
	<title>
		Search for Owner
	</title>
</head>
<body vlink="Blue">
	<center>
		<br></br>
		<h1>Search</h1>
		<img src="giphy.webp" alt="RTO" height=300px width=375px><br><br><br>
		<form action="" method="post" enctype="multipart/form-data">
			
<table align="center" bgcolor=" #daffb3" border="1" cellpadding="8" cellspacing="5">
		<tr>
				<td>Vehicle Number</td>
				<td>:</td>
				<td><input type="text" name="vno"  /></td>
		</tr>
		</table>
		<br>
		<table cellpadding="8" cellspacing="5">
		<tr>
		<td colspan="5" align="center"><input type="submit" value = "Search" name="search" /></td>
		</tr>
</table>
</form>
<br><br>
<h1>Owner Details</h1>
			<fieldset>
				
				<legend>Information</legend>
<table align="center" bgcolor=" #daffb3" border="1" cellpadding="8" cellspacing="5">

<?php
if(isset($_POST['search']))
{

						$vno=$_POST['vno'];
						$ql="SELECT own.vehicle_no,registered_person.id,registered_person.name,registered_person.dob,registered_person.address,registered_person.pincode,registered_person.email,registered_person.mobile FROM own,registered_person WHERE own.id =registered_person.id  AND own.vehicle_no = '$vno'";
						$run=mysqli_query($con,$ql);
						
						if(!$row = mysqli_fetch_array($run))
						{
						echo "<center>"."<h2>"."Error : "."</h2>"."No such vehicle exists."."<br>"."</center>";
					}
						else
						{
						echo "<tr>"."<td>"."Vehicle Number" ."</td>"."<td>"."ID" ."</td>"."<td>"."Name" ."</td>"."<td>"."DOB" ."</td>"."<td>"."Address" ."</td>"."<td>"."Pincode" ."</td>"."<td>"."Email" ."</td>"."<td>"."Mobile" ."</td>"."</tr>";
							$run2=mysqli_query($con,$ql);
						while($row = mysqli_fetch_assoc($run2))
						{
							echo "<tr>"."<td>". $row["vehicle_no"]."</td>"."<td>". $row["id"]."</td>"."<td>". $row["name"]."</td>"."<td>". $row["dob"]."</td>"."<td>". $row["address"]."</td>"."<td>". $row["pincode"]."</td>"."<td>". $row["email"]."</td>"."<td>". $row["mobile"]."</td>"."</tr>";
						}	
						}

}
?>

		</table>
		<br>
		<table cellpadding="8" cellspacing="5">
		<tr>
		<td colspan="3" align="center"><a href="Home.php" ><img src="back.png" width="30" height="30"></a></td>
		</tr>
</table>
</fieldset>
</center>
</body>
</html>