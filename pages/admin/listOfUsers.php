<?php
	$title = "Claybrook Zoo- Manage Users"; 

	$listUsers=$users_tb->findAll();
	$users_list=$listUsers->fetchAll();

	$listRoles=$role_tb->findAll();
	$roles=$listRoles->fetchAll();

	$cri=[
		'users_list'=>$users_list,
		'roles'=>$roles
		
	];
	$content = loadTemplate("../../views/admin/v_listOfUsers.php", $cri)
?>

