<?php 
	require '../db/connectDb.php'; 
	require '../classes/DatabaseTable.php';
	require '../functions/loadTemplate.php';
	
	$birds_tb = new DatabaseTable('birds'); 
	$mammals_tb = new DatabaseTable('mammals');
	$reptiles_tb= new DatabaseTable('reptiles');
	$fishes_tb = new DatabaseTable('fish');
	$cat_tb = new DatabaseTable('categoriesof_animals');
	$users_tb = new DatabaseTable('users');
	$sponsors_tb = new DatabaseTable('sponsors');
	$bookings_tb = new DatabaseTable('bookings');
	$cost_tb= new DatabaseTable('cost');
	$role_tb = new DatabaseTable('roles');
	$contact_tb = new DatabaseTable('contact');
?>