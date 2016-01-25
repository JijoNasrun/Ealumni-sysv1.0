<?php
session_start();
/* include db connection file */
include("include/dbconn.php");

    function err()
	{
		
		echo "<script language='javascript'>
	          alert('Incorrect Login Credential');
	          location = 'staff_login.php'
	          </script>";
		exit();
	}
	
	function succ()
	{
	
		header("location: staff/index.php");
		exit();
	}
	
	//login
	$msg="";


if(isset($_POST['submit']))
{
 /* capture values from HTML form */
           $username = mysql_real_escape_string($_POST['username']);
           $password = mysql_real_escape_string($_POST['password']);
		  
			
			     $rst=mysql_query("SELECT * FROM admin WHERE username ='$username' and password='$password'");
			     $check=mysql_num_rows($rst);
			     				 
        	if($check != 0)
        	{
				$select_user =	mysql_query("SELECT * FROM admin WHERE username ='$username'");
				$row_user = mysql_fetch_array($select_user);
				
					$_SESSION['id'] = $row_user['username'];
					
					succ();
				
			}	
			else
			{
				err();
			}
}


mysql_close($dbconn);
?>