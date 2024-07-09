<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Meta Tags Start ------------------------------------------------------>
  <meta http-equiv='content-language' content='en-US'>
  <meta name="title" content="Nasiko - Visit Nashik with Nasiko">
  <meta name="description" content="Nahiko:- Nashik is the third largest city of Maharashtra after Mumbai & Pune. Nashik lies in the northern part of Maharashtra state at 700 m (2,300 ft) from the mean sea level which gives it ideal temperature variation, particularly in winters. Nashik lies at altitude of 700m above sea level and has lush mountainous terrain.
    ">
  <meta name="keywords"
    content="Nahiko,Nashik, Nashik,Naik,Maharashtra,New Places ,Nikya Lokhande,Nashik,Nikya,Nashik,Nashiko,Nashiko Nashik,Nashik Nashiko,Nashik top places,New Nashik">
  <!-------------------------------------------------------- Meta Tags End -->
  <title>Nasiko - Explor The Nashik</title>

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


  <link rel="stylesheet" href="css/plugins.styles.css">
  <link rel="stylesheet" href="css/main.styles.css">
  
  <meta name="robots" content="index, follow">
  <meta name="language" content="English">
  <meta name="author" content="Nikya Lokhande">
  <!-- custom css file link  -->
  <link rel="stylesheet" href="css/style.css">

  <style>


        input[type="file"],
        input[type="text"],
        select {
            width: 100%;
            padding: 12px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            font-size: 16px;
        }

        select {
            height: 48px;
        }

        button[type="submit"] {
            background-color: #007bff;
            color: #fff;
            padding: 14px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            width: 100%;
            display: block;
            transition: background-color 0.3s;
        }

        button[type="submit"]:hover {
            background-color: #0056b3;
        }

        input[type="file"]::-webkit-file-upload-button {
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s;
        }

        input[type="file"]::-webkit-file-upload-button:hover {
            background-color: #0056b3;
        }
    </style>

</head>

<body>
  <div id="top"></div>


  <!-- header section starts  -->

 <header class="header">

    <a href="index.php" class="logo"> <i class="fas fa-location"></i> Nashiko. </a>

    <nav class="navbar">
      <div id="nav-close" class="fas fa-times"></div>
      <a href="index.php">home</a>
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

  <!-- search form  -->

  <div class="search-form">

    <div id="close-search" class="fas fa-times"></div>

    <form action="">
      <input type="search" name="" placeholder="search here..." id="search-box">
      <label for="search-box" class="fas fa-search"></label>
    </form>
  </div>

  <!-- home section starts  -->

  <!-- search form  -->

  <!-- home section starts  -->


  <!-- home section ends -->

<br>
<br>


  <!--New Section-->


<?php
// Establish database connection
include('db.php');

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
            

    <div class="container">
        <div class="row">
            <div class="gallery-header">
                <h1 class="header-title">Gallery</h1>
                <h3><p class="header-description">Hey Guys! Welcome to Nashik Gallery. Here you will find all the photographs of Nashik.</p></h3>
            </div>

            <div class="gallery-filters">
                <button type="button" class="filter-button active">All</button>
                <button type="button" class="filter-button">Nashik</button>
                <button type="button" class="filter-button">Culture</button>
                <button type="button" class="filter-button">Nature</button>
                <button type="button" class="filter-button">Animals</button>
                <button type="button" class="filter-button">Technology</button>
            </div>

            <div class="gallery-grid">
                <?php
                // Fetch gallery images from the database
                $sql = "SELECT * FROM gallery";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    // Output data of each row
                    while($row = $result->fetch_assoc()) {
                        echo '<figure class="item" data-tag="' . $row["tag"] . '" data-category="' . $row["category"] . '">
                                <a class="gallery-item" href="' . $row["src"] . '" data-pswp-width="1875" data-pswp-height="2500" target="_blank" rel="noopener">
                                    <div class="img-content">
                                        <img class="gallery-img" src="' . $row["src"] . '" alt="' . $row["alt"] . '" />
                                        <div class="overlay"></div>
                                    </div>
                                    <figcaption class="hidden-caption-content">
                                        <p>' . $row["alt"] . '</p>
                                        <small>' . $row["caption"] . '</small>
                                    </figcaption>
                                </a>
                            </figure>';
                    }
                } else {
                    echo "0 results";
                }
                ?>
            </div>
        </div>
    </div>


<!----New One Added --->
<!----->
<form method="post" action="update_gallery.php" enctype="multipart/form-data">
    <input type="hidden" name="image_id" value="1"> <!-- Hidden field for image ID -->
    <input type="file" name="image_file">
    <input type="text" name="image_alt" placeholder="Alt Text">
    <input type="text" name="image_caption" placeholder="Caption">
    <input type="text" name="image_tag" placeholder="Tag">
    <select name="image_category">
        <option value="nature">Nature</option>
        <option value="animals">Animals</option>
        <option value="technology">Technology</option>
        <option value="culture">Culture</option>
        <option value="Nashik">Nashik</option>
    </select>
    <button type="submit">Upload Image</button>


<br>


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




  <!-- ------scroller to top -->

  <a href="#top" class="to-top">
    <i class="fas fa-chevron-up"></i>
  </a>




  <!-- product section links -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.5/js/swiper.min.js'></script>



  <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

  <!-- custom js file link  -->
  <script src="js/script.js"></script>


  <script src="js/plugins.min.js"></script>
  <script src="js/main.script.js"></script>

  <!-- <div class="scroll-container">
    <a href="#top">To Top</a>
</div> -->

</body>

</html>