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

  <!-- custom css file link  -->
  <link rel="stylesheet" href="css/style.css">
       <link rel="stylesheet" href="css/blog.css">
<style>
        .containr {
            max-width: 600px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h2 {
            color: #333;
            text-align: center;
        }
        form {
            display: flex;
            flex-direction: column;
        }
        label {
            margin-bottom: 5px;
            color: #666;
        }
        input[type="text"],
        textarea,
        input[type="file"] {
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }
        textarea {
            resize: vertical;
        }
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
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
<br><br>
<br><br>



<!----New One Added --->




<?php
include('db.php');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo '<section class="light">';
echo '<div class="container py-2">';
echo '<div class="h1 text-center text-dark pb-4" id="pageHeaderTitle">Welcome To Our Blog</div>';

$sql = "SELECT * FROM places";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row
    while($row = $result->fetch_assoc()) {
        echo '<article class="postcard light blue" id="' . strtolower(str_replace(" ", "", $row['name'])) . '">';
        echo '<a class="postcard__img_link" href="#">';
        echo '<img class="postcard__img" src="images/' . $row['image'] . '" alt="Image Title" />';
        echo '</a>';
        echo '<div class="postcard__text t-dark" style="padding-right: 40px;">';
        echo '<h1 class="postcard__title blue"><a href="#">' . $row['name'] . '</a></h1>';
        echo '<div class="postcard__subtitle small">';
        echo '<time datetime="' . $row['date'] . '">';
        echo '<i class="fas fa-calendar-alt mr-2"></i>' . date('D, F jS Y', strtotime($row['date']));
        echo '</time>';
        echo '</div>';
        echo '<div class="postcard__bar"></div>';
        echo '<div class="postcard__preview-txt">' . $row['description'] . '</div>';
        echo '<ul class="postcard__tagbox">';
        echo '<li class="tag__item"><a href="' . $row['direction'] . '" target="_blank"><i class="fa fa-compass" aria-hidden="true"></i> Direction</a></li>';
        echo '</ul>';
        echo '</div>';
        echo '</article>';
    }
} else {
    echo "0 results";
}

echo '</div>';
echo '</section>';

$conn->close();
?>



<div class="containr">
    <h2>Add New Place</h2>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name">

        <label for="description">Description:</label>
        <textarea id="description" name="description" rows="4" cols="50"></textarea>

        <label for="direction">Direction:</label>
        <input type="text" id="direction" name="direction">

        <label for="image">Select image to upload:</label>
        <input type="file" name="image" id="image">

        <input type="submit" value="Upload" name="submit">
    </form>
</div>
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



  <!-- <div class="scroll-container">
    <a href="#top">To Top</a>
</div> -->

</body>

</html>