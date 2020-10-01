<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="#" method="post">
    <input type="text" name="str" placeholder="Enter a String">
    <button type="submit">Submit</button>
</form>

<?php

if (isset($_POST['str']))
{
    $str = $_POST['str'];
    echo "String: " . $str;
    echo "<br>Number of characters in the string: " . strlen($str);
    echo "<br>String to Array: ";
    print_r(explode(" ", $str));
    echo "<br>Reversing the String: " . strrev($str);
    echo "<br>To lowercase: " . strtolower($str);
    echo "<br>To UPPERCASE: " . strtoupper($str);
    echo "<br>Replace Substring: " . substr_replace($str, "hello", 2, 7);
}


?>
</body>
</html>