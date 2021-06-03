<?php
	$title = "Claybrook Zoo - Edit Users"; 

	if (isset($_POST['submitBtn'])) {
		//variables for editing the furniture
		$criteriaForEdit = [
					'firstName'=> $_POST['firstName'],
		            'lastName'=> $_POST['lastName'],
		            'contactNum' => $_POST['contactNum'],
		            'username' => $_POST['username'],
		            'password' => password_hash($_POST['password'], PASSWORD_BCRYPT), 
		            'email' => $_POST['email'],
		            'role_id' => $_POST['role_id'],
					'user_id' => $_POST['user_id']
		];

		$userstmt = $users_tb->save($criteriaForEdit, 'user_id'); 
		echo '<script>
					alert("Users Updated");
					document.location = "listOfUsers";
					</script>';

	}


	$tempVars=[
	'users_tb'=>$users_tb, 
	'role_tb'=>$role_tb
];

$content = loadTemplate('../../views/admin/v_editUsers.php', $tempVars);

	?>
