<!DOCTYPE html>
<html>
<head>
    <title>Tourist Spots</title>
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
    <h1>Tourist Spots</h1>

    <form action="add_spot.php" method="post" enctype="multipart/form-data">
        <!-- Form fields -->
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
</body>
</html>

<html>
<head>
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
<h2>Update Hotel Information</h2>
    <form action="../Admin/submit_hotel.php" method="post" enctype="multipart/form-data">
        <label for="hotel_name">Hotel Name:</label><br>
        <input type="text" id="hotel_name" name="hotel_name" required><br><br>
        
        <label for="phone_number">Phone Number:</label><br>
        <input type="text" id="phone_number" name="phone_number" required><br><br>
        
        <label for="direction_url">Direction URL:</label><br>
        <input type="text" id="direction_url" name="direction_url" required><br><br>
        
        <label for="image">Choose an image:</label><br>
        <input type="file" id="image" name="image" accept="image/*" required><br><br>
        
        <label for="page_id">Page ID:</label><br>
        <input type="text" id="page_id" name="page_id" required><br><br>
        
        <input type="submit" value="Update Hotel">
    </form>
<br>
</body>
</html>