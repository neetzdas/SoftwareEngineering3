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
		        'gestation' => $_POST['gestation'],
		        'temperature' => $_POST['temperature'],
		        'added_by'=>$_SESSION['username'],
		        'status'=>$_POST['status'],
		        'image' => $_FILES['image']['name'],
				'id' => $_POST['id']
		];

		$mammalStmt = $mammals_tb->save($criteriaForEdit, 'id'); 

		$directoryTargeted = "../../images/mammals/"; 
        $fileName= $_FILES['image']['tmp_name']; 
        $imgFileTargeted = $directoryTargeted.basename($_FILES['image']['name']);
        move_uploaded_file($fileName, $imgFileTargeted );

		echo '<script>
					alert("Mammals Updated");
					document.location = "listOfMammals";
					</script>';

	}

     if (isset($_GET['del_Id'])) { 
		$deleteMammmalStmt = $mammals_tb->delete('id', $_GET['del_Id']); 
		echo "<script>alert('Mammal Deleted!');
		window.location.href='listOfMammals';</script>";
	}
		
	$tempVars=[
	'mammals_tb'=>$mammals_tb, 
	'cat_tb'=>$cat_tb
];

$content = loadTemplate('../../views/admin/v_editMammals.php', $tempVars);

	?>
