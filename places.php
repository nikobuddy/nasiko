<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Meta Tags Start ------------------------------------------------------>
    <meta http-equiv='content-language' content='en-US'>
    <meta name="title" content="Places - Visit Nashik with Nasiko">
    <meta name="description"
        content="Here are Some Places to visit in Nashik and you can explor the places near them to.">
    <meta name="keywords" content="">

    <title>Top Places to Visit in Nashik</title>

    <!-- tab logo -->
    <link rel="icon" type="image/x-icon" href="/images/index/Nashiko.png">

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- bootstrap CSS file link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/product.css">


    <!-- scroll to top -->
    <!-- <script src="https://kit.fontawesome.com/a54d2cbf95.js"></script> -->
</head>

<body>

    <!-- ------ scroller to top -------->
    <div id="top"></div>


    <!-- header section starts  -->

   <header class="header">

    <a href="index.html" class="logo"> <i class="fas fa-location"></i> Nashiko. </a>

    <nav class="navbar">
      <div id="nav-close" class="fas fa-times"></div>
      <a href="images/places/">home</a>
      <a href="places.php">Place's</a>
      <a href="feed.php">Feed</a>
      <a href="gallary.php">Gallary</a>
      <a href="blogs.php">Blogs</a>
      <a href="events.php">Event's</a>
      <a href="aboutus.php">About Us</a>
      <!-- <a href="#shop">shop</a> -->
      <!-- <a href="#packages">packages</a> -->
      <!-- <a href="#reviews">reviews</a> -->

    </nav>

    <div class="icons">
      <div id="menu-btn" class="fas fa-bars"></div>
      <!--<a href="#" class="fas fa-shopping-cart"></a>-->
      <div id="search-btn" class="fas fa-n"></div>
    </div>

</header>

    <!-- header section ends -->

    <!-- search form start -->

    <div class="search-form">

        <div id="close-search" class="fas fa-times"></div>

        <form action="">
            <input type="search" name="" placeholder="search here..." id="search-box">
            <label for="search-box" class="fas fa-search"></label>
        </form>
    </div>
    <!-- search form ends-->



<br>
<br>
<br>
<!---
    <form action="add_spot.php" method="post" enctype="multipart/form-data">
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
--->
    <section id="adventure">
        <div class="tabs horizontal-scroll-wrapper">

            <div class="tabs__head">
                <div class="tabs__toggle is-active">
                    <span class="tabs__name">ALL</span>
                </div>
                <div class="tabs__toggle">
                    <span class="tabs__name">Family</span>
                </div>
                <div class="tabs__toggle">
                    <span class="tabs__name">Friend's</span>
                </div>
                <div class="tabs__toggle">
                    <span class="tabs__name">Couple's</span>
                </div>
                <div class="tabs__toggle">
                    <span class="tabs__name">Solo</span>
                </div>
            </div>
            <div class="tabs__content is-active">
                <h2 class="tabs__title" id="#masjjj">Explor The Nahik With Loved Once's</h2>
                <div class="container text-center ">



                    <section class="category adventure adventurepage" id="adventure">


                        <div class="box-container">
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
        echo "<div class='box'>";
        echo "<img src='Admin/images/places/" . $row["main_photo"] . "' alt='" . $row["spot_name"] . "'><br>";
        echo "<h3>" . $row["spot_name"] . "</h3>";
        echo "<p>" . $row["spot_description"] . "</p>";
        echo "<a href='Admin/spot_details.php?id=" . $row["id"] . "' class='btn'>Read more</a>";
        echo "</div>";
    }
} else {
    echo "No tourist spots found.";
}

mysqli_close($conn);
?>


                        </div>

                    </section>


                </div>
            </div>

            <div class="tabs__content">
                <h2 class="tabs__title" id="spices">Explor Nahiko With Family</h2>

                <section class="category adventure adventurepage" id="adventure">


                    <div class="box-container">

                        <?php
include('db.php');

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Build SQL query to select tourist spots belonging to the "Family" category
$sql = "SELECT id, spot_name, spot_description, main_photo FROM tourist_spots WHERE category = 'Family'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // Output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "<div class='box'>";
        echo "<img src='Admin/images/places/" . $row["main_photo"] . "' alt='" . $row["spot_name"] . "'>";
        echo "<h3>" . $row["spot_name"] . "</h3>";
        echo "<p>" . $row["spot_description"] . "</p>";
        echo "<a href='Admin/spot_details.php?id=" . $row["id"] . "' class='btn'>read more</a>";
        echo "</div>";
    }
} else {
    echo "No tourist spots found for the Family category.";
}

mysqli_close($conn);
?>


                    </div>

                </section>
            </div>

            <div class="tabs__content">
                <h2 class="tabs__title" id="food">Explor Nahiko With Friend's</h2>
                <section class="category adventure adventurepage" id="adventure">


                    <div class="box-container">

                        <?php
                        include('db.php');
                        
                        // Check connection
                        if (!$conn) {
                            die("Connection failed: " . mysqli_connect_error());
                        }
                        
                        // Build SQL query for Friends category
                        $sql = "SELECT id, spot_name, spot_description, main_photo FROM tourist_spots WHERE category = 'Friends'";
                        $result = mysqli_query($conn, $sql);
                        
                        if (mysqli_num_rows($result) > 0) {
                            // Output data of each row
                            while($row = mysqli_fetch_assoc($result)) {
                                echo "<div class='box'>";
                                echo "<img src='Admin/images/places/" . $row["main_photo"] . "' alt='" . $row["spot_name"] . "'>";
                                echo "<h3>" . $row["spot_name"] . "</h3>";
                                echo "<p>" . $row["spot_description"] . "</p>";
                                echo "<a href='Admin/spot_details.php?id=" . $row["id"] . "' class='btn'>Read more</a>";
                                echo "</div>";
                            }
                        } else {
                            echo "No tourist spots found in the Friends category.";
                        }
                        
                        mysqli_close($conn);
                        ?>


                    </div>

                </section>

            </div>

            <div class="tabs__content">
                <h2 class="tabs__title" id="goods">Explor Nahiko With Couple's</h2>
                <section class="category adventure adventurepage" id="adventure">


                    <div class="box-container">

                        <?php
// Connect to your database
include('db.php');

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Build SQL query to select spots for the "Couple" category
$sql = "SELECT id, spot_name, spot_description, main_photo FROM tourist_spots WHERE category = 'Couple'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // Output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "<div class='box'>";
        echo "<img src='Admin/images/places/" . $row["main_photo"] . "' alt='" . $row["spot_name"] . "'><br>";
        echo "<h3>" . $row["spot_name"] . "</h3>";
        echo "<p>" . $row["spot_description"] . "</p>";
        echo "<a href='Admin/spot_details.php?id=" . $row["id"] . "' class='btn'>Read More</a>";
        echo "</div>";
    }
} else {
    echo "No tourist spots found for couples.";
}

mysqli_close($conn);
?>


                    </div>

                </section>


            </div>

            <div class="tabs__content">
                <h2 class="tabs__title" id="art">Explor Nahiko Solo...!!</h2>

                <div class="container text-center"></div>
                <section class="category adventure adventurepage" id="adventure">


                    <div class="box-container">
                        <?php
// Connect to your database
include('db.php');

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Build SQL query to select spots from the "Solo" category
$sql = "SELECT id, spot_name, spot_description, main_photo FROM tourist_spots WHERE category = 'Solo'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // Output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "<div class='box'>";
        echo "<img src='Admin/images/places/" . $row["main_photo"] . "' alt='" . $row["spot_name"] . "'>";
        echo "<h3>" . $row["spot_name"] . "</h3>";
        echo "<p>" . $row["spot_description"] . "</p>";
        echo "<a href='Admin/spot_details.php?id=" . $row["id"] . "' class='btn'>Read More</a>";
        echo "</div>";
    }
} else {
    echo "No tourist spots found in the Solo category.";
}

mysqli_close($conn);
?>


                    </div>

                </section>
            </div>
        </div>
    </section>

    <!-- footer section starts  -->

  <section class="footer">

		<div class="box-container">

			<div class="box">
				<h3>quick links</h3>
				<a href="images/places/">home</a>
      <a href="places.php">Place's</a>
      <a href="feed.php">Feed</a>
      <a href="gallary.php">Gallary</a>
      <a href="blogs.php">Blogs</a>
      <a href="events.php">Event's</a>
      <a href="aboutus.php">About Us</a>
			</div>

			<div class="box">
				<h3>Extra links</h3>
				<a href="https://www.nasiko.site/Admin/spot_details.php?id=1">Trimbakeshwar </a>
				<a href="https://www.nasiko.site/Admin/spot_details.php?id=2">Ramkund Nashik</a>
				<a href="https://www.nasiko.site/Admin/spot_details.php?id=25">Shree Someshwar Temple</a>
				<a href="https://www.nasiko.site/Admin/spot_details.php?id=26">Sula Vineyards</a>
				<a href="https://www.nasiko.site/Admin/spot_details.php?id=27">Gangapur Dam</a>
				<a href="feed.php">Naasiko Feed's</a>
			</div>

			<div class="box">
				<h3>contact info</h3>
				<a href="tel:+918380000905"> <i class="fas fa-phone"></i> +91-8380000905 </a>
				<a href="tel:+918380000905"> <i class="fas fa-phone"></i> +91-8888896330 </a>
				<a href="contact@nasiko.site"> <i class="fas fa-envelope"></i> contact@nasiko.site</a>
				<a href="contact@nasiko.site"> <i class="fas fa-map"></i> Nashik, Maharashtra</a>
			</div>

			<div class="box">
				<h3>follow us</h3>
				<a href="#" target="_blank"> <i
						class="fab fa-facebook-f"></i> facebook </a>
				<a href="#" target="_blank"> <i
						class="fab fa-twitter"></i> twitter </a>
				<a href="#" target="_blank"> <i
						class="fab fa-instagram"></i> instagram </a>
				<a href="#" target="_blank"> <i
						class="fab fa-linkedin"></i> linkedin </a>
				<!-- <a href="#"><i class="fab fa-github"></i> github </a> -->
				<a href="#" target="_blank"><i
						class="fa fa-pinterest"></i> pinterest </a>
			</div>

		</div>

		<div class="credit">Made with 🤍 in<span> INDIA</span> <br> Copyright ©️ 2024 - all rights reserved by RamLok!
		</div>

	</section>

  <!-- footer section ends -->



    <a href="#top" class="to-top">
        <i class="fas fa-chevron-up"></i>
    </a>

    <!-- custom js file link  -->
    <script src="js/allscript.js"></script>

</body>

</html>