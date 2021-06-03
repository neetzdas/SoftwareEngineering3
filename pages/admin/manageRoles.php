<?php
	$title = "Claybrook Zoo- Manage Roles"; 

//editing the Role from tha databasse
	if(isset($_GET['edit_Id'])){ 
		$currentRole = $role_tb->find('id' , $_GET['edit_Id']); //getting edit id from the Role to be edited
		$rowOfRole=$currentRole->fetch();
	}
	else{
		$rowOfRole =[];
	}

//after clicking the submit button
	if(isset($_POST['submitBtn']))
{

	//checking data inserted or not
	if($_POST['title'] == "" ) echo "<h2>Fill in the title</h2>";
		
else{
		$entries=[
			'id'=>$_POST['id'],
			'title'=>$_POST['title']
		];
		$check = $role_tb->save($entries,'id');
		if($check == true){
			echo '
				<script>
				alert("Role Saved");
				document.location = "manageRoles";
				</script>';
		}else{
			echo '
				<script>
				alert("Role Not Saved");
				</script>';
		}
	}
}


//for deletion of the Role
	if (isset($_GET['del_Id'])) {
			$deleteRoleStmt = $role_tb->delete('id', $_GET['del_Id']); //deleting the Role after getting the delete id from the respective Role
			echo "<script>alert('Role Deleted!');
			window.location.href='manageRoles';</script>";
		}
	
	$listRoles=$role_tb->findAll();
	$roles_list=$listRoles->fetchAll();

	$cri=[
		'roles_list'=>$roles_list,
		'rowOfRole'=>$rowOfRole
	];
	$content = loadTemplate("../../views/admin/roles.php", $cri)
?>

