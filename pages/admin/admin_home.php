<?php 
	$title = "Claybrook Zoo- Admin";
	$allCategories=$cat_tb->findAll();
	$allCategories_list=$allCategories->fetchAll();

	$cri=[
		'allCategories_list'=>$allCategories_list,
		'loggingIn'=>$users_tb
	];
	$content = loadTemplate("../../views/admin/admin_homeView.php", $cri) 
?>



		