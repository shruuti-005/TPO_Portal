<?php
    include "lock.php";
?>	

<!DOCTYPE html>
<html>
<head>
    <title>Home Page</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background: linear-gradient(135deg, #4A90E2, #A52A2A);
            color: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            flex-direction: column;
            text-align: center;
        }

        h1 {
            font-size: 36px;
            color: #fff;
            margin: 10px 0;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
        }

        form {
            display: inline-block;
			justify-content: center;
            margin-top: 20px;
            padding: 20px;
            background-color: rgba(255, 255, 255, 0.1);
            border-radius: 10px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.3);
			max-width: 400px;
            width: 100%;
            text-align: center;
        }

        form button {
            background: linear-gradient(135deg, #ff8c00, #ff6347);
            color: white;
            border: none;
            padding: 20px 30px;
            font-size: 24px;
            border-radius: 10px;
            cursor: pointer;
            margin: 10px;
            transition: all 0.3s ease;
            box-shadow: 0px 4px 10px rgba(255, 99, 71, 0.4);
            text-align: center;
            width: 250px;
            height: 80px;
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
    </style>
</head>
<body>
   
    <h2>Welcome to Home Page!</h2>

    <form action="" method="POST">
        <button><a href="resume.php">Add Resume Details</a></button>	
        <button><a href="logout.php">LogOut</a></button>
    </form>
</body>
</html>
