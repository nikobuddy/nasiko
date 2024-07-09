<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="styles.css"> <!-- Link to your CSS file for styling -->
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
        }
        h2 {
            text-align: center;
        }
        label {
            display: block;
            margin-bottom: 10px;
        }
        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }
        button {
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover {
            background-color: #45a049;
        }
        .error {
            color: red;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Login</h2>
    <?php
    session_start();
    include_once 'db_connect.php';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST['username'];
        $password = $_POST['password'];

        // Fetch user from the database
        $sql = "SELECT * FROM users WHERE username='$username'";
        $result = mysqli_query($conn, $sql);

        if (!$result) {
            die("Error: " . mysqli_error($conn)); // Output any database errors
        }

        if (mysqli_num_rows($result) == 1) {
            $row = mysqli_fetch_assoc($result);
            if (password_verify($password, $row['password'])) {
                if ($row['is_admin'] == 1) {
                    // User is admin, redirect to admin panel
                    $_SESSION['username'] = $username;
                    header("Location: index.php");
                    exit;
                } else {
                    // User is not admin, display error message
                    $error = "Only Admins can edit Buddy.";
                }
            } else {
                // Invalid password
                $error = "Invalid password.";
            }
        } else {
            // Invalid username
            $error = "Invalid username.";
        }
    }
    ?>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
        <button type="submit">Login</button>
    </form>
    <?php if(isset($error)) { ?>
        <div class="error"><?php echo $error; ?></div>
    <?php } ?>
</div>

</body>
</html>
