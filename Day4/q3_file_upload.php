<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Upload a file</h2>
    <form method="POST" action="#" enctype="multipart/form-data">
        <input type="file" name="myFile"><br><br>
        <button type="submit">Upload File</button>
    </form>

    <?php

    if(isset($_FILES['myFile']))
    {
        $file = $_FILES['myFile'];
        echo "<h3>Properties of the file</h3>";
        echo "Name: " . $file['name'] . "<br>";
        echo "Type: " . $file['type'] . "<br>";
        echo "Size: " . $file['size'] . " bytes<br>";
        echo "Temp Directory: " . $file['tmp_name'] . "<br>";
    }

    ?>
</body>
</html>