<?php
$title = "Claybrook Zoo - Contact Form"; 

if(isset($_POST['submitBtn']))
	{
	$entries=[
				'name' => $_POST['name'],
        		'email' => $_POST['email'],
		        'subject' => $_POST['subject'],
		        'message' => $_POST['message']
			];

			$check = $contact_tb->save($entries);
			if($check == true){
				echo '
					<script>
					alert("Your Enquiry has been sent.");
					document.location = "contact";
					</script>';
			}else{
				echo '
					<script>
					alert(" Not Saved");
					</script>';
			}
		}

	$cri=[
		'contact_tb'=>$contact_tb
	];

$content = loadTemplate('../views/frontend/contact.php',$cri);
?>