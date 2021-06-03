<?php
	$title = "Claybrook Zoo - Edit Birds"; 

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
		        'nest' => $_POST['nest'],
		        'clutch' => $_POST['clutch'],
		        'wingspan' => $_POST['wingspan'],
		        'fly' => $_POST['fly'],
		        'plumage_color' => $_POST['plumage_color'],
		        'added_by'=>$_SESSION['username'],
		        'display'=>$_POST['display'],
		        'image' => $_FILES['image']['name'],
				'id' => $_POST['id']
		];

		$birdstmt = $birds_tb->save($criteriaForEdit, 'id'); 

		$directoryTargeted = "../../images/birds/"; 
        $fileName= $_FILES['image']['tmp_name']; 
        $imgFileTargeted = $directoryTargeted.basename($_FILES['image']['name']);
        move_uploaded_file($fileName, $imgFileTargeted );

		echo '<script>
					alert("Birds Updated");
					document.location = "listOfBirds";
					</script>';

	}

     if (isset($_GET['del_Id'])) { 
		$deleteBirdStmt = $birds_tb->delete('id', $_GET['del_Id']); 
		echo "<script>alert('Birds Deleted!');
		window.location.href='listOfBirds';</script>";
	}
		
	$tempVars=[
	'birds_tb'=>$birds_tb, 
	'cat_tb'=>$cat_tb
];

$content = loadTemplate('../../views/admin/v_editBirds.php', $tempVars);

	?>
