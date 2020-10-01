<?php

require 'connect.php';

$sub5=0;
$sub5updated=99;
$total_obtained=0;
$percent=0;

$result = $conn->query("SELECT * FROM class1 WHERE `name`='Rohan'");
while($row = $result->fetch_assoc())
{
    $sub5 = $row['sub5'];
    $total_obtained = $row['total_obtained'];
}

$total_obtained = $total_obtained - $sub5 + $sub5updated;
$percent = $total_obtained / 5;

$stmt = $conn->prepare("UPDATE class1 SET `sub5`=?, `total_obtained`=?, `percent`=? WHERE `name`='Rohan'");
$stmt->bind_param("iid", $sub5updated, $total_obtained, $percent);
if ($stmt->execute()) {
    echo "<br>Record Updated Successfully<br>";
} else {
    echo "<br>Failed to update record<br>";
}

$stmt->close();
mysqli_close($conn);

?>