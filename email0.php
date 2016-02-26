<?php
include("include/dbconn.php");
include("include/session.php");

if(isset($_POST['submit']))
{
 /* capture values from HTML form */
           $no_kp = $_POST['ic'];
           $name = $_POST['name'];
           $emel = $_POST['mail'];
           $program = $_POST['program'];
           $yearg = $_POST['yearg'];
		  
		
		mysql_query("INSERT INTO pending(pending_name,pending_IC,pending_email,pending_program,pending_yearG) VALUES ('".$name."','".$no_kp."','".$emel."','".$program."','".$yearg."')");
		          		
		
		echo "<script language='javascript'>
	          alert('YOUR APPLICATION HAS BEEN SENT. WE WILL CONTACT YOU SHORTLY')
	          location = 'check.php';
	          </script>";
	          

}


mysql_close($dbconn);

?>