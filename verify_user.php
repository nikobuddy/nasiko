<!-- verify_user.php -->
<?php
include('db.php');

// Check if the user is an admin or has the right to verify users
// This could involve additional authentication and authorization steps

// Handle the verification process
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['verify_user'])) {
    $user_id = $_POST['user_id'];

    // Verify the user by updating the 'verified' column in the database
    $update_query = "UPDATE users SET verified = 1 WHERE id = $user_id";
    $conn->query($update_query);
}

// Fetch all users
$user_query = "SELECT * FROM users";
$user_result = $conn->query($user_query);

// Check if there are any users
if ($user_result->num_rows > 0) {
    $users = $user_result->fetch_all(MYSQLI_ASSOC);
} else {
    $users = [];
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verify Users</title>
    <!-- Add your head content here -->
</head>
<body>
    <h2>Verify Users</h2>

    <form method="post" action="">
        <table>
            <tr>
                <th>User ID</th>
                <th>User Name</th>
                <th>Verify</th>
            </tr>
            <?php foreach ($users as $user) : ?>
                <tr>
                    <td><?= $user['id'] ?></td>
                    <td><?= htmlspecialchars($user['name']) ?></td>
                    <td>
                        <?php if (!$user['verified']) : ?>
                            <button type="submit" name="verify_user" value="<?= $user['id'] ?>">Verify</button>
                        <?php else : ?>
                            <img src="verified_icon.png" alt="Verified Tick">
                        <?php endif; ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
    </form>

    <!-- Add your script content here -->
</body>
</html>
