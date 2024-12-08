<?php

session_start();

if(!isset($_SESSION['login_admin']))
{
	header("location:tpo_login.php");
}
    
	include('config.php');
	$user_check = $_SESSION['login_admin'];
	
	$ses_sql = mysqli_query($con, "SELECT * FROM training_and_placement.officer
	            WHERE o_name ='$user_check' ");
				
	$row = mysqli_fetch_array($ses_sql);
	
	echo '<h1 style="color:white;">'.'<b>'."Hey ".$data=$row['o_name']." !".'</b>'.'</br>'.'</br>';
	
?>	
	