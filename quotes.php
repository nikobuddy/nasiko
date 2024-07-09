<!-- quotes.php -->
<?php
include('db.php');
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quotes</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }

        .quote-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }

        .user-info {
            font-weight: bold;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <h2>Quotes</h2>

    <?php
    // Retrieve quotes along with user information
    $sql = "SELECT quotes.quote, users.name, users.profile_picture 
            FROM quotes 
            INNER JOIN users ON quotes.user_id = users.id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo '<div class="quote-container">';
            echo '<div class="user-info">';
            echo '<img src="' . $row['profile_picture'] . '" alt="Profile Picture" width="50" height="50">';
            echo ' ' . $row['name'];
            echo '</div>';
            echo '<div class="quote">' . $row['quote'] . '</div>';
            echo '</div>';
        }
    } else {
        echo "No quotes found.";
    }

    $conn->close();
    ?>
</body>
</html>
