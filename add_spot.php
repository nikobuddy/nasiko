<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include('db.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $spot_name = $_POST["spot_name"];
    $spot_description = $_POST["spot_description"];
    $categories = implode(", ", $_POST["categories"]); // If categories are stored as a comma-separated string

    // Handle Main Photo
    $main_photo_name = $_FILES["main_photo"]["name"];
    $main_photo_tmp = $_FILES["main_photo"]["tmp_name"];
    move_uploaded_file($main_photo_tmp, "Admin/images/places/" . $main_photo_name);

    // Handle Sub Photos
    $sub_photos = array();
    foreach ($_FILES["sub_photos"]["tmp_name"] as $key => $tmp_name) {
        if ($_FILES["sub_photos"]["name"][$key]) {
            $sub_photo_name = $_FILES["sub_photos"]["name"][$key];
            move_uploaded_file($_FILES["sub_photos"]["tmp_name"][$key], "Admin/images/places/" . $sub_photo_name);
            $sub_photos[] = $sub_photo_name;
        }
    }

    // Handle Sub Descriptions
    $sub_descriptions = $_POST["sub_descriptions"];

    // Prepare SQL statement
    $sql = "INSERT INTO tourist_spots (spot_name, spot_description, main_photo, category, sub_photo1, sub_photo2, sub_photo3, sub_photo4, sub_photo5, sub_description1, sub_description2, sub_description3, sub_description4, sub_description5) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

    // Bind parameters
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssssssssssssss", $spot_name, $spot_description, $main_photo_name, $categories, $sub_photos[0], $sub_photos[1], $sub_photos[2], $sub_photos[3], $sub_photos[4], $sub_descriptions[0], $sub_descriptions[1], $sub_descriptions[2], $sub_descriptions[3], $sub_descriptions[4]);

    // Execute the statement
    $stmt->execute();

    // Close statement
    $stmt->close();

    // Redirect to Home Page or Confirmation Page
    header("Location: index.php");
    exit();
}
?>


<!DOCTYPE html>
<html>
<head>
    <title>Tourist Spots</title>
</head>
<body>
    <h1>Tourist Spots</h1>

    <form action="add_spot.php" method="post" enctype="multipart/form-data">
        <!-- Form fields -->
        <label for="spot_name">Name of the Place:</label><br>
        <input type="text" id="spot_name" name="spot_name"><br><br>

        <label for="spot_description">Description:</label><br>
        <textarea id="spot_description" name="spot_description" rows="4" cols="50"></textarea><br><br>

        <label for="main_photo">Main Photo:</label><br>
        <input type="file" id="main_photo" name="main_photo"><br><br>

        <label>Categories:</label><br>
        <input type="checkbox" id="category_friends" name="categories[]" value="Friends">
        <label for="category_friends">Friends</label><br>
        <input type="checkbox" id="category_family" name="categories[]" value="Family">
        <label for="category_family">Family</label><br>
        <input type="checkbox" id="category_couple" name="categories[]" value="Couple">
        <label for="category_couple">Couple</label><br>
        <input type="checkbox" id="category_solo" name="categories[]" value="Solo">
        <label for="category_solo">Solo</label><br><br>

        <label for="sub_photos">Sub Photos (up to 5):</label><br>
        <input type="file" id="sub_photo_1" name="sub_photos[]" multiple><br>
        <input type="file" id="sub_photo_2" name="sub_photos[]" multiple><br>
        <input type="file" id="sub_photo_3" name="sub_photos[]" multiple><br>
        <input type="file" id="sub_photo_4" name="sub_photos[]" multiple><br>
        <input type="file" id="sub_photo_5" name="sub_photos[]" multiple><br><br>

        <label for="sub_description_1">Sub Description 1:</label><br>
        <textarea id="sub_description_1" name="sub_descriptions[]" rows="4" cols="50"></textarea><br><br>
        <label for="sub_description_2">Sub Description 2:</label><br>
        <textarea id="sub_description_2" name="sub_descriptions[]" rows="4" cols="50"></textarea><br><br>
        <label for="sub_description_3">Sub Description 3:</label><br>
        <textarea id="sub_description_3" name="sub_descriptions[]" rows="4" cols="50"></textarea><br><br>
        <label for="sub_description_4">Sub Description 4:</label><br>
        <textarea id="sub_description_4" name="sub_descriptions[]" rows="4" cols="50"></textarea><br><br>
        <label for="sub_description_5">Sub Description 5:</label><br>
        <textarea id="sub_description_5" name="sub_descriptions[]" rows="4" cols="50"></textarea><br><br>

        <input type="submit" value="Submit">
    </form>
</body>
</html>
Just Make the ui modern and keep all the Tings just improve the UI