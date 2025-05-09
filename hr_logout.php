<?php

session_start();

if(isset($_SESSION['login_hr']))
{
	
	unset($_SESSION['login_hr']);
	
	if(!isset($_SESSION['login_hr']));
	{
		header("Location:hr_login.php");
	}
	
}
?>