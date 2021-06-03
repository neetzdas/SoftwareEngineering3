<?php
	$title = "Claybrook Zoo- List Of Mammals"; 
	
	$listMammals=$mammals_tb->findAll();
	$mammals_list=$listMammals->fetchAll();

	$category_name=$cat_tb->findAll();

	$cri=[
		'mammals_list'=>$mammals_list,
		'category_name'=>$category_name
	];
	$content = loadTemplate("../../views/admin/v_listOfMammals.php", $cri)
?>

