<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="#" method="GET">
        <label>Enter Sides of a Triangle:</label><br>
        <input type="number" name="a" placeholder="Side 1"><br>
        <input type="number" name="b" placeholder="Side 2"><br>
        <input type="number" name="c" placeholder="Side 3"><br>
        <button type="submit">Submit</button>
    </form>
    <h2>
    <?php

        $a=$_GET['a'];
        $b=$_GET['b'];
        $c=$_GET['c'];

        if($a && $b && $c)
        {
            if($a>0 && $b>0 && $c>0 && ($a+$b>$c) && ($b+$c>$a) && ($a+$c>$b)) //Check if triangle is possible
            {
                if($a**2==$b**2+$c**2 || $b**2==$a**2+$c**2 || $c**2==$a**2+$b**2) 
                    echo "Right Angled Triangle";
                else if($a==$b && $b==$c) 
                    echo "Equilateral Triangle";
                else if($a==$b || $b==$c || $c==$a) 
                    echo "Isosceles Triangle";
                else 
                    echo "Scalene Triangle";
            }
            else echo "Triangle Not Possible";            
        }

    ?>
    </h2>
</body>
</html>

