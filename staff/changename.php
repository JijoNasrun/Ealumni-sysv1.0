<?php
include("include/dbconn.php");
include("include/session.php");

$kp = $_GET['kp'];

$row=mysql_query("SELECT * FROM alumni where no_kp ='$kp'");
$rst=mysql_fetch_array($row);
$name=$rst['nama'];
$addr=$rst['alamat'];
$program=$rst['kod_program'];
$yearg=$rst['tahun_graduasi'];
$fakulti=$rst['Fakulti'];
$gugusan=$rst['Gugusan'];

?>

<html>

<body>
	<center>
	Update Form
<form method='post' action='changename0.php' name="change">
	<table>
		<tr>
			<td>Identification Number</td>
			<td><input type='text' name='kp' value="<?php echo htmlspecialchars($kp)?>" readonly/></td>
		</tr>
		<tr>
			<td>Full Name</td>
			<td><input type='text' name='name' value="<?php echo $name?>"/></td>
		</tr>
		<tr>
			<td>Address</td>
			<td><input type='text' name='addr' value="<?php echo $addr?>"/></td>
		</tr>
		<tr>
			<td>Program</td>
			<td><input type='text' name='program' value="<?php echo $program?>"/></td>
		</tr>
		<tr>
			<td>Year Graduate</td>
			<td><input type='text' name='yearg' value="<?php echo $yearg?>"/></td>
		</tr>
		<tr>
			<td>Faculty</td>
			<td><input type='text' name='fakulti' value="<?php echo $fakulti?>"/></td>
		</tr>
		<tr>
			<td>Division</td>
			<td><input type='text' name='gugusan' value="<?php echo $gugusan?>"/></td>
		</tr>
	</table>
	
	
	
	
	
	
	

	<input type='submit' name='submit' value='Submit'/>
</form>
</center>
</body>
</html>

