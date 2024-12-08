<?php 

    include "tpo_lock.php";
	
?>	


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
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

        #home-container {
            background-color: rgba(255, 255, 255, 0.9);
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            max-width: 400px;
            width: 100%;
            text-align: center;
        }

        #home-container h1 {
            font-size: 28px;
            color: #4A90E2;
            margin-bottom: 20px;
            font-weight: bold;
            letter-spacing: 1px;
        }

        #home-container button {
            background: linear-gradient(135deg, #ff8c00, #ff6347);
            color: white;
            border: none;
            padding: 15px;
            font-size: 18px;
            border-radius: 5px;
            cursor: pointer;
            margin: 15px 0;
            width: 100%;
            transition: all 0.3s ease;
            text-decoration: none;
        }

        #home-container button:hover {
            background: linear-gradient(135deg, #ff6347, #ff8c00);
            box-shadow: 0px 4px 10px rgba(255, 99, 71, 0.4);
            transform: translateY(-2px);
        }

        #home-container button a {
            color: white;
            text-decoration: none;
            font-weight: bold;
            display: block;
        }
    </style>
</head>
<body>
    <div id="home-container">
        <h1>Home Page</h1>
        <form action="" method="POST">
            <button type="button">
                <a href="search.php">Search Student Details</a>
            </button>
            <button type="button">
                <a href="company_hr_reg.php">Add Company Details</a>
            </button>
            <button type="button" style="width: 150px; margin-top: 20px;">
                <a href="tpo_logout.php">Logout</a>
            </button>
        </form>
    </div>
</body>
</html>

