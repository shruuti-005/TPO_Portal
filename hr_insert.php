<?php
    
	
	
	include("config.php");
	if($_SERVER['REQUEST_METHOD'] == 'POST')
	{
		$a = $_POST['cname'];
		$b = $_POST['hr'];
		$c = $_POST['pass'];
		
		
	$qry = mysqli_query($con, "INSERT INTO training_and_placement.company_name(c_name,
	c_hr, c_pass) VALUES('$a', '$b', '$c')");

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

