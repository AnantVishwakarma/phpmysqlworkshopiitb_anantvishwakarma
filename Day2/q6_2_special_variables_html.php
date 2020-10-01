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

    $sname=$_POST['sname'];
    $sub1=$_POST['sub1'];
    $sub2=$_POST['sub2'];
    $sub3=$_POST['sub3'];
    $sub4=$_POST['sub4'];
    $sub5=$_POST['sub5'];

    if($sname && $sub1 && $sub2 && $sub3 && $sub4 && $sub5)
    {
        if($sub1<=100 && $sub2<=100 && $sub3<=100 && $sub4<=100 && $sub5<=100)
        {
            $total = $sub1 + $sub2 + $sub3 + $sub4 + $sub5;
            echo "Name of Student: " . $sname . "<br>";
            echo "Marks in each subject<br>";
            echo "Subject 1: " . $sub1 . "<br>";
            echo "Subject 2: " . $sub2 . "<br>";
            echo "Subject 3: " . $sub3 . "<br>";
            echo "Subject 4: " . $sub4 . "<br>";
            echo "Subject 5: " . $sub5 . "<br>";
            echo "Total Marks Obtained: " . $total . "<br>";
            echo "Total Marks: 500<br>";
            echo "Percentage: " . $total*100/500 . "%<br>";
        }
        else echo "Invalid Marks";
    }
    ?>
    
    </p>
</body>
</html>

