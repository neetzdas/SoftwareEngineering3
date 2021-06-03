<?php
	$title = "Claybrook Zoo- List Of Birds"; 
	
	$listBirds=$birds_tb->findAll();
	$birds_list=$listBirds->fetchAll();

	$category_name=$cat_tb->findAll();

	$cri=[
		'birds_list'=>$birds_list,
		'category_name'=>$category_name
	];
	$content = loadTemplate("../../views/admin/zooM_birds_view.php", $cri)
?>

