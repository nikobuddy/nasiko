<?php
include('db.php');
session_start();
error_reporting(E_ALL);
ini_set('display_errors', 1);


if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $quote = $_POST['quote'];
    $user_id = $_SESSION['user_id'];

    $sql = "INSERT INTO quotes (user_id, quote) VALUES ('$user_id', '$quote')";

    if ($conn->query($sql) === TRUE) {
        echo "Quote submitted successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
