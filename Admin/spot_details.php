<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Google tag (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-S79Y2FRX1H"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag() { dataLayer.push(arguments); }
    gtag('js', new Date());

    gtag('config', 'G-S79Y2FRX1H');
  </script>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Meta Tags Start ------------------------------------------------------>
  <meta http-equiv='content-language' content='en-US'>
  <meta name="title" content="Events - Visit Sri Lanka">
  <meta name="description"
    content="Sri Lanka is an island nation located in the Indian Ocean, just off the southeastern coast of India.">
  <meta name="keywords" content="">
  <!-- Open Graph -->
  <title>Events</title>

  <!-- tab logo -->
  <link rel="icon" type="image/x-icon" href="/images/tablogo.png">

  <!-- font awesome cdn link  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

  <!-- bootstrap CSS file link -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

<style>
        .hotel-card {
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 10px;
            margin-bottom: 10px;
            width: 300px;
        }
        .hotel-image {
            width: 100%;
            height: auto;
        }
        .hotel-name {
            font-weight: bold;
            margin-top: 10px;
        }
    </style>
<style>

.video-container {
    position: relative;
    width: 100%;
    margin: 0 auto; /* Center alignment horizontally */
    max-width: 560px; /* Adjust as needed */
    text-align: center; /* Center alignment */
}

.video-container iframe {
    width: 100%;
    height: 315px; /* Adjust as needed */
}

       

</style>
  <!-- custom css file link  -->
  <link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" href="../css/blog.css">

</head>

<body>


  <div id="top"></div>
  <!-- header section starts  -->

  <header class="header">

    <a href="../index.php" class="logo"> <i class="fas fa-location"></i> Nashiko. </a>

    <nav class="navbar">
      <div id="nav-close" class="fas fa-times"></div>
      <a href="../index.php">home</a>
      <a href="../places.php">Place's</a>
      <a href="../feed.php">Feed</a>
      <a href="../gallary.php">Gallary</a>
      <a href="../blogs.php">Blogs</a>
      <a href="../events.php">Event's</a>
      <a href="../aboutus.php">About Us</a>
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

  <!-- search form  -->

  <div class="search-form">

    <div id="close-search" class="fas fa-times"></div>

    <form action="">
      <input type="search" name="" placeholder="search here..." id="search-box">
      <label for="search-box" class="fas fa-search"></label>
    </form>
  </div>



  <!-- ---------------------------banner -->
  <div class="banner-area">

  <?php
    include('db.php');

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Fetch tourist spot details
    $spot_id = $_GET["id"];
    $sql = "SELECT spot_name, spot_description, main_photo FROM tourist_spots WHERE id = $spot_id";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);

        // Start banner area HTML with background image
        echo '<div class="banner-area" style="background-image: url(\'images/places/' . $row["main_photo"] . '\'); background-position: center center;">';
        // End banner area HTML
        echo "</div>";
    } else {
        echo "Tourist spot not found.";
    }

    mysqli_close($conn);
?>

  
  </div>




  <!-- ------------------event html start--------------------------------------------- -->



<div class="container text-center">
    
    <?php
include('db.php');

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Fetch tourist spot details
$spot_id = $_GET["id"];
$sql = "SELECT spot_name, spot_description, main_photo, sub_photo1, sub_photo2, sub_photo3, sub_photo4, sub_photo5, sub_description1, sub_description2, sub_description3, sub_description4, sub_description5, youtube_video FROM tourist_spots WHERE id = $spot_id";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    echo "<h1>" . $row["spot_name"] . "</h1>";
    echo "<img src='images/places/" . $row["main_photo"] . "' alt='" . $row["spot_name"] . "' style='max-width:100%; height:auto;'><br>";
    echo "<p>" . $row["spot_description"] . "</p>";

    // Construct the YouTube video URL manually
    $video_id = $row["youtube_video"];
    $youtube_url = "https://www.youtube.com/embed/" . $video_id;

    // Add static YouTube video using constructed URL with responsive styles and center alignment
    echo '<div class="video-container">';
    echo '<iframe width="560" height="315" src="' . $youtube_url . '" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
    echo '</div>';

    // Display sub photos and descriptions
    for ($i = 1; $i <= 5; $i++) {
        $sub_photo = $row["sub_photo$i"];
        $sub_description = $row["sub_description$i"];
        if (!empty($sub_photo)) {
            echo "<div class='row pt-5 pb-5 d-flex align-items-center justify-content-center'>";
            echo "<div class='col col-lg-6 col-md-12'>";
            echo "<img src='images/places/" . $sub_photo . "' alt='" . $row["spot_name"] . "' style='max-width:100%; width:auto; height:auto;'><br>";

            echo "</div>";
            echo "<div class='col col-lg-6 col-md-12'>";
            echo "<p>" . $sub_description . "</p>";
            echo "</div>";
            echo "</div>";
        }
    }
} else {
    echo "Tourist spot not found.";
}

mysqli_close($conn);
?>
</div>

<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>


<section class="blogs" id="blogs">
    <h1 class="heading">Nearby Hotel Details</h1>

    <div class="swiper-container blogs-slider">
        <div class="swiper-wrapper">
            <?php
            // Database connection
            include('db.php');

            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            // Fetch hotel details based on page_id from URL parameter
            if(isset($_GET['id'])) {
                $page_id = $_GET['id'];
                $sql = "SELECT * FROM hotels WHERE page_id = $page_id";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo '<div class="swiper-slide slide">';
                        echo '<img src="' . $row['image_url'] . '" alt="Hotel Image">';
                        echo '<div class="icons">';
                        echo '<a href="tel:' . $row['phone_number'] . '"> <i class="fas fa-phone"></i>' . $row['phone_number'] . '</a>';
                        echo '<a href="' . $row['direction_url'] . '"> <i class="fas fa-location-arrow"></i> Direction</a>';
                        echo '</div>';
                        echo '<h3>' . $row['hotel_name'] . '</h3>';
                        echo '</div>';
                    }
                } else {
                    echo "No hotel found for page ID: $page_id";
                }
            } else {
                echo "Page ID not provided in URL parameter";
            }

            $conn->close();
            ?>
        </div>
        <!-- Add pagination -->
        <div class="swiper-pagination"></div>
    </div>
</section>



<script>
    var swiper = new Swiper('.blogs-slider', {
        slidesPerView: 'auto',
        spaceBetween: 20,
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
    });
</script>



<section class="footer">

		<div class="box-container">

			<div class="box">
				<h3>quick links</h3>
				<a href="../index.html">home</a>
      <a href="../places.php">Place's</a>
      <a href="../feed.php">Feed</a>
      <a href="../gallary.php">Gallary</a>
      <a href="../blogs.php">Blogs</a>
      <a href="../events.php">Event's</a>
      <a href="../aboutus.php">About Us</a>
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



  <a href="#top" class="to-top">
    <i class="fas fa-chevron-up"></i>
  </a>

  <!-- custom js file link  -->
  <script src="js/allscript.js"></script>





  <!-- product section links -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.5/js/swiper.min.js'></script>



  <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

  <!-- custom js file link  -->
  <script src="../js/script.js"></script>



</body>

</html>
