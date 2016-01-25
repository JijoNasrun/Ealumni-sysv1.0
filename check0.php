<?php
session_start();
/* include db connection file */
include("include/dbconn.php");

    function err()
	{
		
		echo "<script language='javascript'>
	          alert('You have not yet registered!')
	          location = 'email.php';
	          </script>";
		exit();
	}
	
	function succ()
	{
	
		header("location: login.php");
		exit();
	}
	
	//login
	$msg="";


if(isset($_POST['submit']))
{
 /* capture values from HTML form */
           $no_kp = mysql_real_escape_string($_POST['IC']);
		  
			
			     $rst=mysql_query("SELECT * FROM alumni WHERE no_kp ='$no_kp'");
			     $check=mysql_num_rows($rst);
				 
        	if($check != 0)
        	{
				succ();
				
			}	
			else
			{
				err();
			}
}


mysql_close($dbconn);
?>