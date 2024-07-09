<?php
// Database connection details

$servername = "localhost";
$username = "sppunote_reviewnashi";
$password = "Nisarga@99";
$dbname = "sppunote_reviewnashi";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Gather form data
$hotel_name = $_POST['hotel_name'];
$phone_number = $_POST['phone_number'];
$direction_url = $_POST['direction_url'];
$page_id = $_POST['page_id'];

// File upload
$image = $_FILES['image']['name'];
$temp_name = $_FILES['image']['tmp_name'];
$target = "images/".$image;

// Move uploaded file to target directory
move_uploaded_file($temp_name, $target);

// SQL query to update the hotels table
$sql = "INSERT INTO hotels (hotel_name, phone_number, direction_url, image_url, page_id)
        VALUES ('$hotel_name', '$phone_number', '$direction_url', '$target', '$page_id')";

if ($conn->query($sql) === TRUE) {
    echo "Hotel information updated successfully";
} else {
    echo "Error updating hotel information: " . $conn->error;
}

$conn->close();
?>
