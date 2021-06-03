<?php
$title = "Claybrook Zoo - Add Mammals"; 

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
		        'gestation' => $_POST['gestation'],
		        'temperature' => $_POST['temperature'],
		        'added_by'=>$_SESSION['username'],
		        'status'=>$_POST['status'],
		        'image' => $_FILES['image']['name']
			];

			$directoryTargeted = "../../images/mammals/"; //path of the file of the images
            $fileName= $_FILES['image']['tmp_name']; //the uploaded file in the temporary directory on the web server. 
            $imgFileTargeted = $directoryTargeted.basename($_FILES['image']['name']);
            move_uploaded_file($fileName, $imgFileTargeted ); 

			$check = $mammals_tb->save($entries);
			if($check == true){
				echo '
					<script>
					alert("Mammals Saved");
					document.location = "listOfMammals";
					</script>';
			}else{
				echo '
					<script>
					alert("Mammals Not Saved");
					</script>';
			}
		}
	}

	$cri=[
		'mammals_tb'=>$mammals_tb, 
		'cat_tb' =>$cat_tb  
	];


$content = loadTemplate('../../views/admin/v_addMammals.php',$cri);
?>