<!DOCTYPE html>
<html>
<head>
    <title>Tourist Spots</title>
</head>
<body>
    <h1>Tourist Spots</h1>

    <form action="" method="GET">
        <label>Filter by Categories:</label><br>
        <input type="checkbox" name="categories[]" value="All"> All<br>
        <input type="checkbox" name="categories[]" value="Friends"> Friends<br>
        <input type="checkbox" name="categories[]" value="Family"> Family<br>
        <input type="checkbox" name="categories[]" value="Couple"> Couple<br>
        <input type="checkbox" name="categories[]" value="Solo"> Solo<br><br>
        <input type="submit" value="Apply Filter">
    </form>

    <?php
    // Connect to your database
include('db.php');

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Build SQL query based on selected categories
    $sql = "SELECT id, spot_name, spot_description, main_photo FROM tourist_spots";
    if (isset($_GET['categories']) && !empty($_GET['categories'])) {
        $categories = $_GET['categories'];
        if (($key = array_search('All', $categories)) !== false) {
            unset($categories[$key]);
        }
        if (!empty($categories)) {
            $category_condition = " WHERE category IN ('" . implode("','", $categories) . "')";
            $sql .= $category_condition;
        }
    }

    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        // Output data of each row
        while($row = mysqli_fetch_assoc($result)) {
            echo "<div>";
            echo "<img src='images/places/" . $row["main_photo"] . "' alt='" . $row["spot_name"] . "'><br>";
            echo "<h2>" . $row["spot_name"] . "</h2>";
            echo "<p>" . $row["spot_description"] . "</p>";
            echo "<a href='spot_details.php?id=" . $row["id"] . "'>View Details</a>";
            echo "</div>";
        }
    } else {
        echo "No tourist spots found.";
    }

    mysqli_close($conn);
    ?>
</body>
</html>
