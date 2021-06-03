<?php
	$title = "Claybrook Zoo - Add Users "; //title of the page
	

//after clicking the add submit button
	if (isset($_POST['submitBtn'])) { 
		
			$user_Validation = $users_tb->validatingFunc('username',$_POST['username']); //validating the username to reduce the duplicacy in the username
		    $row = $user_Validation->fetch();

		    if($row['row'] > 0 ){
		    	echo '
					<script>
					alert("Duplicate username");
					document.location = "listOfUsers";
					</script>'; 
		  	}
		  	
		  	else{
		  		$criteriaForUser =[
		  			'firstName'=> $_POST['firstName'],
		            'lastName'=> $_POST['lastName'],
		            'contactNum' => $_POST['contactNum'],
		            'username' => $_POST['username'],
		            'password' => password_hash($_POST['password'], PASSWORD_BCRYPT), 
		            'email' => $_POST['email'],
		            'role_id' => $_POST['role_id']
		        ];
		          
			   	$users_tb->save($criteriaForUser); 
			   	echo '
					<script>
					alert("Users Saved");
					document.location = "listOfUsers";
					</script>';
			
		}
	}

//after getting delete i from the admin the admi is deleted. 
	if (isset($_GET['del_Id'])) {
		$userdeleteStmt= $users_tb->delete('user_id', $_GET['del_Id']); //deleting function used
		echo "<script>alert('User Deleted!');
		window.location.href='listOfUsers';</script>";
	}


	$tempVars =[
		'users_tb'=>$users_tb,
		'role_tb' =>$role_tb
	];
	

	$content = loadTemplate('../../views/admin/v_addUsers.php',$tempVars);
?>
