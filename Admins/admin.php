<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="styles.css"> <!-- Link to your CSS file for styling -->
</head>
<body>

<div class="container">
    <h2>User Management</h2>
    <div class="actions">
        <a href="add_user.php">Add New User</a>
    </div>
    <div class="user-list">
        <table>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Actions</th>
            </tr>
            <?php
            // Include your database connection file
            include_once 'db_connect.php';

            // Fetch users from the database
            $sql = "SELECT * FROM users";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>" . $row['id'] . "</td>";
                    echo "<td>" . $row['name'] . "</td>";
                    echo "<td>" . $row['email'] . "</td>";
                    echo "<td><a href='edit_user.php?id=" . $row['id'] . "'>Edit</a> | <a href='delete_user.php?id=" . $row['id'] . "'>Delete</a></td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='4'>No users found</td></tr>";
            }
            ?>
        </table>
    </div>
</div>

</body>
</html>
