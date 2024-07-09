<?php 
include('db.php');

// Fetch all users from the database
$sql = "SELECT * FROM users";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User List</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }

        .category {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }

        .heading {
            font-size: 24px;
            margin-bottom: 20px;
        }

        .box-container {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
        }

        .box {
            background-color: #f9f9f9;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
            flex: 1;
            min-width: 300px;
            max-width: 400px;
        }

        .box img {
            width: 100%;
            height: auto;
            border-radius: 8px;
            margin-bottom: 10px;
        }

        .box h3 {
            font-size: 20px;
            margin-bottom: 10px;
        }

        .box p {
            font-size: 16px;
            margin-bottom: 10px;
        }

        .btn {
            background-color: #4caf50;
            color: #fff;
            text-decoration: none;
            padding: 10px 20px;
            border-radius: 4px;
            display: inline-block;
        }
    </style>
</head>
<body>
    <section class="category">
        <h1 class="heading">User List</h1>

        <div class="box-container">
            <?php 
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<div class='box'>";
                    echo "<img src='" . $row['profile_picture'] . "' alt='Profile Picture'>";
                    echo "<h3>" . $row['name'] . "</h3>";
                    // You can include additional user information here if needed
                    echo "</div>";
                }
            } else {
                echo "No users found.";
            }
            $conn->close();
            ?>
        </div>
    </section>
</body>
</html>
