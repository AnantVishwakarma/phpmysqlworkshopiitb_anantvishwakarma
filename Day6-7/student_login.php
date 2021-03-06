
<?php

include('connect.php');

session_start();


if(isset($_SESSION['email']) && $_SESSION['type']=="student")
{
    header("Location: student_dashboard.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Login</title>
</head>
<body>
    <form action="student_login.php" method="POST">
        <input type="text" name="email" placeholder="Email" required><br>
        <input type="password" name="password" placeholder="Password" required><br>
        <button type="submit">Log In</button>
    </form>

    <?php
    if(isset($_POST['email']) && isset($_POST['password']))
    {
        $email = $_POST['email'];
        $password = $_POST['password'];
        $stmt=$conn->prepare("SELECT * FROM student WHERE email=?;");
        $stmt->bind_param("s", $email);
        if($stmt->execute())
        {            
            $result = $stmt->get_result();
            
            if($result->num_rows == 0) //Student doesn't exist
            {
                echo "Student doesn't exist<br><a href='student_register.php'>Click here</a> to Register.";
                die();
            }

            $db_email = "";
            $db_hashedpassword = "";

            while($row = $result->fetch_assoc())
            {
                $db_email = $row['email'];
                $db_hashedpassword = $row['password'];
            }
            
            if(md5($password) != $db_hashedpassword) //Incorrect Password
            {
                echo "Incorrect Password. Please Try Again.";
            }
            else //Successful Login
            {
                $_SESSION['email'] = $email;
                $_SESSION['type'] = "student";
                header("Location: student_dashboard.php");
            }
        }
        else
        {
            die("Error Occured: " . $stmt->error);
        }
        $stmt->close();
        $conn->close();
    }

    ?>
</body>
</html>


