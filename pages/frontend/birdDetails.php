<?php
	if(isset($_GET['id'])){ 
		$animalsB = $birds_tb->find('id', $_GET['id']); 
		$rowOfbirds = $animalsB->fetchAll();
	}
	else{
		$rowOfbirds =[];
	}
	
	$cri=[
		'rowOfbirds'=>$rowOfbirds
	];

		$title = "Claybrook Zoo";
		$content = loadTemplate("../views/frontend/birdDetails.php", $cri) ?>

