
<?php
session_start();
/* include db connection file */
include("include/dbconn.php");

    function err()
	{
		
		echo "<script language='javascript'>
			  alert('Your data isn't available)
	          location = 'email.php';
	          </script>";
		exit();
	}
	function err2()
	{
		
		echo "<script language='javascript'>
			  alert('You have already registered! Please login using your own password')
	          location = 'login.php';
	          </script>";
		exit();
	}
	
	
	function succ()
	{
	
		header("location: firstlogin.php");
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
				$row=mysql_fetch_array($rst);
				$pass = $row['password'];
				if(!empty($pass))
				{
					err2();
				}	
				else
					succ();
				
			}	
			else
			{
				err();
			}
}


mysql_close($dbconn);
?>
