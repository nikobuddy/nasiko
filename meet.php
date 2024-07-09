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

        .containe {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            margin-top: 20px;
        }
        .car {
            width: 300px;
            margin-bottom: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
            transition: 0.3s;
            background-color: #fff;
            overflow: hidden;
            text-decoration: none;
            color: inherit;
        }
        .car:hover {
            box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
            transform: translateY(-5px);
        }
        .car-content {
            padding: 20px;
            background-color: #f9f9f9;
            color: #333;
        }
        .car-content h3 {
            margin-top: 0;
            margin-bottom: 15px;
            color: #555;
        }
        .car-content p {
            margin: 0;
            color: #777;
        }
        .category-family {
            background-color: #ffc107;
        }
        .category-friends {
            background-color: #28a745;
        }
        .category-couples {
            background-color: #007bff;
        }

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
        }

        h2 {
            margin-top: 0;
            font-size: 24px;
            color: #333;
            text-align: center;
        }

        label {
            font-size: 16px;
            color: #333;
            margin-bottom: 8px;
            display: block;
        }

        textarea {
            width: 100%;
            height: 100px;
            padding: 10px;
            margin-bottom: 16px;
            border: 1px solid #ccc;
            border-radius: 4px;
            resize: vertical;
            box-sizing: border-box;
            font-size: 16px;
        }

        input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            display: block;
            width: 100%;
            margin-top: 10px;
        }

        input[type="submit"]:hover {
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
<br>
<br>
<br>
  <!-- search form  -->

 <div class="containe">
        <?php
        // Database connection
                    include('db.php');


        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // SQL query to retrieve ride details
        $sql = "SELECT * FROM ride_details";
        $result = $conn->query($sql);

        // Check if there are rows in the result
        if ($result->num_rows > 0) {
            // Output data of each row
            while($row = $result->fetch_assoc()) {
                // Set class based on category
                $category_class = '';
                switch ($row["ride_category"]) {
                    case 'With Family':
                        $category_class = 'category-family';
                        break;
                    case 'With Friends':
                        $category_class = 'category-friends';
                        break;
                    case 'With Couples':
                        $category_class = 'category-couples';
                        break;
                    default:
                        $category_class = '';
                        break;
                }
                echo "<a href='tel:" . $row["your_mobile_number"] . "' class='car $category_class'>";
                echo "<div class='car-content'>";
                echo "<h3>Name: " . $row["your_name"]. "</h3>";
                echo "<p>Mobile Number: " . $row["your_mobile_number"]. "</p>";
                echo "<p>Pickup Point: " . $row["departure_point"]. "</p>";
                echo "<p>Drop Point: " . $row["destination"]. "</p>";
                echo "<p>Pickup Time: " . $row["departure_time"]. "</p>";
                echo "<p>Number of Seats: " . $row["seats_available"]. "</p>";
                echo "<p>Category: " . $row["ride_category"]. "</p>";
                echo "</div>";
                echo "</a>";
            }
        } else {
            echo "<p style='text-align: center; color: #555;'>0 results</p>";
        }

        // Close connection
        $conn->close();
        ?>
</div>




<center>
<!--Form of adding qouts--->

<!---
 <form action="submit_quotes_process.php" method="post">
        <h2>Submit Quotes</h2>
        <label for="quote">Quote:</label>
        <textarea name="quote" required></textarea>

        <input type="submit" value="Submit Quote">
    </form>
</center>


<!----New One Added --->

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