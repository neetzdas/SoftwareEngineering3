<?php
	session_start(); //starting the session handlers
	session_unset(); //unsetting the session for logging out 
	session_destroy(); //destroying the session for logging out
	echo '<script> alert("You are logged out");
				   document.location = "admin_home";
		  </script>';
	?>
