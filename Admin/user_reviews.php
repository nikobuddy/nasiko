<!-- user_reviews.php -->
<?php
include('db.php');
session_start();

// Check if user is logged in
if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit;
}

// Fetch user information
$user_id = $_SESSION['user_id'];
$sql_user = "SELECT name, profile_picture FROM users WHERE id = '$user_id'";
$result_user = $conn->query($sql_user);
$user_info = $result_user->fetch_assoc();

// Fetch reviews by the logged-in user
$sql_reviews = "SELECT * FROM place_reviews WHERE user_id = '$user_id'";
$result_reviews = $conn->query($sql_reviews);

// Check if there are any reviews
if ($result_reviews->num_rows > 0) {
    $reviews = $result_reviews->fetch_all(MYSQLI_ASSOC);
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
    <title>Your Reviews</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }

        .review-container {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
        }

        .review {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            flex: 1 0 calc(33.33% - 20px); /* Adjust width to fit 3 cards per row with 20px gap */
            max-width: calc(33.33% - 20px); /* Maximum width of each card */
        }

        .review-header {
            display: flex;
            align-items: center;
            margin-bottom: 10px;
        }

        .user-avatar {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            margin-right: 10px;
        }

        .user-name {
            font-weight: bold;
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

        .description {
            font-size: 14px;
            line-height: 1.5;
            overflow: hidden;
            text-overflow: ellipsis;
            display: -webkit-box;
            -webkit-line-clamp: 3; /* Limit to 3 lines */
            -webkit-box-orient: vertical;
        }

        @media screen and (max-width: 992px) {
            .review {
                flex-basis: calc(50% - 20px);
                max-width: calc(50% - 20px);
            }
        }

        @media screen and (max-width: 768px) {
            .review {
                flex-basis: calc(50% - 20px);
                max-width: calc(50% - 20px);
            }
        }

        @media screen and (max-width: 576px) {
            .review {
                flex-basis: calc(100% - 20px);
                max-width: calc(100% - 20px);
            }
        }
    </style>
</head>
<body>
    <h2>Your Reviews</h2>

    <div class="review-container">
        <?php foreach ($reviews as $review) : ?>
            <div class="review">
                <div class="review-header">
                    <img src="<?= htmlspecialchars($user_info['profile_picture']) ?>" alt="User Avatar" class="user-avatar">
                    <span class="user-name"><?= htmlspecialchars($user_info['name']) ?></span>
                </div>
                <h3><?= htmlspecialchars($review['place_name']) ?></h3>
                <img src="<?= htmlspecialchars($review['place_image']) ?>" alt="Place Image">
                <p class="description"><?= htmlspecialchars($review['description']) ?></p>
                <p class="rating">Rating: <?= htmlspecialchars($review['rating']) ?>/5</p>
            </div>
        <?php endforeach; ?>
    </div>
</body>
</html>
