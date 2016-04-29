<?php
session_start();
/* include db connection file */
include("include/dbconn.php");

  


if(isset($_POST['submit']))
{
 /* capture values from HTML form */
           $no_kp = mysql_real_escape_string($_POST['IC']);
           $password = mysql_real_escape_string($_POST['password1']);
           $password2 = mysql_real_escape_string($_POST['password2']);
		  
			
			     $rst=mysql_query("SELECT * FROM alumni WHERE no_kp ='$no_kp'");
			     $check=mysql_num_rows($rst);
				 
        	if(($check != 0)&&($password==$password2))
        	{
				$select_user =	mysql_query("UPDATE alumni SET password='$password' WHERE no_kp ='$no_kp'");
					
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
	          alert('Password Mismatch')
	          location = 'forgot_password.php'
	          </script>";
		exit();
	}
	
	function succ()
	{
		echo "<script language='javascript'>
	          alert('Password Successfully updated! Please login using new password')
	          location = 'login.php'
	          </script>";
		
		exit();
	}
	
	//login
	$msg="";

mysql_close($dbconn);
?>