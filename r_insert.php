<?php
    
	
	
	include("config.php");
	if($_SERVER['REQUEST_METHOD'] == 'POST')
	{
		$a = $_POST['fname'];
		$b = $_POST['lname'];
		$c = $_POST['cont'];
		$d = $_POST['email'];
		$e = $_POST['year'];
		$f = $_POST['branch'];
		$g = $_POST['class'];
		$h = $_POST['cgpa'];
		$i = $_POST['project'];
		$j = $_POST['ps'];
		
		
		
	$qry = mysqli_query($con, "INSERT INTO training_and_placement.resume(r_first_name,
	r_last_name, r_cont, r_email, r_year, r_branch,	r_class, r_cgpa, r_project, r_ps) 
	VALUES('$a', '$b', '$c', '$d', '$e', '$f', '$g', '$h', '$i', '$j')");

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

