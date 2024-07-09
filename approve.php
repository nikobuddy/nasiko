<?php
// Database connection
include('db.php');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve unapproved posts
$sql = "SELECT * FROM posts WHERE approved = 0";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<h1>Approve Posts</h1>";
    echo "<form action='process_approval.php' method='post'>";
    while($row = $result->fetch_assoc()) {
        echo "<input type='checkbox' name='post_ids[]' value='" . $row['id'] . "'>";
        echo "<img src='" . $row["image_path"] . "' alt='" . $row["title"] . "'>";
        echo "<br><br>";
    }
    echo "<input type='submit' value='Approve'>";
    echo "</form>";
} else {
    echo "No posts to approve.";
}

$conn->close();
?>
