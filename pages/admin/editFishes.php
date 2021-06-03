<?php
	$title = "Claybrook Zoo - Edit Fishes"; 

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
		        'temperature' => $_POST['temperature'],
		        'water_type' => $_POST['water_type'],
		        'color' => $_POST['color'],
		        'added_by'=>$_SESSION['username'],
		        'display'=>$_POST['display'],
		        'image' => $_FILES['image']['name'],
				'id' => $_POST['id']
		];

		$fishestmt = $fishes_tb->save($criteriaForEdit, 'id'); 

		$directoryTargeted = "../../images/fishes/"; 
        $fileName= $_FILES['image']['tmp_name']; 
        $imgFileTargeted = $directoryTargeted.basename($_FILES['image']['name']);
        move_uploaded_file($fileName, $imgFileTargeted );

		echo '<script>
					alert("Fishes Updated");
					document.location = "listOfFishes";
					</script>';

	}

     if (isset($_GET['del_Id'])) { 
		$deleteFishStmt = $fishes_tb->delete('id', $_GET['del_Id']); 
		echo "<script>alert('Fishes Deleted!');
		window.location.href='listOfFishes';</script>";
	}
		
	$tempVars=[
	'fishes_tb'=>$fishes_tb, 
	'cat_tb'=>$cat_tb
];

$content = loadTemplate('../../views/admin/v_editFishes.php', $tempVars);

	?>
