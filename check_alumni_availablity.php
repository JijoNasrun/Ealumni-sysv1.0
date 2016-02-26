<?php
include('include/dbconn.php');
if($_REQUEST)
{
	$ic = $_REQUEST['ic'];
	$query = "SELECT * 
	          FROM   alumni 
			  WHERE  no_kp = '".strtolower($ic)."'";
			  
	
	$results = mysql_query( $query) or die('ok');
	
	
	if(mysql_num_rows(@$results) > 0) // not available
	{	
		echo "
		     <div id='Success'>Record exist!	 
			 <script>
			 document.getElementById('submit').disabled = false;
			 </script>
			 </div>
		     ";
	}
	else
	{
		echo "
		     <div id='Error'>Record not exist!
			 <script>
			 document.getElementById('submit').disabled = true;
			 </script>
			 </div>
		     ";	
	}
	
}?> 