<?php
	$title = "Claybrook Zoo- List Of Fishes"; 
	
	$listFishes=$fishes_tb->findAll();
	$fishes_list=$listFishes->fetchAll();

	$category_name=$cat_tb->findAll();

	$cri=[
		'fishes_list'=>$fishes_list,
		'category_name'=>$category_name
	];
	$content = loadTemplate("../../views/admin/zooM_fishes_view.php", $cri)
?>

