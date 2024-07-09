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
<form action="../updateevent.php" method="post" enctype="multipart/form-data">
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
<br>
</body>
</html>

