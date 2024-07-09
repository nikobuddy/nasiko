

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
<style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
                  font-family: Arial, sans-serif;
            font-family: -apple-system, system-ui, "Segoe UI", Roboto, Oxygen, Ubuntu,
                Cantarell, "Open Sans", "Helvetica Neue", sans-serif;
            background: #fafafa;
        }

        .navbars {
            position: fixed;
            z-index: 100000;
            display: flex;
            align-items: center;
            justify-content: center;
            background: rgb(255, 255, 255);
            width: 100%;
            border: 1px solid rgb(218, 217, 217);
        }

        .action .profile img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        main {
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        main .container {
            position: relative;
            margin-top: 10px;
            width: 75%;
            display: flex;
            align-items: flex-start;
            justify-content: space-between;
        }

        .col-9 {
            width: 65%;
            margin-top: 10px;
        }
        .col-3 {
            width: 20%;
            position: -webkit-sticky;
            position: sticky;
            top: 90px;
        }

        .col-3 h4 {
            color: rgb(100, 100, 100);
        }

        .col-3 .cd {
            margin-bottom: 20px;
            position: relative;
            width: 100%;
            display: inline-block;
        }

        .col-3 .cd .bottom {
            padding: 10px 20px;
        }

        .col-3 .cd .tp .userDetails {
            width: 100%;
            display: flex;
            align-items: center;
        }

        .col-3 .cd .tp .userDetails h3 {
            font-size: 14px;
            color: #4d4d4f;
            font-weight: 500;
            line-height: 1em;
        }

        .col-3 .cd .tp .userDetails h3 span {
            font-size: 0.75em;
        }

        .userDetails {
            margin-bottom: 10px;
            /* Adjust the margin value as per your preference */
        }


        .profilepic {
            display: inline-block;
            cursor: pointer;
        }
        .statuses .status img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        .col-9 .card {
            margin: 10px;
            margin-bottom: 20px;
            position: relative;
            width: 100%;
            border: 1px solid rgba(7, 7, 7, 0.24);
        }

        .col-9 .card .top {
            padding: 10px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .col-9 .card .bottom {
            padding: 10px 20px;
        }

        .col-9 .card .top .userDetails {
            width: 100%;
            display: flex;
            align-items: center;
        }

        .profilepic {
            display: inline-block;
            cursor: pointer;
        }

        .profilepic .profile_img {
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            overflow: hidden;
            width: 70px;
            height: 70px;
            background: linear-gradient(to right, red, orange);
            padding: 2px;
            margin-right: 8px;
            cursor: pointer;
        }

        .profilepic .profile_img .image {
            position: relative;
            width: 100%;
            height: 100%;
            border-radius: 50%;
            overflow: hidden;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            border: 2px solid white;
        }

        .profilepic .profile_img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .cover {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .dot {
            transform: scale(0.6);
            cursor: pointer;
        }

        .imgBx {
            position: relative;
            width: 100%;
            min-height: 600px;
            margin: 10px 0 15px;
        }

        .actionBtns {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .actionBtns svg {
            cursor: pointer;
        }

        .actionBtns .left svg {
            margin-right: 8px;
        }

        .likes {
            font-weight: 500;
            margin-top: 5px;
            font-size: 14px;
            color: #4d4d4f;
        }

        .message {
            font-weight: 400;
            margin-top: 5px;
            font-size: 14px;
            color: #777;
            line-height: 1.5em;
        }

        .message b {
            color: #262626;
        }

        .message span {
            cursor: pointer;
            color: #1d92ff;
        }

        
        a {
            text-decoration: none;
        }

        .hidden {
            display: none;
        }

        @media screen and (max-width: 1000px) {
            .col-9 {
                width: 100%;
                background: #fafafa;
            }

            .col-3 {
                display: none;
            }
        }
        @media only screen and (max-width: 768px) {
    .col-9 .card {
        box-shadow: 0 9px 9px rgba(0, 0, 0, 0.1); /* Adjust shadow as needed */
        border-color: rgba(7, 7, 7, 0.24); /* Border color */
    }
}

        @media screen and (max-width: 600px) {
            .container {
                width: 100% !important;
            }

            .navbar .container {
                padding: 15px 10px !important;
            }

            .col-9 {
                margin-top: 4px;
                min-width: 100%;
            }

            .statuses {
                margin-bottom: 0px;
            }

            .col-9 .card {
                margin-bottom: 0px;
                width: 95%;
                border-color: rgba(7, 7, 7, 0.24); /* Border color */
            }

            .imgBx {
                position: relative;
                width: 100%;
                min-height: 400px;
                margin: 10px 0 15px;
            }

            .searchbar {
                display: none;
            }
        }
        .profilepics {
            display: inline-block;
            cursor: pointer;
        }

        .profilepics .profile_img {
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            overflow: hidden;
            width: 50px;
            height: 50px;
            background: linear-gradient(to right, red, orange);
            padding: 2px;
            margin-right: 8px;
            cursor: pointer;
        }

        .profilepics .profile_img .image {
            position: relative;
            width: 100%;
            height: 100%;
            border-radius: 50%;
            overflow: hidden;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            border: 2px solid white;
        }

        .profilepics .profile_img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }


        .custom-container {
      max-width: 600px;
      padding: 20px;
      background-color: #fff;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      text-align: center;
      margin-top: 60px;
    }
    .custom-text {
      font-size: 18px;
      color: #333;
      margin-bottom: 20px;
    }
    .custom-button {
      padding: 10px 20px;
      background-color: #007bff;
      color: #fff;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      font-size: 16px;
      transition: background-color 0.3s ease;
    }
    .custom-button:hover {
      background-color: #0056b3;
    }
    </style>
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

<!----New One Added --->



<!---Feed Section-->

<?php
include('db.php');

// Fetch approved reviews with user details from the database
$sql = "SELECT place_reviews.*, users.name as user_name, users.profile_picture as user_profile_picture, users.verified as user_verified
        FROM place_reviews
        INNER JOIN users ON place_reviews.user_id = users.id
        WHERE place_reviews.approved = 1";
$result = $conn->query($sql);

// Check if there are any approved reviews
if ($result->num_rows > 0) {
    $reviews = $result->fetch_all(MYSQLI_ASSOC);
} else {
    $reviews = [];
}
$users_query = "SELECT * FROM users";
$users_result = $conn->query($users_query);
$conn->close();
?>
<br>
<br>
<br>
<center>
<div class="custom-container">
    <div class="custom-text">If you want to add your post, simply register now</div>
    <a href="http://nasiko.site/register.php"><button class="custom-button">Register Now</button></a>
  </div>
</center>


<main>
    <div class="container">
        <div class="col-9">
            <?php foreach ($reviews as $review) : ?>
            <!-- Code for viewing the Post -->
            <div class="card">
                <div class="top">
                    <div class="userDetails">
                        <div class="profilepic">
                            <div class="profile_img">
                                <div class="image">
                                    <img src="<?= htmlspecialchars($review['user_profile_picture']) ?>" alt="User Profile Picture">
                                </div>
                            </div>
                        </div>
                        <h1><?= htmlspecialchars($review['user_name']) ?><br>
                            
                        </h1>
                    </div>
                    <div>
                        <span class="dot">
                           <?php if ($review['user_verified']) : ?>
                                <span class="verified-icon">
                                    <img src="verified_icon.png" alt="Verified Tick" style="height: 50px; width: 50px;">
                                </span>
                            <?php endif; ?>
                        </span>
                    </div>
                </div>
                <div class="imgBx">
                    <img src="<?= htmlspecialchars($review['place_image']) ?>" alt="Place Image" class="cover">
                </div>
                <div class="bottom">
                    <div class="actionBtns">
                        <div class="left">
                        </div>
                    </div>
                    <a><h2><?= htmlspecialchars($review['user_name']) ?><br></h2>
                        <p class="message">
                            <?php 
                                $description = htmlspecialchars($review['description']);
                                $shortDescription = strlen($description) > 150 ? substr($description, 0, 150) . "..." : $description;
                                echo $shortDescription;
                            ?>
                            <?php if (strlen($description) > 150) : ?>
                                <a class="read-more" href="#" onclick="toggleReadMore(this, event)">Read More</a>
                            <?php endif; ?>
                        </p>
                    </a>
                    <a href="#">
                        <h5 class="postTime"><?= htmlspecialchars($review['posted_time']) ?></h5>
                    </a>
                </div>
                <div class="full-description" style="display: none;">
                    <p><?= $description ?></p>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        <div class="col-3">
                <div class="cd">
                    <h4>Our User's List</h4>
                    <div class="tp">
        <?php
// Enable error reporting
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Include database connection
include('db.php');

// Fetch all users from the database
$sql = "SELECT * FROM users";
$result = $conn->query($sql);

// Check for errors
if (!$result) {
    echo "Error: " . $conn->error; // Output any MySQL errors
    exit; // Exit script to prevent further execution
}

// Check if any users were found
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<div class='userDetailsContainer'>"; // Container for each user detail
        echo "<div class='userDetails'>";
        echo "<div class='profilepics'>";
        echo "<div class='profile_img'>";
        echo "<div class='image'>";
        echo "<img src='" . $row['profile_picture'] . "' alt='" . $row['name'] . "'>";
        echo "</div>";
        echo "</div>";
        echo "</div>";
        echo "<h3>" . $row['name'] . "<br>";
        echo "<span>" . $row['username'] . "</span>";
        echo "</h3>";
        echo "</div>";
        echo "</div>"; // End of userDetailsContainer
    }

    
} else {
    echo "<p>No users found.</p>";
}

// Close the database connection
$conn->close();
?>

    </div>
</main>

<script>
    function toggleReadMore(link, event) {
        event.preventDefault();
        var textContainer = link.parentElement.parentElement.parentElement.querySelector('.bottom');
        var fullDescription = textContainer.parentElement.querySelector('.full-description');

        fullDescription.style.display = fullDescription.style.display === 'none' ? 'block' : 'none';
        link.textContent = link.textContent === 'Read More' ? 'Read Less' : 'Read More';
    }
</script>
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