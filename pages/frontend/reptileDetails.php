<?php
	if(isset($_GET['id'])){ 
		$animalsR = $reptiles_tb->find('id', $_GET['id']); 
		$rowOfreptiles = $animalsR->fetchAll();
	}
	else{
		$rowOfreptiles =[];
	}
	
	$cri=[
		'rowOfreptiles'=>$rowOfreptiles
	];

		$title = "Claybrook Zoo";
		$content = loadTemplate("../views/frontend/reptileDetails.php", $cri) ?>

