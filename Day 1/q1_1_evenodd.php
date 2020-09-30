<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="#" method="GET">
        <input type="number" name="number" placeholder="Enter a number">
        <button type="submit">Submit</button>
    </form>
    
    <?php
        $number = intval($_GET['number']);
        if (isset($number))
        {
            if($number % 2 == 0)echo "The number " . $number . " is an even number.";
            else echo "The number " . $number . " is an odd number.";
        }
    ?>
</body>
</html>
