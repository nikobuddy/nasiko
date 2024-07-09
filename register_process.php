<?php
include('db.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $username = $_POST['username'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    // File upload handling
    $profilePicturePath = '';
    if (isset($_FILES['profile_picture']) && $_FILES['profile_picture']['error'] === 0) {
        $targetDir = 'uploads/';
        $targetFile = $targetDir . basename($_FILES['profile_picture']['name']);
        $uploadSuccess = move_uploaded_file($_FILES['profile_picture']['tmp_name'], $targetFile);
        if ($uploadSuccess) {
            $profilePicturePath = $targetFile;
        } else {
            echo "Error uploading profile picture.";
            exit;
        }
    }

    $sql = "INSERT INTO users (name, username, phone_number, email, profile_picture, address, password) 
            VALUES ('$name', '$username', '$phone', '$email', '$profilePicturePath', '$address', '$password')";

    if ($conn->query($sql) === TRUE) {
        // Redirect to login page
        header('Location: login.php');
        exit;
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
