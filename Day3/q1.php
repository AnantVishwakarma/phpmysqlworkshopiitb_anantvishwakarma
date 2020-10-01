<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="#" method="POST">
        <label>Enter name of the Student:</label><br>
        <input type="text" name="sname" placeholder="Name"><br>
        <label>Enter marks out of 100:</label><br>
        <input type="number" name="sub1" placeholder="Subject 1"><br>
        <input type="number" name="sub2" placeholder="Subject 2"><br>
        <input type="number" name="sub3" placeholder="Subject 3"><br>
        <input type="number" name="sub4" placeholder="Subject 4"><br>
        <input type="number" name="sub5" placeholder="Subject 5"><br>
        <button type="submit">Submit</button>
    </form>
    <p>
    <?php

    require 'connect.php';

    if(isset($_POST['sname']) && isset($_POST['sub1']) && isset($_POST['sub2']) && isset($_POST['sub3']) && isset($_POST['sub4']) && isset($_POST['sub5']))
    {
        $sname = $_POST['sname'];
        $sub1 = intval($_POST['sub1']);
        $sub2 = intval($_POST['sub2']);
        $sub3 = intval($_POST['sub3']);
        $sub4 = intval($_POST['sub4']);
        $sub5 = intval($_POST['sub5']);
        if($sub1<=100 && $sub2<=100 && $sub3<=100 && $sub4<=100 && $sub5<=100)
        {
            $total_marks = 500;
            $total = $sub1 + $sub2 + $sub3 + $sub4 + $sub5;
            $percent = $total*100/$total_marks;
            echo "Name of Student: " . $sname . "<br>";
            echo "Marks in each subject<br>";
            echo "Subject 1: " . $sub1 . "<br>";
            echo "Subject 2: " . $sub2 . "<br>";
            echo "Subject 3: " . $sub3 . "<br>";
            echo "Subject 4: " . $sub4 . "<br>";
            echo "Subject 5: " . $sub5 . "<br>";
            echo "Total Marks Obtained: " . $total . "<br>";
            echo "Total Marks: 500<br>";
            echo "Percentage: " . $percent . "%<br>";
            
            $stmt = $conn->prepare("INSERT INTO class1(`name`,`sub1`,`sub2`,`sub3`,`sub4`,`sub5`,`total_obtained`,`total_marks`,`percent`) VALUES (?,?,?,?,?,?,?,?,?);");
            $stmt->bind_param("siiiiiiid", $sname, $sub1, $sub2, $sub3, $sub4, $sub5, $total, $total_marks, $percent);
            
            if ($stmt->execute()) {
                echo "<br>Record added successfully";
            } else {
                echo "<br>Failed to insert data: ";
            }
            $stmt->close();
        }
        else echo "Invalid Marks";
    }
    mysqli_close($conn);
    ?>
    
    </p>
</body>
</html>

