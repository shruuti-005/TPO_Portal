<?php

session_start();

if(!isset($_SESSION['login_hr']))
{
	header("location:hr_login.php");
}
    
	include('config.php');
	$user_check = $_SESSION['login_hr'];
	
	$ses_sql = mysqli_query($con, "SELECT * FROM training_and_placement.company_name
	            WHERE c_hr ='$user_check' ");
				
	$row = mysqli_fetch_array($ses_sql);
	
echo "<center><h1><b>Hey, $row[c_hr]!</b></h1></center>";	
?>	
	