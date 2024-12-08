<!DOCTYPE html>
    
<html>
	<head>
	<title>Fill Resume</title>
    <link rel="stylesheet" href="resume.css" />
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/jquery.validate.min.js"></script>
	<script type="text/javascript">
	    //from calidation rules
		    
	</script>
</head>
	
	<body>
	    
	    <form id = "reg" action="r_insert.php" method="POST" >
		    
		<h1> Fill Your Resume Details</h1>
			
	    First Name : <input type="text" name="fname" id="fname"
	    value="" placeholder="Enter Your Name">
		
		Last Name : <input type="text" name="lname" id="lname"
	    value="" placeholder="Enter Your Name"><br/><br/>
		
		Contact : <input type="text" name="cont" id="cont"
	    value="" placeholder="Enter Contact"><br/><br/>
		
		Email : <input type="text" name="email" id="email"
		value="" placeholder="Enter Your Email"><br/><br/>
		
		PassOut Year : <select id="year" name="year" > 
        <option value="">Not Selected</option>
		<option value="2020-2021">2020-2021</option>
        <option value="2021-2022">2021-2022</option>
		<option value="2022-2023">2022-2023</option>
		<option value="2023-2024">2023-2024</option>
		<option value="2023-2024">2024-2025</option></select><br/><br/>
		
		Branch : <select name="branch" id="branch" >
        <option value="" selected>Not Selected</option>
		<option value="CSE">CSE</option>
        <option value="IT">IT</option>
		<option value="AI&DS">AI and DS</option>
		<option value="E&TC">E and TC</option>
		<option value="ECE">ECE</option>
		<option value="Mech">Mech</option>
		<option value="Civil">Civil</option></select>
		
		Class: <select name="class" id="class"> 
        <option value="" selected>Not Selected</option>
		<option value="FY">First Year</option>
        <option value="SY">Second Year</option>
		<option value="TY">Third Year</option>
		<option value="FinalYear">Final Year</option></select><br/><br/>
		
		CGPA : <input type="float" name="cgpa" id="cgpa"
	    value="" placeholder="Enter CGPA"><br/><br/>
		
		Projects : </br></br><textarea rows="6" cols="50" name="project" id="project"
		value="" placeholder="Enter Project Discription"></textarea></br></br>
		
		Placement Status :<input type="radio" name="ps" value="Selected">Selected 
	            <input type="radio" name="ps" value="Not Selected">Not Selected <br><br>
		
		</br>
	    <button type="submit"><b>Submit</b></button>
		
		<button><a href = "home.php" >Back </a></button>
		</form>
		
		
	
	</body>
	
</html>

	
	
	