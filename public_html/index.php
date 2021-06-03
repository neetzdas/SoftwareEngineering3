<?php
require '../includes/init.php';
	session_start();
	
		if(isset($_GET['page'])){
			if($_GET['page']=='login'){
				require '../pages/admin/login.php';
			}else{
				require '../pages/frontend/'.$_GET['page']. '.php';
			}
		}
		else{
			require '../pages/frontend/main.php';
		}
		
		$tempVars = [
			'title' => $title,
			'content' => $content
		];
		
		echo loadTemplate('../views/frontend/homeLayout.php', $tempVars);
?>