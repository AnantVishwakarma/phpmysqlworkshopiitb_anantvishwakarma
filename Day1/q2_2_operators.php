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
            if($number1 > $number2)echo $number1 . " is greater than " . $number2;
            else if($number1 < $number2)echo $number2 . " is greater than " . $number1;
            else echo $number1 . " is equal to " . $number2;
        }
    ?>
</body>
</html>
