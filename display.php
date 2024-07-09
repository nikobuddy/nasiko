<?php
// Database connection
include('db.php');


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve approved posts
$sql = "SELECT * FROM posts WHERE approved = 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<h2>" . $row["title"] . "</h2>";
        echo "<img src='" . $row["image_path"] . "' alt='" . $row["title"] . "'>";
    }
} else {
    echo "No approved posts yet.";
}

$conn->close();
?>
