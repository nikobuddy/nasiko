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
<form method="post" action="../update_gallery.php" enctype="multipart/form-data">
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
</body>
</html>