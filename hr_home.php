<?php
    
	include"hr_lock.php";
	
?>	


<html>

    <head>
    <meta charset="UTF-8">
    <title>Home Page</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background: linear-gradient(135deg, #4A90E2, #A52A2A);
            color: #333;
            display: flex;
            align-items: center;
            height: 200vh;
            flex-direction: column;
            text-align: center;
            margin: 0;
        }

        h1 {
            margin-top: 20px;
            font-size: 36px;
            color: #fff;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
        }

        form {
            display: inline-block;
            justify-content: center;
            margin-top: 20px;
            padding: 20px;
            background-color: rgba(255, 255, 255, 0.9);
            border-radius: 10px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.3);
            max-width: 400px;
            width: 400vh;
            text-align: center;
        }

        .form-group {
            margin-bottom: 15px;
            text-align: left;
        }

        .form-group label {
            font-size: 14px;
            font-weight: bold;
			text-align: left;
            display: block;
            margin-bottom: 5px;
        }

        .form-group select, 
        .form-group input[type="float"] {
            width: 100%;
            font-size: 16px;
            padding: 10px;
            border-radius: 5px;
            border: none;
            outline: none;
            text-align: center;
            background-color: #f9f9f9;
            box-shadow: 0px 3px 6px rgba(0, 0, 0, 0.2);
            transition: box-shadow 0.3s ease;
        }

        .form-group select:focus, 
        .form-group input[type="float"]:focus {
            box-shadow: 0px 3px 8px rgba(255, 140, 0, 0.6);
        }

        /* Button Styling */
        form button {
            background: linear-gradient(135deg, #ff8c00, #ff6347);
            color: white;
            border: none;
            padding: 15px 25px;
            font-size: 18px;
            border-radius: 10px;
            cursor: pointer;
            margin: 10px;
            transition: all 0.3s ease;
            box-shadow: 0px 4px 10px rgba(255, 99, 71, 0.4);
            text-align: center;
            display: inline-block;
        }

        form button:hover {
            background: linear-gradient(135deg, #ff6347, #ff8c00);
            box-shadow: 0px 8px 15px rgba(255, 99, 71, 0.5);
            transform: translateY(-3px);
        }

        form button a {
            color: white;
            text-decoration: none;
            font-weight: bold;
            display: block;
        }

        table {
            width: 80%;
            margin: 20px auto;
            border-collapse: collapse;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.3);
            border-radius: 8px;
            overflow: hidden;
        }

        th, td {
            padding: 12px 20px;
            border-bottom: 1px solid rgba(255, 255, 255, 0.3);
            text-align: center;
        }

        th {
            background-color: rgba(0, 0, 0, 0.4);
            font-weight: bold;
            text-transform: uppercase;
            color: #ffebcd;
        }

        tr:hover {
            background-color: rgba(255, 255, 255, 0.2);
        }

        td {
            background-color: rgba(255, 255, 255, 0.1);
            color: #ffffff;
        }
		
    </style>
</head>
	<center>
	<body>

<form action="" method="POST">
	    <h2> Welcome to Home page ! </h2>
		
	
    
	<b>Search By User Value</b><br><br>
	 
   
    <div class="form-group">
            <label for="branch">Branch:</label>
            <select name="branch" id="branch">
                <option value="dropdown" selected>dropdown</option>
                <option value="CSE">CSE</option>
                <option value="IT">IT</option>
                <option value="AI&DS">AI and DS</option>
                <option value="E&TC">E and TC</option>
                <option value="ECE">ECE</option>
                <option value="Mech">Mech</option>
                <option value="Civil">Civil</option>
            </select>
        </div>
		
	<div class="form-group">
            <label for="class">Class:</label>
            <select name="class" id="class">
                <option value="dropdown" selected>dropdown</option>
                <option value="FY">First Year</option>
                <option value="SY">Second Year</option>
                <option value="TY">Third Year</option>
                <option value="FinalYear">Final Year</option>
            </select>
        </div>

        <div class="form-group">
            <label for="cgpa">CGPA:</label>
            <input type="float" name="cgpa" id="cgpa" placeholder="Enter CGPA">
        </div>
		
	<div class="form-group">
            <label for="year">PassOut Year:</label>
            <select name="year" id="year">
                <option value="dropdown" selected>dropdown</option>
                <option value="2020-21">2020-21</option>
                <option value="2021-22">2021-22</option>
                <option value="2022-23">2022-23</option>
                <option value="2023-2024">2023-24</option>
                <option value="2024-25">2024-25</option>
            </select>
        </div>

        <button type="submit" name="search">Search</button>
        <button><a href="hr_logout.php">Log Out</a></button>
    </form>
		

	</center>
	
	
</html>




<?php
    
	require_once("config.php");
	
	if($_SERVER["REQUEST_METHOD"] == "POST")
	{
		$branch = $_POST["branch"];
		$class = $_POST["class"];
		$cgpa = $_POST["cgpa"];
		$year = $_POST["year"];
		
		$qry = mysqli_query($con, "SELECT * FROM resume WHERE r_branch
		        LIKE '%$branch%' OR r_class LIKE '%$class%' OR r_cgpa >= '%$cgpa%'
				AND r_year LIKE '%$year%'");
				
		echo "<center><table border = '2'>
		
		<tr>
		<th>Id </th>
		<th>First Name </th>
		<th>Email ID </th>
		<th>Branch</th>
		<th>class</th>
		<th>CGPA</th>
		<th>Placement Status</th>
		</tr></center>";		
				
			while($row = mysqli_fetch_array($qry))
			{
				
				
				?>
				<tr>
				<td><?php echo $row["r_id"];?></td>
				<td><?php echo $row["r_first_name"];?></td>
				<td><?php echo $row["r_email"];?></td>
				<td><?php echo $row["r_branch"];?></td>
				<td><?php echo $row["r_class"];?></td>
				<td><?php echo $row["r_cgpa"];?></td>
				<td><?php echo $row["r_ps"];?></td>
				<td><a href = "update.php?edit=<?php echo $row['r_id'];?>">
				<button class="edit"><b>Edit</b></button></a></td>
				</tr>
				
				<?php 
			}
			echo "</table>";
	}
	
?>