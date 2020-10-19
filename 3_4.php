<!DOCTYPE html>
<html>
<head>
 <title>Lab 7 </title>
</head>
<body>
<?php 
$a30 = array(-87, 96,	-45,	-197,	41,
-74,	81,	36,	26,	-94,
-98,	-66,	22,	-44,	-39,
8,	-17,	132,	-59,	8,
10,	23,	-57,	-38,	82,
39,	-75,	22,	-28,	-53);

$max_index = array_search(max($a30), $a30);
$min_index = array_search(min($a30), $a30);
$sub_array = array();
$sum = 0;
foreach($a30 as $i) {
    echo $i . " ";
}
echo "<br>";
echo " position: " .$min_index. "<br>";
echo " position: " .$max_index. "<br>";

foreach ($a30 as $key => $value) {
    if ($key >=$min_index && $key <= $max_index) {
        $sub_array[] = $value;
    }
}
foreach($sub_array as $i) {
    echo $i . " ";
    if($i > 0) {
        $sum += $i;
    }
}
echo "<br> sum of positive numbers: " .$sum;

?>
</body>
</html>