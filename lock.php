<?php

session_start();

if(!isset($_SESSION['login_user']))
{
	header("location:login.php");
}
    
	include('config.php');
	$user_check = $_SESSION['login_user'];
	
	$ses_sql = mysqli_query($con, "SELECT * FROM training_and_placement.student_reg
	            WHERE s_name ='$user_check' OR s_email ='$user_check'");
				
	$row = mysqli_fetch_array($ses_sql);
	echo '<center>'.'<h1>'.'<b>'."Hey ".$data=$row['s_name']." ,".'</b>'.'</h1>'.'<br>'.'</center>' ;
	
?>	
	