<?php
include('db.php');
session_start();

if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user_id = $_SESSION['user_id'];
    $place_name = $_POST['place_name'];
    $description = $_POST['description'];
    $rating = $_POST['rating'];

    // File upload handling for place images
    $placeImages = [];
    if (isset($_FILES['place_images'])) {
        $targetDir = 'uploads/';
        foreach ($_FILES['place_images']['tmp_name'] as $key => $tmp_name) {
            $targetFile = $targetDir . basename($_FILES['place_images']['name'][$key]);
            $uploadSuccess = move_uploaded_file($tmp_name, $targetFile);
            if ($uploadSuccess) {
                $placeImages[] = $targetFile;
            } else {
                echo "Error uploading place image.";
                exit;
            }
        }
    }

    // Insert place review into the database
    $sql = "INSERT INTO place_reviews (user_id, place_name, place_image, description, rating) 
            VALUES ('$user_id', '$place_name', '" . implode(",", $placeImages) . "', '$description', '$rating')";

    if ($conn->query($sql) === TRUE) {
        // Redirect to a thank-you page
        header('Location: thank_you.php');
        exit;
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>
