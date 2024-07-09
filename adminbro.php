<?php
// Redirect to register.php
header("Location: register.php");
exit; // Make sure to stop executing further code
?>
<!-- index.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nashiko - Explore and Review</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        div {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
            text-align: center;
        }

        a {
            display: block;
            margin-bottom: 10px;
            text-decoration: none;
            color: #333;
            padding: 10px;
            background-color: #4caf50;
            color: #fff;
            border-radius: 4px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div>
        <h2>Welcome to Nashiko</h2>
        <a href="register.php">Register</a>
        <a href="login.php">Login</a>
        <a href="reviews.php">Write a Review</a>
        <a href="all_reviews.php">All Reviews</a>
        <a href="approve_reviews.php">Approve Reviews</a>
    </div>
</body>
</html>
