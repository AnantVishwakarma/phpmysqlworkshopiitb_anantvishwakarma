<?php

$count = file_get_contents("count.txt");
$count++;

echo "Visitor Count = " . $count;

$file=fopen("count.txt","w");
fwrite($file,$count);
fclose($file);

?>