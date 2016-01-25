<?php
	//access page
		session_start();
		$user = isset($_SESSION['id']);
			if(!$user)
			{
				session_destroy();
				header("location:check.php");
			}

?>