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

  <!-- custom css file link  -->
  <link rel="stylesheet" href="../css/events.css">
  <link rel="stylesheet" href="../css/style.css">

    <!-- tab logo -->
  <link rel="icon" type="image/x-icon" href="/images/index/Nashiko.png">

  <!-- font awesome cdn link  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

  <!-- swiper js cdn link -->
  <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

  <!-- home page event section's icon cdn link  -->
  <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css'>

  <!-- Home section google font link -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">


</head>

<body>


  <div id="top"></div>
  <!-- header section starts  -->

  <header class="header">

    <a href="#" class="logo"> <i class="fas fa-hiking"></i> travel. </a>

    <nav class="navbar">
      <div id="nav-close" class="fas fa-times"></div>
      <a href="index.html">home</a>
      <a href="adventure.html">Adventure</a>
      <a href="map.html">map</a>
      <a href="blogs.html">blogs</a>
      <a href="events.html">Events</a>
      <a href="feed.html">Feed</a>
      <a href="about.html">about us</a>

    </nav>

    <div class="icons">
      <div id="menu-btn" class="fas fa-bars"></div>
      <!-- <a href="#" class="fas fa-shopping-cart"></a> -->
      <div id="search-btn" class="fas fa-search"></div>
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
    $sql = "SELECT spot_name, spot_description, main_photo, sub_photo1, sub_photo2, sub_photo3, sub_photo4, sub_photo5, sub_description1, sub_description2, sub_description3, sub_description4, sub_description5 FROM tourist_spots WHERE id = $spot_id";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        echo "<h1>" . $row["spot_name"] . "</h1>";
echo "<img src='images/places/" . $row["main_photo"] . "' alt='" . $row["spot_name"] . "' style='max-width:100%; height:auto;'><br>";
        echo "<p>" . $row["spot_description"] . "</p>";

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


<br><br>
<section class="reviews" id="reviews">

    <h1 class="heading">Tourist's reviews</h1>

    <div class="swiper review-slider">

      <div class="swiper-wrapper">

        <?php
        include('db.php');

        // Retrieve quotes along with user information
        $sql = "SELECT quotes.quote, users.name, users.profile_picture 
                FROM quotes 
                INNER JOIN users ON quotes.user_id = users.id";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo '<div class="swiper-slide slide">';
                echo '<p class="text">' . $row['quote'] . '</p>';
                echo '<div class="user">';
                echo '<img src="' . $row['profile_picture'] . '" alt="Profile Picture">';
                echo '<div class="info">';
                echo '<h3>' . $row['name'] . '</h3>';
                echo '<span>' . $row['country'] . '</span>'; // Assuming there's a country column in the users table
                echo '</div>';
                echo '</div>';
                echo '</div>';
            }
        } else {
            echo "No quotes found.";
        }

        $conn->close();
        ?>

      </div>

    </div>

</section>
<br>


  <section class="footer">

    <div class="box-container">

      <div class="box">
        <h3>quick links</h3>
        <a href="images/places/">home</a>
        <a href="adventure.html">adventure</a>
        <a href="map.html">map</a>
        <a href="blogs.html">blog</a>
        <a href="events.html">events</a>
        <a href="products.html">products</a>
        <a href="about.php">about</a>
      </div>

      <div class="box">
        <h3>extra links</h3>
        <a href="#">my account</a>
        <a href="#">my order</a>
        <a href="#">my wishlist</a>
        <a href="#">ask questions</a>
        <a href="#">terms of use</a>
        <a href="#">privacy policy</a>
      </div>

      <div class="box">
        <h3>contact info</h3>
        <a href="#"> <i class="fas fa-phone"></i> +91-8380000905 </a>
        <a href="#"> <i class="fas fa-phone"></i> +91-7709100920 </a>
        <a href="#"> <i class="fas fa-envelope"></i> nahiko@gmail.com </a>
        <a href="#"> <i class="fas fa-map"></i> Nashik</a>
      </div>

      <div class="box">
        <h3>follow us</h3>
        <a href="https://www.facebook.com/hashtag/visitsrilanka" target="_blank"> <i class="fab fa-facebook-f"></i>
          facebook </a>
        <a href="https://twitter.com/search?q=%23visitsrilanka&src=typed_query" target="_blank"> <i
            class="fab fa-twitter"></i> twitter </a>
        <a href="https://www.instagram.com/explore/tags/visitsrilanka/" target="_blank"> <i
            class="fab fa-instagram"></i> instagram </a>
        <a href="https://www.linkedin.com/feed/hashtag/visitsrilanka/" target="_blank"> <i class="fab fa-linkedin"></i>
          linkedin </a>
        <!-- <a href="#"><i class="fab fa-github"></i> github </a> -->
        <a href="https://www.pinterest.com/search/pins/?q=visitsrilanka&rs=typed" target="_blank"><i
            class="fa fa-pinterest"></i> pinterest </a>
      </div>

    </div>

    <div class="credit">Made with 🤍 in<span> Nashik</span> <br> Copyright ©️ 2024 - all rights reserved By RamLok!
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
  <script src="js/script.js"></script>



</body>

</html>