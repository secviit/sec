<?php
session_start();
require 'dbconfig.php';	
include('security.php');

if(isset($_POST['login_btn']))
{
    $username_login = $_POST['usernamee'];
    $password_login = $_POST['passwordd'];
  
	$query = "SELECT * FROM admin_table WHERE username='$username_login' AND password= '$password_login' ";
	$query_run = mysqli_query($connection, $query);
	if(mysqli_fetch_array($query_run))
	{
		$_SESSION['username'] =  $username_login;
		header('Location:index.php');
	}
	else 
	{
		$_SESSION['status'] =  "Username/Password is invalid";
		header('Location: login.php');
	}

}
if(isset($_POST['logout_btn'])){
	session_destroy();
	unset($_SESSION['username']);
	header('Location: login.php');
}	

if(isset($_POST['admin_register_btn'])){
	$first =$_POST['first_name'];
	$last =$_POST['last_name'];
	$username = $_POST['user_name'];
	$email =$_POST['email'];
	$password = $_POST['pass'];
	$con_password = $_POST['con_pass'];
	if($password === $con_password)
    {
        $query = "INSERT INTO admin_table (FirstName,LastName,username,email,password) VALUES ('$first','$last','$username','$email','$password')";
        $query_run = mysqli_query($connection, $query);
    
        if($query_run)
        {
            $_SESSION['success'] =  "Admin is Added Successfully";
            header('Location: admin_register.php');
        }
        else 
        {
            echo "not done";
            $_SESSION['status'] =  "Admin is Not Added";
            header('Location: admin_register.php');
        }
    }
    else 
    {
        echo "pass no match";
        $_SESSION['status'] =  "Password and Confirm Password Does not Match";
        header('Location: admin_register.php');
    }
}

if(isset($_POST['delete_btn'])){
	$id = $_POST['delete_id'];
	
	$query = "DELETE FROM admin_table WHERE id='$id' ";
    $query_run = mysqli_query($connection, $query);
	if($query_run){
		$_SESSION['success'] =  "Your data is deleted";
        header('Location: admin_table.php');
	}
	else{
		$_SESSION['status'] =  "Your data is NOT deleted";
        header('Location: admin_table.php');
	}
}

if(isset($_POST['deletemember_btn'])){
	$id = $_POST['deletemember_id'];
	
	$query = "DELETE FROM member_table WHERE id='$id' ";
    $query_run = mysqli_query($connection, $query);
	if($query_run){
		$_SESSION['success'] =  "Your data is deleted";
        header('Location:member_table.php');
	}
	else{
		$_SESSION['status'] =  "Your data is NOT deleted";
        header('Location:member_table.php');
	}
}
if(isset($_POST['member_register_btn'])){
	$first =$_POST['first_name'];
	$last =$_POST['last_name'];
	$username = $_POST['user_name'];
	$email =$_POST['email'];
	$password = $_POST['pass'];
	$con_password = $_POST['con_pass'];
	if($password === $con_password)
    {
        $query = "INSERT INTO member_table (FirstName,LastName,username,email,password) VALUES ('$first','$last','$username','$email','$password')";
        $query_run = mysqli_query($connection, $query);
    
        if($query_run)
        {
            $_SESSION['success'] =  "Member is Added Successfully";
            header('Location: admin_register.php');
        }
        else 
        {
            echo "not done";
            $_SESSION['status'] =  "Member is Not Added";
            header('Location: admin_register.php');
        }
    }
    else 
    {
        echo "pass no match";
        $_SESSION['status'] =  "Password and Confirm Password Does not Match";
        header('Location: admin_register.php');
    }
}

?>