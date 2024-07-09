<!-- all_reviews.php -->
<?php
include('db.php');

// Fetch approved reviews with user details from the database
$sql = "SELECT place_reviews.*, users.name as user_name, users.profile_picture as user_profile_picture, users.verified as user_verified
        FROM place_reviews
        INNER JOIN users ON place_reviews.user_id = users.id
        WHERE place_reviews.approved = 1";
$result = $conn->query($sql);

// Check if there are any approved reviews
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
    <title>All Reviews</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            min-height: 100vh;
        }

        h2 {
            color: #333;
            margin-bottom: 20px;
        }

        .review-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
        }

        .review {
            background-color: #fff;
            padding: 20px;
            margin: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
            height: 100%;
            transition: transform 0.3s ease;
            position: relative;
            text-align: left;
            overflow: hidden;
        }

        .review:hover {
            transform: scale(1.05);
        }

        .review img {
            max-width: 100%;
            height: auto;
            border-radius: 8px;
            margin-bottom: 10px;
            object-fit: cover;
        }

        .rating {
            color: #FFD700;
            font-size: 18px;
            margin-top: 10px;
        }

        .rating-stars {
            display: inline-block;
        }

        .rating-stars span {
            color: #FFD700;
            font-size: 20px;
        }

        .read-more {
            color: #007BFF;
            cursor: pointer;
            display: none;
        }

        .user-info {
            display: flex;
            align-items: center;
            margin-bottom: 10px;
        }

        .user-info img {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            margin-right: 10px;
            object-fit: cover;
        }

        .user-info span {
            font-weight: bold;
        }

        .verified-icon {
            width: 20px;
            height: 20px;
            margin-left: 5px;
        }

        .ellipsis {
            overflow: hidden;
            text-overflow: ellipsis;
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
        }

        .full-text {
            display: none;
        }
    </style>
</head>
<body>
    <h2>All Reviews</h2>

    <div class="review-container">
        <?php foreach ($reviews as $review) : ?>
            <div class="review">
                <div class="user-info">
                    <img src="<?= htmlspecialchars($review['user_profile_picture']) ?>" alt="User Profile Picture">
                    <span><?= htmlspecialchars($review['user_name']) ?></span>
                    <?php if ($review['user_verified']) : ?>
                        <img src="verified_icon.png" alt="Verified Tick" class="verified-icon">
                    <?php endif; ?>
                </div>
                <h3><?= htmlspecialchars($review['place_name']) ?></h3>
                <img src="<?= htmlspecialchars($review['place_image']) ?>" alt="Place Image">
                <div class="text-container">
                    <div class="ellipsis short-text"><?= htmlspecialchars($review['description']) ?></div>
                    <div class="full-text"><?= htmlspecialchars($review['description']) ?></div>
                    <?php if (strlen($review['description']) > 150) : ?>
                        <a class="read-more" href="#" onclick="toggleReadMore(this, event)">Read More</a>
                    <?php endif; ?>
                </div>
                <div class="rating">
                    <span class="rating-stars"><?= str_repeat('&#9733;', $review['rating']) ?></span>
                    (<?= htmlspecialchars($review['rating']) ?>/5)
                </div>
            </div>
        <?php endforeach; ?>
    </div>

    <script>
        function toggleReadMore(link, event) {
            event.preventDefault();
            var textContainer = link.parentElement.querySelector('.text-container');
            var shortText = textContainer.querySelector('.short-text');
            var fullText = textContainer.querySelector('.full-text');

            shortText.style.display = shortText.style.display === 'none' ? 'block' : 'none';
            fullText.style.display = fullText.style.display === 'none' ? 'block' : 'none';
            link.style.display = 'none';
        }
    </script>
</body>
</html>
