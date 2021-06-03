<?php
	session_start();
	require'../../includes/admin_init.php';
	
	
		if(isset($_GET['page'])){
			if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) 
				require '../../pages/admin/'.$_GET['page']. '.php';
			else
				require '../../pages/admin/admin_home.php';
		}
		else{
			require '../../pages/admin/admin_home.php';
		}

		$tempVars = [
			'title' => $title,
			'content' => $content
		];
		
		echo loadTemplate('../../views/admin/adminLayout.php', $tempVars);		
?>