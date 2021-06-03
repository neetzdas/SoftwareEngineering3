<?php
	if(isset($_GET['id'])){ 
		$animalsF = $fishes_tb->find('id', $_GET['id']); 
		$rowOffishes = $animalsF->fetchAll();
	}
	else{
		$rowOffishes =[];
	}
	
	$cri=[
		'rowOffishes'=>$rowOffishes
	];

		$title = "Claybrook Zoo";
		$content = loadTemplate("../views/frontend/fishDetails.php", $cri) ?>

