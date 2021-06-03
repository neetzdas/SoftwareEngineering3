<?php
	$title = "Claybrook Zoo- Manage Cost"; 

	if(isset($_GET['edit_Id'])){ 
		$currentCost = $cost_tb->find('cost_id' , $_GET['edit_Id']); //getting edit id from the Cost to be edited
		$rowOfCost=$currentCost->fetch();
	}
	else{
		$rowOfCost =[];
	}

//after clicking the submit button
	if(isset($_POST['submitBtn']))
{

	//checking data inserted or not
	if($_POST['cost'] == "" || $_POST['age_grp'] == "" ) echo "<h2>Fill in the name</h2>";
		
else{
		$entries=[
			'cost_id'=>$_POST['cost_id'],
			'cost'=>$_POST['cost'],
			'age_grp'=>$_POST['age_grp']
		];
		$check = $cost_tb->save($entries,'cost_id');
		if($check == true){
			echo '
				<script>
				alert("Cost Saved");
				document.location = "manageCost";
				</script>';
		}else{
			echo '
				<script>
				alert("Cost Not Saved");
				</script>';
		}
	}
}


//for deletion of the Cost
	if (isset($_GET['del_Id'])) {
			$deleteCostStmt = $cost_tb->delete('cost_id', $_GET['del_Id']); //deleting the Cost after getting the delete id from the respective Cost
			echo "<script>alert('Cost Deleted!');
			window.location.href='manageCost';</script>";
		}
	
	$listCosts=$cost_tb->findAll();
	$costs_list=$listCosts->fetchAll();

	$cri=[
		'costs_list'=>$costs_list,
		'rowOfCost'=>$rowOfCost
	];
	$content = loadTemplate("../../views/admin/manageCost.php", $cri)
?>

