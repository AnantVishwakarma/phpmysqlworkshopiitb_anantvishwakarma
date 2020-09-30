<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="#" method="GET">
        <input type="number" name="number1" placeholder="Enter first number">
        <input type="number" name="number2" placeholder="Enter second number">
        <button type="submit">Submit</button>
    </form>
    
    <?php
        $number1 = intval($_GET['number1']);
        $number2 = intval($_GET['number2']);
        if (isset($number1) && isset($number2))
        {
            echo "First Number: " . $number1 . ", Second Number: " . $number2 . "<br>";
            echo "Addition = " . ($number1 + $number2) . "<br>";
            echo "Subtraction = " . ($number1 - $number2) . "<br>";
            echo "Multiplication = " . ($number1 * $number2) . "<br>";
            if($number2 == 0) echo "Division = Cannot Divide by zero <br>";
            else echo "Division = " . ($number1 / $number2) . "<br>";
        }
    ?>
</body>
</html>
