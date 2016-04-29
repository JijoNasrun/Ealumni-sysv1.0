<?php
include("include/dbconn.php");
session_start();

$kp = $_SESSION["id"];

function runQuery($query) {
        $result = mysql_query($query);
        while($row=mysql_fetch_assoc($result)) {
            $resultset[] = $row;
        }       
        if(!empty($resultset))
            return $resultset;
    }



		
	
			

	
?>
	

}
?>