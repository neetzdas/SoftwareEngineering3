<?php
	$animalsM = $mammals_tb->find('status','1');
	$animalsR = $reptiles_tb->find('status','1');
	$animalsB = $birds_tb->find('display','1');
	$animalsF = $fishes_tb->find('display','1');
	$cri=[
		'animalsM'=>$animalsM,
		'animalsR'=>$animalsR,
		'animalsB'=>$animalsB,
		'animalsF'=>$animalsF
	];

		$title = "Claybrook Zoo";
		$content = loadTemplate("../views/frontend/main.php", $cri) ?>

