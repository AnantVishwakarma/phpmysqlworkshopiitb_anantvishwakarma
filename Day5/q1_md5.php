<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="#" method="POST">
        <input type="text" name="username" placeholder="Username" required>
        <input type="password" name="password" placeholder="Password" required>
        <button type="submit">Submit</button>
    </form>

    <?php

    include('connect.php');

    if(isset($_POST['username']) && isset($_POST['password']))
    {
        $username = $_POST["username"];
        $password = md5($_POST["password"]);
        $stmt = $conn->prepare("INSERT INTO users(`username`, `password`) VALUES (?,?)");
        $stmt->bind_param("ss", $username, $password);
        if ($stmt->execute()) {
            echo "Record added";
        } else {
            echo "Error adding record";
        }
    }

    ?>

</body>
</html>
