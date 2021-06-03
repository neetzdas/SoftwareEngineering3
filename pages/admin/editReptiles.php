<?php
	$title = "Claybrook Zoo - Edit Mammal"; 

	if (isset($_POST['submitBtn'])) {
		//variables for editing the furniture
		$criteriaForEdit = [
			'category_id' => $_POST['category_id'],
        	'name' => $_POST['name'],
		    'given_name' => $_POST['given_name'],
		    'dob' => $_POST['dob'],
		    'life_span' => $_POST['life_span'],
		     'diet' => $_POST['diet'],
		       'gender' => $_POST['gender'],
		        'habitat' => $_POST['habitat'],
		        'global_population' => $_POST['global_population'],
		        'date_joined' => $_POST['date_joined'],
		        'height' => $_POST['height'],
		        'weight' => $_POST['weight'],
		        'reproduction_type' => $_POST['reproduction_type'],
		        'clutch' => $_POST['clutch'],
		        'offspring' => $_POST['offspring'],
		        'added_by'=>$_SESSION['username'],
		        'status'=>$_POST['status'],
		        'image' => $_FILES['image']['name'],
				'id' => $_POST['id']
		];

		$reptilestmt = $reptiles_tb->save($criteriaForEdit, 'id'); 

		$directoryTargeted = "../../images/reptiles/"; 
        $fileName= $_FILES['image']['tmp_name']; 
        $imgFileTargeted = $directoryTargeted.basename($_FILES['image']['name']);
        move_uploaded_file($fileName, $imgFileTargeted );

		echo '<script>
					alert("Reptiles Updated");
					document.location = "listOfReptiles";
					</script>';

	}

     if (isset($_GET['del_Id'])) { 
		$deleteReptileStmt = $reptiles_tb->delete('id', $_GET['del_Id']); 
		echo "<script>alert('Reptiles Deleted!');
		window.location.href='listOfReptiles';</script>";
	}
		
	$tempVars=[
	'reptiles_tb'=>$reptiles_tb, 
	'cat_tb'=>$cat_tb
];

$content = loadTemplate('../../views/admin/v_editReptiles.php', $tempVars);

	?>
