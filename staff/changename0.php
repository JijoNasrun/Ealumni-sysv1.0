<?php
include("include/dbconn.php");
include("include/session.php");

if(isset($_POST['submit']))
{
 /* capture values from HTML form */
           
           $name = $_POST['name'];
           $kp= $_POST['kp'];
           $addr= $_POST['addr'];
           $program= $_POST['program'];
           $yearg= $_POST['yearg'];
           $fakulti= $_POST['fakulti'];
           $gugusan= $_POST['gugusan'];
           	
           

		mysql_query("UPDATE alumni SET nama ='$name' , alamat ='$addr', kod_program='$program', tahun_graduasi='$yearg', Fakulti ='$fakulti', Gugusan='$gugusan' where no_kp='$kp'");
		          		
		
		echo "<script language='javascript'>
	          alert('UPDATED')
	          
	          location = 'search.php';
	          </script>";
	          

}


mysql_close($dbconn);

?>