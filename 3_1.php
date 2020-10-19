<!DOCTYPE html>
<html>
<head>
 <title>Lab 7 </title>
</head>
<body>
<?php 
$a10 = array(26, -12, 25, 74, -35, 8, 21, -13, 4, 7);

$sum = 0;
$count = 0;
foreach($a10 as $i) {
    echo $i . " ";
    if($i > 0) {
        $sum += $i;
        $count++;
    }
}
echo "<br>";
echo "sum is: "  .$sum . "<br>";
echo "count is: " . $count;
?>
</body>
</html>