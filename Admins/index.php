<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <style>
        /* Define your color themes here */
        .theme1 { background-color: #f0f0f0; color: #333; }
        .theme2 { background-color: #3498db; color: #fff; }
        .theme3 { background-color: #2ecc71; color: #fff; }
        .theme4 { background-color: #f39c12; color: #fff; }
    </style>
</head>
<body>
    <div class="container">
        <h1>Admin Panel</h1>
        <div class="theme-selector">
            <h3>Select Theme:</h3>
            <ul>
                <li><a href="?theme=1">Theme 1</a></li>
                <li><a href="?theme=2">Theme 2</a></li>
                <li><a href="?theme=3">Theme 3</a></li>
                <li><a href="?theme=4">Theme 4</a></li>
            </ul>
        </div>

        <?php
            // Check if a theme is selected
            $theme = isset($_GET['theme']) ? $_GET['theme'] : 1;
            // Assign class based on selected theme
            $themeClass = "theme$theme";
        ?>

        <div class="content <?php echo $themeClass; ?>">
            <h2>Blogs</h2>
            <p><a href="blogs.php">Manage Blogs</a></p>

            <h2>Events</h2>
            <p><a href="event.php">Manage Events</a></p>

            <h2>Gallery</h2>
            <p><a href="gallery.php">Manage Gallery</a></p>

            <h2>Hotels</h2>
            <p><a href="hotels.php">Manage Hotels</a></p>
        </div>
    </div>
</body>
</html>
