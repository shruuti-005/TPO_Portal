<?php

session_start();

if(isset($_SESSION['login_admin']))
{
	
	unset($_SESSION['login_admin']);
	
	if(!isset($_SESSION['login_admin']));
	{
		header("Location:tpo_login.php");
	}
	
}
?>