<?php
include('include/dbconn.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js">
</script>
<?php

$r = $_GET['r'];

$sql_1="SELECT * 
        FROM   alumni
	    WHERE  no_kp = '$r'
       ";
$sql=mysql_query($sql_1);		   
if(mysql_num_rows($sql) != 0 ){
		   
$info=mysql_fetch_array($sql);  

	
	echo "<p><label>Name:</label>";
	echo "<input type='text' value='".$alumni_name=$info['nama']."' readonly='readonly'><br/></p>";


	$sql_2=mysql_query("SELECT * 
        FROM   alumni
	    WHERE  no_kp = '$r'
       ");

	
	
	echo "<div align='left'>
		  <p>Education Level:</p>";
	$i=1;
	while($fet=mysql_fetch_array($sql_2)){
	echo "<p>".$i.".".$fet['program']." (".$fet['no_matrik'].")</p>";
	$i++;
	}
	echo "</div><br/>";
	
}
else{
	
	
}
?>
