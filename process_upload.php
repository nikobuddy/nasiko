<?php
// Database connection

include('db.php');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Process image upload
$title = $_POST['title'];
$imageName = $_FILES['image']['name'];
$imageTemp = $_FILES['image']['tmp_name'];
$imagePath = "uploads/" . $imageName;

move_uploaded_file($imageTemp, $imagePath);

// Insert into database
$sql = "INSERT INTO posts (title, image_path) VALUES ('$title', '$imagePath')";

if ($conn->query($sql) === TRUE) {
    echo "Image uploaded successfully.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
