<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Image and Title</title>
</head>
<body>
    <h1>Upload Image and Title</h1>
    <form action="process_upload.php" method="post" enctype="multipart/form-data">
        <label for="title">Title:</label>
        <input type="text" id="title" name="title" required><br><br>
        <label for="image">Image:</label>
        <input type="file" id="image" name="image" required><br><br>
        <input type="submit" value="Upload">
    </form>
</body>
</html>
