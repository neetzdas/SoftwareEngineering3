<?php
	$animalsM = $mammals_tb->findAll();
	$cri=[
		'animalsM'=>$animalsM
	];

		$title = "Claybrook Zoo";
		$content = loadTemplate("../views/frontend/allMammals.php", $cri) ?>

