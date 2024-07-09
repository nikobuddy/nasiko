<?php
$servername = "localhost";
$username = "sppunote_reviewnashi";
$password = "Nisarga@99";
$dbname = "sppunote_reviewnashi";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
