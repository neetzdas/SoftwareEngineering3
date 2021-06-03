<?php
	if(isset($_GET['id'])){ 
		$animalsM = $mammals_tb->find('id', $_GET['id']); 
		$rowOfMammals = $animalsM->fetchAll();
	}
	else{
		$rowOfMammals =[];
	}
	
	$cri=[
		'rowOfMammals'=>$rowOfMammals
	];

		$title = "Claybrook Zoo";
		$content = loadTemplate("../views/frontend/mammalDetails.php", $cri) ?>

