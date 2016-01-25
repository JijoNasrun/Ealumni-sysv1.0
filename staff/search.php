

<html>
<head>
<title>Search</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="style.css"/>
</head>
<body>
    <form action="" method="GET">
        <input type="text" name="ic" />
        <input type="submit" name="submit" value="Search" />
    </form>
</body>
</html>

<?php
include("include/dbconn.php");
include("include/session.php");
if(isset($_GET['submit'])){
  if(empty($_GET['ic'])){
echo "Enter a search term";
  }

$query=$_GET['ic'];

$rst=mysql_query("SELECT * FROM alumni WHERE no_kp ='$query'");

$row =mysql_fetch_array($rst);
$name=$row['nama'];
$kp =$row['no_kp'];
$address= $row['alamat'];
$yearG=$row['tahun_graduasi'];
$kprogram=$row['kod_program'];
$fakulti=$row['Fakulti'];
$gugusan=$row['Gugusan'];
}
?>

<div><center>
<table>
	<tr>
		<td>
			Name
		</td>
		 <td><a href="changename.php?kp=<?=$kp?>"><?=$name?></a></td>	
	 <tr>
	 	<td>
	 		Identification
	 	</td>
	 	 <td><?=$kp?></td>
      </tr>  
      <tr>
      	<td>
      		Address
      	</td>
      	<td><?=$address?></td>
      </tr>
      <tr>
      	<td>
      		Programme Code
      	</td>
      	<td><?=$kprogram?></td>
      </tr> 
      <tr>
      	<td>
      		Year Graduate
      	</td>
      	<td><?=$yearG?></td>
      </tr>
      <tr>
      	<td>Fakulti</td>
      	 <td><?=$fakulti?></td>
      </tr>
      <tr>  
        <td>Gugusan</td>       
        <td><?=$gugusan?></td>
      </tr>
    </table>
    </center></div>