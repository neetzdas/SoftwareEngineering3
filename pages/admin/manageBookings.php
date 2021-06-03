<?php
	$title = "Claybrook Zoo- List Of Bookings"; 
	
	$listBookings=$bookings_tb->findAll();
	$bookings_list=$listBookings->fetchAll();

	$cost=$cost_tb->findAll();

	$cri=[
		'bookings_list'=>$bookings_list,
		'cost'=>$cost
	];

	 if (isset($_GET['del_Id'])) { 
		$deleteBookingStmt = $bookings_tb->delete('id', $_GET['del_Id']); 
		echo "<script>alert('Booking Deleted!');
		window.location.href='manageBookings';</script>";
	}
		
	$content = loadTemplate("../../views/admin/manageBookings.php", $cri)
?>

