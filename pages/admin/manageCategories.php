<?php
	$title = "Claybrook Zoo- Manage Category"; 

//editing the category from tha databasse
	if(isset($_GET['edit_Id'])){ 
		$currentCategory = $cat_tb->find('cat_id' , $_GET['edit_Id']); //getting edit id from the category to be edited
		$rowOfCategory=$currentCategory->fetch();
	}
	else{
		$rowOfCategory =[];
	}

//after clicking the submit button
	if(isset($_POST['submitBtn']))
{

	//checking data inserted or not
	if($_POST['cat_name'] == "" ) echo "<h2>Fill in the name</h2>";
		
else{
		$entries=[
			'cat_id'=>$_POST['cat_id'],
			'cat_name'=>$_POST['cat_name']
		];
		$check = $cat_tb->save($entries,'cat_id');
		if($check == true){
			echo '
				<script>
				alert("Category Saved");
				document.location = "manageCategories";
				</script>';
		}else{
			echo '
				<script>
				alert("Category Not Saved");
				</script>';
		}
	}
}


//for deletion of the category
	if (isset($_GET['del_Id'])) {
			$deletecategoryStmt = $cat_tb->delete('cat_id', $_GET['del_Id']); //deleting the category after getting the delete id from the respective category
			echo "<script>alert('Category Deleted!');
			window.location.href='manageCategories';</script>";
		}
	
	$listCategories=$cat_tb->findAll();
	$categories_list=$listCategories->fetchAll();

	$cri=[
		'categories_list'=>$categories_list,
		'rowOfCategory'=>$rowOfCategory
	];
	$content = loadTemplate("../../views/admin/categories.php", $cri)
?>

