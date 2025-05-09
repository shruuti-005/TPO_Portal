<?php

error_reporting(0);

session_start();

include("config.php");
if(isset($_SESSION['login_hr']))
	{
		header("location:hr_home.php");
	}
	    
		if($_SERVER["REQUEST_METHOD"] == "POST")
		{
			$dname = $_POST['hr'];
			$dpass = $_POST['pass'];
			$pass = $dpass;
		
	
	$sql = "SELECT c_id FROM training_and_placement.company_name WHERE 
	       c_hr ='$dname' AND c_pass='$pass'";
		   
	$result =   mysqli_query($con, $sql);
	$row = mysqli_fetch_array($result);
	
	$count = mysqli_num_rows($result);
	
	if($count == 1)
	{
	    $_SESSION['login_hr'] = $dname;
        
		header("location:hr_home.php");
	}
	else{
		
		echo "Your Login Name or Password is Invalid";
		
	}
}
	

?>

<html>
	<body>
	
    <head>
	<style>
	    body {
            font-family: 'Segoe UI', sans-serif;
            background: linear-gradient(135deg, #4A90E2, #A52A2A);
            background-size: cover;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            color: #333;
        }
		#reg {
            background-color: rgba(255, 255, 255, 0.9);
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            max-width: 400px;
            width: 100%;
            text-align: center;
        }

        #reg h1 {
            font-size: 28px;
            color: #4A90E2;
            margin-bottom: 20px;
            font-weight: bold;
            letter-spacing: 1px;
        }
		#reg h2 {
            font-size: 16px;
            color: #666;
            margin: 20px 0 10px;
        }

        #reg input[type="text"], #reg input[type="password"] {
            width: calc(100% - 20px);
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 14px;
            box-sizing: border-box;
            transition: all 0.3s ease;
        }

        #reg input[type="text"]:focus, #reg input[type="password"]:focus {
            border-color: #4A90E2;
            box-shadow: 0 0 5px rgba(74, 144, 226, 0.5);
            outline: none;
        }

 
        #reg button {
            background: linear-gradient(135deg, #ff8c00, #ff6347);
            color: white;
            border: none;
            padding: 12px 20px;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 10px;
            transition: all 0.3s ease;
            text-decoration: none;
            display: inline-block;
            width: 100%;
        }
        #reg button:hover {
            background: linear-gradient(135deg, #ff6347, #ff8c00);
            box-shadow: 0px 4px 10px rgba(255, 99, 71, 0.4);
            transform: translateY(-2px);
        }

        #reg button a {
            color: white;
            text-decoration: none;
            font-weight: bold;
        }
		</style>
	</head>


<form id="reg" action = "" method = "POST">
    
	<h1> HR Login Page </h1>
	
Name : <input type="text" name="hr" id="name"
	    value="" placeholder="Enter Username "><br/><br/>

Password : <input type="password" name="pass" id="pass"
	    value="" placeholder="Enter Password"><br/><br/>
		
		<button>Login</button>
		
		
		
</form>
</body>
</html>