<?php
// Database connection
include('db.php');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST['title'];
    $description = $_POST['description'];
    $location = $_POST['location'];
    $date = $_POST['date'];

    // File upload
    $target_dir = "images/";
    $target_file = $target_dir . basename($_FILES["image"]["name"]);
    move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);

    // Insert event details into the database
    $sql = "INSERT INTO events (title, description, location, date, image) VALUES ('$title', '$description', '$location', '$date', '$target_file')";
    if ($conn->query($sql) === TRUE) {
        echo "Event uploaded successfully.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
