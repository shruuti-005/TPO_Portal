<?php
    
	
	
	include("config.php");
	if($_SERVER['REQUEST_METHOD'] == 'POST')
	{
		$a = $_POST['name'];
		$b = $_POST['cont'];
		$c = $_POST['email'];
		$d = $_POST['branch'];
		$e = $_POST['class'];
		$f = md5($_POST['pass']);
		
		
		
		
	$qry = mysqli_query($con, "INSERT INTO training_and_placement.student_reg(s_name,
	s_cont,	s_email, s_branch,	s_class, s_pass) VALUES('$a', '$b',
	'$c', '$d', '$e', '$f')");

		if($qry == true)                       
		{                                      
			echo "<center>"." Submitted "."</center>";
		}                                      
        else                                   
        {                                      
			echo "Not".mysqli_error();
		}			
	}
	else{
		echo "Request Method is not POST";
	}
?>

