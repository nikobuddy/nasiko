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
        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            width: 400px;
        }
        label {
            font-weight: bold;
        }
        input[type="text"],
        input[type="date"],
        textarea,
        input[type="file"],
        input[type="submit"] {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            font-size: 16px;
        }
        textarea {
            resize: vertical;
            min-height: 100px;
        }
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
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


  <!-- home section ends -->



  <!--New Section-->

<br>
<br>
<br>
<br>
<br>
<br>

<form action="updateevent.php" method="post" enctype="multipart/form-data">
    <h2>Upload Event</h2>

    <label for="title">Title:</label>
    <input type="text" id="title" name="title" required>

    <label for="description">Description:</label>
    <textarea id="description" name="description" rows="4" cols="50" required></textarea>

    <label for="location">Location:</label>
    <input type="text" id="location" name="location" required>

    <label for="date">Date:</label>
    <input type="date" id="date" name="date" required>

    <label for="image">Image:</label>
    <input type="file" id="image" name="image" accept="image/*" required>

    <input type="submit" value="Submit">
</form>

  <!-- footer section ends -->

<br><br>
<section class="blogs" id="blogs">

    <h1 class="heading">Our Upcoming Events</h1>

    <div class="swiper blogs-slider">
        <div class="swiper-wrapper">
            <?php
            // Database connection
            include('db.php');

            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            // Fetch event details from the database
            $sql = "SELECT * FROM events";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo '<div class="swiper-slide slide">';
                    echo '<img src="' . $row['image'] . '" alt="">';
                    echo '<div class="icons">';
                    echo '<a href="#"> <i class="fas fa-calendar"></i>' . $row['date'] . '</a>';
                    echo '<a href="#"> <i class="fas fa-location-arrow"></i>' . $row['location'] . '</a>';
                    echo '</div>';
                    echo '<h3>' . $row['title'] . '</h3>';
                    // Truncate description
                    $short_description = substr($row['description'], 0, 100) . '...';
                    echo '<p>' . $short_description . '</p>';
                    // Read more button
                    echo '<a class="read-more-btn">Read More</a>';
                    // Hidden full description
                    echo '<div class="full-description" style="display:none;">' . $row['description'] . '</div>';
                    echo '</div>';
                }
            } else {
                echo "0 results";
            }

            $conn->close();
            ?>
        </div>
    </div>
</section>





<script>
    // Script to toggle full description
    document.querySelectorAll('.read-more-btn').forEach(button => {
        button.addEventListener('click', () => {
            button.parentNode.querySelector('.full-description').style.display = 'block';
            button.style.display = 'none';
        });
    });
</script>
  <!-- ------scroller to top -->

  <a href="#top" class="to-top">
    <i class="fas fa-chevron-up"></i>
  </a>

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