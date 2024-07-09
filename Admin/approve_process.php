<!-- approve_process.php -->
<?php
include('db.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $review_id = $_POST['review_id'];

    if (isset($_POST['approve'])) {
        // Approve the review
        $sql = "UPDATE place_reviews SET approved = 1 WHERE id = '$review_id'";
    } elseif (isset($_POST['disapprove'])) {
        // Disapprove the review
        $sql = "DELETE FROM place_reviews WHERE id = '$review_id'";
    }

    if ($conn->query($sql) === TRUE) {
        echo "Action successful!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Redirect to the approve_reviews.php page
    header('Location: approve_reviews.php');
    exit;
}

$conn->close();
?>
