<?php
// Database connection
include('db.php');


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Approve selected posts
if(isset($_POST['post_ids'])) {
    foreach($_POST['post_ids'] as $post_id) {
        $sql = "UPDATE posts SET approved = 1 WHERE id = $post_id";
        if ($conn->query($sql) !== TRUE) {
            echo "Error updating record: " . $conn->error;
        }
    }
    echo "Posts approved successfully.";
} else {
    echo "No posts selected.";
}

$conn->close();
?>

