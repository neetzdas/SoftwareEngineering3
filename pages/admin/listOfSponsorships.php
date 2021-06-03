<?php
	$title = "Claybrook Zoo- Manage Sponsors"; 

	$listSponsors=$sponsors_tb->findAll();
	$sponsors_list=$listSponsors->fetchAll();

	$listRoles=$role_tb->findAll();
	$roles=$listRoles->fetchAll();

	$cri=[
		'sponsors_list'=>$sponsors_list
		
	];
	$content = loadTemplate("../../views/admin/v_listOfSponsorship.php", $cri)
?>

