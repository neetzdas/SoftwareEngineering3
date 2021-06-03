<?php
	$title = "Claybrook Zoo - Edit Sponsorship Details"; 

	if (isset($_POST['submitBtn'])) {
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
		        'agreed_display' => $_FILES['agreed_display']['name'],
		        'sponsor_id' => $_POST['sponsor_id']
			];

			$sponsorStmt = $sponsors_tb->save($entries, 'sponsor_id'); 

			$directoryTargeted = "../../images/signages/"; //path of the file of the images
            $fileName= $_FILES['agreed_display']['tmp_name']; //the uploaded file in the temporary directory on the web server. 
            $imgFileTargeted = $directoryTargeted.basename($_FILES['agreed_display']['name']);
            move_uploaded_file($fileName, $imgFileTargeted );
			echo '<script>
					alert("Sponsorship Details Updated");
					document.location = "listOfSponsorships";
					</script>';

}

     if (isset($_GET['del_Id'])) { 
		$deleteSponsorshipStmt = $sponsors_tb->delete('sponsor_id', $_GET['del_Id']); 
		echo "<script>alert('Sponsorship Deleted!');
		window.location.href='listOfSponsorships';</script>";
	}
		
	$tempVars=[
	'sponsors_tb'=>$sponsors_tb
];

$content = loadTemplate('../../views/admin/manageSponsors.php', $tempVars);

	?>
