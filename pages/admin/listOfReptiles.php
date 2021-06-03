<?php
	$title = "Claybrook Zoo- List Of Reptiles"; 
	
	$listReptiles=$reptiles_tb->findAll();
	$reptiles_list=$listReptiles->fetchAll();

	$category_name=$cat_tb->findAll();

	$cri=[
		'reptiles_list'=>$reptiles_list,
		'category_name'=>$category_name
	];
	$content = loadTemplate("../../views/admin/v_listOfReptiles.php", $cri)
?>

