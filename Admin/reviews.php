<!-- reviews.php -->
<?php
include('db.php');
session_start();

if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit;
}

$user_id = $_SESSION['user_id'];

// Fetch user information
$sql_user = "SELECT * FROM users WHERE id = '$user_id'";
$result_user = $conn->query($sql_user);
$user = $result_user->fetch_assoc();

// Fetch total number of reviews submitted by the user
$sql_reviews = "SELECT COUNT(*) AS total_reviews FROM place_reviews WHERE user_id = '$user_id'";
$result_reviews = $conn->query($sql_reviews);
$total_reviews = ($result_reviews) ? $result_reviews->fetch_assoc()['total_reviews'] : 0;

$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Place Reviews</title>
    <style>
        body {
            
                margin-top: 80px; /* Add spacing from the top */
                overflow-y: scroll; /* Add vertical scroll */

            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .container {

            max-width: 800px; /* Set a maximum width for better readability on larger screens */
    margin: 20px; /* Add margin for better spacing */
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
            margin-bottom: 20px; /* Add margin to create space between form and buttons on larger screens */
        }

        label {
            display: block;
            margin-bottom: 8px;
        }

        input, textarea, select {
            width: 100%;
            padding: 10px;
            margin-bottom: 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        .rating {
            display: flex;
            gap: 5px;
        }

        .rating input {
            display: none;
        }

        .rating label {
            font-size: 24px;
            cursor: pointer;
        }

        .rating label:before {
            content: '★';
        }

        .rating input:checked ~ label:before {
            content: '★★★★★';
            color: #FFD700; /* gold */
        }

        input[type="submit"] {
            background-color: #4caf50;
            color: #fff;
            cursor: pointer;
        }

        .buttons-section {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-top: 20px;
        }

        .button {
            margin-bottom: 10px;
            padding: 10px;
            width: 200px;
            text-align: center;
            background-color: #3498db;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            display: inline-block;
            transition: background-color 0.3s;
        }

        .button:hover {
            background-color: #2980b9;
        }
        .profile-info {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        }

        .profile-info img {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            margin-right: 10px;
        }

        .profile-info h3 {
            margin: 0;
            font-size: 18px;
        }

        .total-reviews {
            margin-bottom: 20px;
        }



/* Styling for the note section */
.note-section {
  width: 80%;
  max-width: 600px;
  margin: 20px auto;
  background-color: #f9f9f9;
  padding: 20px;
  border-radius: 8px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.note-section h2 {
  margin-bottom: 10px;
  font-size: 24px;
  color: #333;
}

.note-section textarea {
  width: 100%;
  height: 150px;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 5px;
  resize: none; /* Prevent resizing of textarea */
  font-family: Arial, sans-serif;
  font-size: 16px;
}

.note-section textarea:focus {
  outline: none;
  border-color: #007bff;
  box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
}



        /* Media queries for responsiveness */
        @media screen and (max-width: 600px) {
            form {
                width: 90%;
            }

            .buttons-section .button {
                width: 100%;
            }
        }
    </style>
</head>
<body>

    <div class="container">
<br><br><br><b><center>
    <h1>Explore The Nashik</h1><br>
    <p>Wlcome to the biggest tourism Community in Nashik</p></b></center>
     <!-- New section for buttons -->
        <div class="note-section">
            <div class="profile-info">
        <img src="<?= htmlspecialchars($user['profile_picture']) ?>" alt="Profile Picture">
        <div>
            <h3>Hello, <?= htmlspecialchars($user['name']) ?></h3>
            <p>Total Number of Reviews: <?= $total_reviews ?></p>
        </div>
    </div>
        </div>
    
        <form action="reviews_process.php" method="post" enctype="multipart/form-data">
            <h2>Place Reviews</h2>
            <label for="place_name">Place Name:</label>
            <input type="text" name="place_name" required>

            <label for="place_images">Place Images:</label>
            <input type="file" name="place_images[]" multiple accept="image/*" required>

            <label for="description">Description:</label>
            <textarea name="description" required></textarea>

            <label for="rating">Rating:</label>
            <div class="rating">
                <input type="radio" name="rating" value="1" id="star1" required>
                <label for="star1"></label>

                <input type="radio" name="rating" value="2" id="star2" required>
                <label for="star2"></label>

                <input type="radio" name="rating" value="3" id="star3" required>
                <label for="star3"></label>

                <input type="radio" name="rating" value="4" id="star4" required>
                <label for="star4"></label>

                <input type="radio" name="rating" value="5" id="star5" required>
                <label for="star5"></label>
            </div>

            <input type="submit" value="Submit Review">
        </form>

       
        <div class="buttons-section">
            <a href="user_reviews.php" class="button">View Your Reviews</a>
            <a href="#" class="button">Refer to Friends</a>
            <p>Note :- TO Verify your id you have to At least upload 30 Review and have to invite 20+ Friends</p>
            <a href="submit_quote.php" class="button">Verify Your ID</a>
        </div>
    </div>
</body>
</html>
