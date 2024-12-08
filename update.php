<?php
include("config.php");

$get = $_GET['edit'];
if(isset($_POST['submit']))
{
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$year = $_POST['year'];
	$branch = $_POST['branch'];
	$class = $_POST['class'];
	$cgpa = $_POST['cgpa'];
	$ps = $_POST['ps'];
	
	$qry = mysqli_query($con, "UPDATE resume SET  r_first_name  = '$fname', 
	r_last_name = '$lname', r_year = '$year', r_branch = '$branch', r_class = '$class', 
	r_cgpa = '$cgpa', r_ps = '$ps' WHERE r_id = '$get'");
	                                       
	if($qry)                               
	{                                      
	    echo "<center>"."Successfully Updated"."</center>"."</br>"."</br>";    
	}                                      
	else
	{
		echo "Not";
	}
}

    //fetch Details of Particular Person


    $qry = mysqli_query($con, "SELECT * FROM resume WHERE r_id = '$get'");
	
	while($row = mysqli_fetch_array($qry))
	{
		?>
	<html>
    <head>
    <title>Update User</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background: linear-gradient(135deg, #4A90E2, #A52A2A);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            color: #333;
        }


#reg {
    background-color: rgba(255, 255, 255, 0.9);   
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    max-width: 100%;
	height: 50vh;
    width: 150vh;
    text-align: center;
}

.container {
    background: white;
    padding: 30px;
	align-items: center;
    border-radius: 10px;
    box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
    display: flex;
    flex-direction: column;
    gap: 10px;
    width: 100%;
    max-width: 90%;
	text-align: center;
}


        .form-row {
            display: flex;
            justify-content: space-between;
            gap: 5px;
        }

        .form-row label {
            flex: 1;
            display: flex;
            align-items: center;
            font-weight: bold;
        }

        .form-row input[type="text"],
        .form-row input[type="float"],
        .form-row select {
            flex: 2;
            padding: 10px;
			margin:10px;
            font-size: 14px;
            border-radius: 5px;
            border: 1px solid #ccc;
            outline: none;
        }

        .placement-status {
    text-align: center;
    margin: 20px 0; /* Add spacing above and below */
}

.placement-status label {
    font-weight: bold;
    font-size: 16px;
    margin-bottom: 10px;
    display: block; /* Ensure label is on its own line */
}

.placement-status input[type="radio"] {
    margin: 0 10px; /* Space between radio buttons */
    transform: scale(1.2); /* Enlarge radio buttons for better visibility */
}


        button {
            background: #4caf50; /* Green */
            color: white;
            border: none;
            padding: 15px 20px;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
            transition: background 0.3s ease;
        }

        button:hover {
            background: #45a049; /* Darker green */
        }

        button a {
            color: white;
            text-decoration: none;
            font-weight: bold;
        }

        h1 {
            text-align: center;
            font-size: 24px;
            color: #4A90E2;
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>Update User Information</h1>
        <form id="reg" action="" method="POST">
            <div class="form-row">
                <label for="fname">First Name:</label>
                <input type="text" id="fname" name="fname" value="<?php echo $row['r_first_name']; ?>" placeholder="First Name">
                <label for="lname">Last Name:</label>
                <input type="text" id="lname" name="lname" value="<?php echo $row['r_last_name']; ?>" placeholder="Last Name">
            </div>
            <div class="form-row">
                <label for="year">PassOut Year:</label>
                <select id="year" name="year">
                    <option value="<?php echo $row['r_year']; ?>" selected><?php echo $row['r_year']; ?></option>
                    <option value="2020-2021">2020-2021</option>
                    <option value="2021-2022">2021-2022</option>
                    <option value="2022-2023">2022-2023</option>
                    <option value="2023-2024">2023-2024</option>
                    <option value="2024-2025">2024-2025</option>
                </select>
                <label for="branch">Branch:</label>
                <select id="branch" name="branch">
                    <option value="<?php echo $row['r_branch']; ?>" selected><?php echo $row['r_branch']; ?></option>
                    <option value="CSE">CSE</option>
                    <option value="IT">IT</option>
                    <option value="AI&DS">AI and DS</option>
                    <option value="E&TC">E and TC</option>
                    <option value="ECE">ECE</option>
                    <option value="Mech">Mech</option>
                    <option value="Civil">Civil</option>
                </select>
            </div>
            <div class="form-row">
                <label for="class">Class:</label>
                <select id="class" name="class">
                    <option value="<?php echo $row['r_class']; ?>" selected><?php echo $row['r_class']; ?></option>
                    <option value="FY">First Year</option>
                    <option value="SY">Second Year</option>
                    <option value="TY">Third Year</option>
                    <option value="FinalYear">Final Year</option>
                </select>
                <label for="cgpa">CGPA:</label>
                <input type="float" id="cgpa" name="cgpa" value="<?php echo $row['r_cgpa']; ?>" placeholder="Enter CGPA">
            </div>
            <div class="placement-status">
    <label>Placement Status:</label><br>
    <input type="radio" name="ps" value="Selected" <?php if ($row['r_ps'] == 'Selected') echo "checked"; ?>> Selected
    <input type="radio" name="ps" value="Not Selected" <?php if ($row['r_ps'] == 'Not Selected') echo "checked"; ?>> Not Selected
</div>

            <div class="form-row" style="justify-content: center;">
                <button type="submit" name="submit">Update Status</button>
                <button><a href="hr_home.php">Back</a></button>
            </div>
        </form>
    </div>
</body>
</html>
		<?php
	}

?>