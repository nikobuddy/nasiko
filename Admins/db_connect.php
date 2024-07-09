<?php
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
?>
