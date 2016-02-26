<?php
session_start();
/* include db connection file */
include("include/dbconn.php");

  


if(isset($_POST['submit']))
{
 /* capture values from HTML form */
           $no_kp = mysql_real_escape_string($_POST['IC']);
           $password = mysql_real_escape_string($_POST['password']);
		  
			
			     $rst=mysql_query("SELECT * FROM alumni WHERE no_kp ='$no_kp' and password='$password'");
			     $check=mysql_num_rows($rst);
				 
        	if($check != 0)
        	{
				$select_user =	mysql_query("SELECT * FROM alumni WHERE no_kp ='$no_kp'");
				$row_user = mysql_fetch_array($select_user);
				
					$_SESSION['id'] = $row_user['no_kp'];
					
					succ();
				
			}	
			else
			{
				err();
			}
}
  function err()
	{
		
		echo "<script language='javascript'>
	          alert('Incorrect Login Credential')
	          location = 'login.php';
	          </script>";
		exit();
	}
	
	function succ()
	{
	
		header("location: tab.php");
		exit();
	}
	
	//login
	$msg="";

mysql_close($dbconn);
?>