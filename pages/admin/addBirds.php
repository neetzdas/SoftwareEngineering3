<?php
$title = "Claybrook Zoo - Add Birds"; 

if(isset($_POST['submitBtn']))
	{
	if($_POST['name'] == "" || $_POST['date_joined'] == "" ||$_POST['life_span']=="") echo "<script>alert('Fill in all the fields')</script>";
		else
		{

			$entries=[
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
		        'image' => $_FILES['image']['name']
			];

			$directoryTargeted = "../../images/birds/"; //path of the file of the images
            $fileName= $_FILES['image']['tmp_name']; //the uploaded file in the temporary directory on the web server. 
            $imgFileTargeted = $directoryTargeted.basename($_FILES['image']['name']);
            move_uploaded_file($fileName, $imgFileTargeted ); 

			$check = $birds_tb->save($entries);
			if($check == true){
				echo '
					<script>
					alert("Birds Saved");
					document.location = "listOfBirds";
					</script>';
			}else{
				echo '
					<script>
					alert("Birds Not Saved");
					</script>';
			}
		}
	}

	$cri=[
		'birds_tb'=>$birds_tb, 
		'cat_tb' =>$cat_tb  
	];


$content = loadTemplate('../../views/admin/v_addBirds.php',$cri);
?>