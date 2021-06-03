<?php
$title = "Claybrook Zoo - Add Reptiles"; 

if(isset($_POST['submitBtn']))
	{
	if($_POST['company_name'] == "" || $_POST['contactNum'] == "" ||$_POST['to_be_sponsored_animal']=="") echo "<script>alert('Fill in all the fields')</script>";
		else
		{

			$entries=[
				'company_name' => $_POST['company_name'],
        		'email' => $_POST['email'],
		        'contactNum' => $_POST['contactNum'],
		        'address' => $_POST['address'],
		        'existing_customer' => $_POST['existing_customer'],
		        'to_be_sponsored_animal' => $_POST['to_be_sponsored_animal'],
		        'animal_location' => $_POST['animal_location'],
		        'sponsorship_band' => $_POST['sponsorship_band'],
		        'total_price' => $_POST['total_price'],
		        'agreement_period' => $_POST['agreement_period'],
		        'agreed_display' => $_FILES['agreed_display']['name']
			];

			$directoryTargeted = "../images/signages/"; //path of the file of the images
            $fileName= $_FILES['agreed_display']['tmp_name']; //the uploaded file in the temporary directory on the web server. 
            $imgFileTargeted = $directoryTargeted.basename($_FILES['agreed_display']['name']);
            move_uploaded_file($fileName, $imgFileTargeted );

			$check = $sponsors_tb->save($entries);
			if($check == true){
				echo '
					<script>
					alert("Your Request has been saved. Please wait for our reply.");
					document.location = "sponsorFill";
					</script>';
			}else{
				echo '
					<script>
					alert(" Not Saved");
					</script>';
			}
		}
	}

	$cri=[
		'sponsors_tb'=>$sponsors_tb 
	];


$content = loadTemplate('../views/frontend/requestSponsorship.php',$cri);
?>