<!DOCTYPE html>
<html>
<head>
 <title>Lab 7 </title>
</head>
<body>
<?php 
$a17 = array(-87, -159, 45, -17,	81, -74, 35);

$max_index = array_search(max($a17), $a17);
$min_index = array_search(min($a17), $a17);
$sub_array = array();
$sum = 0;
$count = 0;
foreach($a17 as $i) {
    echo $i . " ";
}
echo "<br>";
echo " position: " .$min_index. "<br>";
echo " position: " .$max_index. "<br>";

foreach ($a17 as $key => $value) {
    if ($key >=$min_index && $key <= $max_index) {
        $sub_array[] = $value;
    }
}
foreach($sub_array as $i) {
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