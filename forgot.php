
<html>


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create New Password</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #4A90E2, #A52A2A);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        #upd {
            background-color: rgba(255, 255, 255, 0.9);
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            max-width: 500px;
            width: 90%;
            text-align: center;
        }

        h2 {
            font-size: 24px;
            color: #333;
            font-weight: bold;
            margin-bottom: 20px;
        }

        input[type="text"], input[type="password"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 14px;
            box-sizing: border-box;
        }

        button {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 12px 20px;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 10px;
            width: 100%;
            box-sizing: border-box;
        }

        button:hover {
            background-color: #45a049;
        }

        button a {
            color: white;
            text-decoration: none;
            display: block;
        }

        /* Responsive */
        @media (max-width: 600px) {
            h2 {
                font-size: 20px;
            }

            input[type="text"], input[type="password"], button {
                font-size: 14px;
            }
        }
    </style>
</head>

	<body background = "img3.jpg">
    
	<center>
    <form id = "upd" action="pass_update.php" method="POST">
    
	
	    
		<h2> Create new password</h2>
		</br></br>
		
    
	Name or Email : <input type="text" name="name" id="name"
    value="" placeholder="Enter Name or Email"></br></br>
	
	
    Conform Password : <input type="Password" name="pass" id="pass"
    value="" placeholder = "New Password"></br></br>

    <button type = "submit">Update</button>
    <button><a href="login.php">Back to login</a></button>
    </form>

	
    </center>

</body>


</html>