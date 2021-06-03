<?php
$title = "Claybrook Zoo - Book Tickets"; 

if(isset($_POST['submitBtn']))
	{
	if($_POST['fullName'] == "" || $_POST['contactNum'] == "" ||$_POST['email']=="") echo "<script>alert('Fill in all the fields')</script>";
		else
		{

			$entries=[
				'fullName' => $_POST['fullName'],
        		'email' => $_POST['email'],
		        'contactNum' => $_POST['contactNum'],
		        'age_group' => $_POST['age_group'],
		        'total_ticket' => $_POST['total_ticket'],
		        'cost' => $_POST['cost'],
			];

			$check = $bookings_tb->save($entries);
			if($check == true){
				echo '
					<script>
					alert("Your Booking is Completed.");
					document.location = "bookTickets";
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
		'bookings_tb'=>$bookings_tb,
		'cost_tb' => $cost_tb
	];


$content = loadTemplate('../views/frontend/bookTickets.php',$cri);
?>