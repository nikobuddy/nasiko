<!-- approve_reviews.php -->
<?php
include('db.php');
session_start();

// Fetch unapproved reviews from the database
$sql = "SELECT * FROM place_reviews WHERE approved = 0";
$result = $conn->query($sql);

// Check if there are any unapproved reviews
if ($result->num_rows > 0) {
    $reviews = $result->fetch_all(MYSQLI_ASSOC);
} else {
    $reviews = [];
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Approve Reviews</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .review {
            background-color: #fff;
            padding: 20px;
            margin: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 600px;
        }

        .review img {
            max-width: 100%;
            height: auto;
            border-radius: 8px;
            margin-bottom: 10px;
        }

        .rating {
            color: #FFD700; /* gold */
        }

        .action-buttons {
            margin-top: 10px;
        }

        .approve, .disapprove {
            background-color: #4caf50;
            color: #fff;
            padding: 5px 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <h2>Approve Reviews</h2>

    <?php foreach ($reviews as $review) : ?>
        <div class="review">
            <h3><?= htmlspecialchars($review['place_name']) ?></h3>
            <img src="<?= htmlspecialchars($review['place_image']) ?>" alt="Place Image">
            <p><?= htmlspecialchars($review['description']) ?></p>
            <p class="rating">Rating: <?= htmlspecialchars($review['rating']) ?>/5</p>
            <div class="action-buttons">
                <form action="approve_process.php" method="post">
                    <input type="hidden" name="review_id" value="<?= htmlspecialchars($review['id']) ?>">
                    <button type="submit" class="approve" name="approve">Approve</button>
                    <button type="submit" class="disapprove" name="disapprove">Disapprove</button>
                </form>
            </div>
        </div>
    <?php endforeach; ?>
</body>
</html>
