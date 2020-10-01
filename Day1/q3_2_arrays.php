<?php

$mat1 = array(array(1,2), array(3,4));
$mat2 = array(array(5,6), array(7,8));

$matadd=array();

echo "Matrix Addition:<br>";
for($r=0;$r<2;$r++)
{
    for($c=0;$c<2;$c++)
    {
        $matadd[$r][$c] = $mat1[$r][$c] + $mat2[$r][$c];
        echo $matadd[$r][$c] . " ";
    }
    echo "<br>";
}

?>