<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="#" method="GET">
        <input type="text" name="letter" placeholder="Enter a letter">
        <button type="submit">Submit</button>
    </form>
    
    <?php
        $letter = $_GET['letter'];
        if (isset($letter))
        {
            switch($letter)
            {
                case 'a':
                case 'A':
                    echo "A";
                break;
                case 'e':
                case 'E':            
                    echo "e";
                break;
                case 'i':
                case 'I':
                    echo "I";
                break;
                case 'o':
                case 'O':
                    echo "O";
                break;
                case 'u':
                case 'U':
                    echo "U";
                break;
                default:
                echo "It is a Consonant";
            }
        }
    ?>
</body>
</html>
