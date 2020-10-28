<?php
session_start();
require 'admin_files/dbconfig.php';	

if(isset($_POST['query_btn'])){
	$name =$_POST['name'];
	$email =$_POST['email'];
	$query1 = $_POST['query'];

	$query = "INSERT INTO query_table (name,email,query) VALUES ('$name','$email','$query1')";
	$query_run = mysqli_query($connection, $query);

	if($query_run)
	{
		$_SESSION['success'] =  "Query is submitted";
		header('Location:support.php');
	}
	else 
	{
		echo "not done";
		$_SESSION['status'] =  "Query is not submitted";
		header('Location:support.php');
	}
   
}
?>