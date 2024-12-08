<?php

include("config.php");
if($_SERVER['REQUEST_METHOD'] == 'POST')
{
	
	$name = $_POST['name'];
	$pass = md5($_POST['pass']);
	
	$qry = mysqli_query($con, "UPDATE training_and_placement.student_reg SET s_pass = '$pass'
	        WHERE (s_name = '$name' OR s_email = '$name')");
			
	if($qry == true)
	{
		echo "Password Changed";
	}
	else
	{
		echo "Not".mysqli_error();
	}
}
else
{
	echo "Not Post";
}
?>