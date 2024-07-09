<?php
// Database connection
include('db.php');


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Process image upload
if(isset($_POST['submit_upload'])) {
    $title = $_POST['title'];
    $imageName = $_FILES['image']['name'];
    $imageTemp = $_FILES['image']['tmp_name'];
    $imagePath = "uploads/" . $imageName;

    move_uploaded_file($imageTemp, $imagePath);

    // Insert into database
    $sql = "INSERT INTO posts (title, image_path) VALUES ('$title', '$imagePath')";

    if ($conn->query($sql) === TRUE) {
        echo "Image uploaded successfully.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Approve selected posts
if(isset($_POST['submit_approval']) && isset($_POST['post_ids'])) {
    foreach($_POST['post_ids'] as $post_id) {
        $sql = "UPDATE posts SET approved = 1 WHERE id = $post_id";
        if ($conn->query($sql) !== TRUE) {
            echo "Error updating record: " . $conn->error;
        }
    }
    echo "Posts approved successfully.";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Combined Page</title>
</head>
<body>
    <h1>Upload Image and Title</h1>
    <form action="" method="post" enctype="multipart/form-data">
        <label for="title">Title:</label>
        <input type="text" id="title" name="title" required><br><br>
        <label for="image">Image:</label>
        <input type="file" id="image" name="image" required><br><br>
        <input type="submit" name="submit_upload" value="Upload">
    </form>

    <hr>

    <h1>Approve Posts</h1>
    <form action="" method="post">
    <?php
        // Retrieve unapproved posts
        $sql = "SELECT * FROM posts WHERE approved = 0";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<input type='checkbox' name='post_ids[]' value='" . $row['id'] . "'>";
                echo "<img src='" . $row["image_path"] . "' alt='" . $row["title"] . "'>";
                echo "<br><br>";
            }
            echo "<input type='submit' name='submit_approval' value='Approve'>";
        } else {
            echo "No posts to approve.";
        }
    ?>
    </form>

    <hr>

    <h1>Approved Posts</h1>
    <?php
        // Retrieve approved posts
        $sql = "SELECT * FROM posts WHERE approved = 1";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<h2>" . $row["title"] . "</h2>";
                echo "<img src='" . $row["image_path"] . "' alt='" . $row["title"] . "'>";
            }
        } else {
            echo "No approved posts yet.";
        }
    ?>

</body>
</html>

<?php
$conn->close();
?>
