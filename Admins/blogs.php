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
<h2>Add New Place</h2>
    <form action="../upload.php" method="post" enctype="multipart/form-data">
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

<br>
</body>
</html>