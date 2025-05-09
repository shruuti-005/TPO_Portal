<!DOCTYPE html>
<html>
<head>
    <title>Student Registration</title>
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
            background-color: rgba(255, 255, 255, 0.95);
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.3);
            max-width: 900px;
            width: 100%;
            text-align: center;
            position: relative;
        }

        #reg h2 {
            font-size: 28px;
            color: #4A90E2;
            margin-bottom: 20px;
            font-weight: bold;
            letter-spacing: 2px;
        }
        #reg h4 {
            font-size: 16px;
            color: #333;
            margin: 10px 0;
        }
        #reg h3 {
            font-size: 16px;
            color: #666;
            margin-top: 20px;
        }

        #reg input[type="text"], #reg input[type="password"], #reg select {
            width: calc(100% - 80px);
            padding: 5px;
            margin: 5=4px 0;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 14px;
            box-sizing: border-box;
            transition: all 0.3s ease;
			text-align: center;
        }
        #reg input[type="text"]:focus, #reg input[type="password"]:focus, #reg select:focus {
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
            border-radius: 25px;
            cursor: pointer;
            margin-top: 10px;
            transition: all 0.3s ease;
        }
        
        #reg button:hover {
            background: linear-gradient(135deg, #ff6347, #ff8c00);
            box-shadow: 0px 4px 10px rgba(255, 99, 71, 0.4);
            transform: translateY(-2px);
        }

        #reg a {
            color: white;
            text-decoration: none;
        }

        #reg select {
            background-color: #f9f9f9;
            cursor: pointer;
        }
    </style>
<script type = "text/javascript" src = "js/jquery.min.js"></script>
<script type = "text/javascript" src = "js/jquery.validate.min.js"></script>
<script type = "text/javascript">
    $(document).ready(function(){
        $("#reg").validate({
            rules : {
                name : "required",
                cont : {
                    required : true,
                    minlength : 10,
                    maxlength : 10,
                    number : true
                },
                email : {
                    required : true,
                    email : true
                },
                branch : "required",
                class : "required",
                pass : "required"
            },
            messages : {
                name : "Please Enter name",
                cont : {
                    required : "please enter your contact",
                    minlength : "Invalid Number",
                    maxlength : "Invalid Number",
                    number : "Invalid Number"
                },
                email : {
                    required : "Please enter your email",
                    email : "Invalid Email ID"
                },
                branch : "Please Select Branch",
                class : "Select class",
                pass : "Please Create a Password"
            },
            submitHandler : function(form){
                    alert("Conform Registration?");
                    form.submit();
                }
        });
    });
</script>
</head>

<body>
    
        <form id="reg" action="insert.php" method="POST">
            <h2>College Registration Form</h2></br>
            <h4>Name: <input type="text" name="name" id="name" placeholder="Enter Your Name"></h4>
            <h4>Contact: <input type="text" name="cont" id="cont" placeholder="Enter Contact"></h4>
            <h4>Email: <input type="text" name="email" id="email" placeholder="Enter Your Email"></h4>
            <h4>Branch:
                <select name="branch" id="branch">
                    <option value="" selected>Branch</option>
                    <option value="CSE">CSE</option>
                    <option value="IT">IT</option>
                    <option value="AI&DS">AI and DS</option>
                    <option value="E&TC">E and TC</option>
                    <option value="ECE">ECE</option>
                    <option value="Mech">Mech</option>
                    <option value="Civil">Civil</option>
                </select>
            </h4>
            <h4>Class:
                <select name="class" id="class">
                    <option value="" selected>Class</option>
                    <option value="FY">First Year</option>
                    <option value="SY">Second Year</option>
                    <option value="TY">Third Year</option>
                    <option value="FinalYear">Final Year</option>
                </select>
            </h4>
            <h4>Password: <input type="password" name="pass" id="pass" placeholder="Create a Password"></h4>
            <button type="submit"><b>Submit</b></button>
            <h3>Have an Account?</h3>
            <button><b><a href="login.php">Log In</a></b></button>
        </form>
    
</body>
</html>
