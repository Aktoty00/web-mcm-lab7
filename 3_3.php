<!DOCTYPE html>
<html>
<head>
 <title>Lab 7 </title>
</head>
<body>
<?php 
$a15 = array(49,	57,	-5,	28,	-36,
-41,	-41,	70,	-20,	-33,
98,	64,	32,	11,	91);

$odd = array();
foreach($a15 as $a) {
    echo $a . " ";
}
echo "<br>";
foreach ($a15 as $key => $value) {
    if ($key % 2 == 1) {
        $odd[] = $value;
    }
}
echo "Odd indexed numbers: <br>";

foreach($odd as $i) {
    echo $i . " ";
}
echo "<br>";
$min = min($odd);

echo "min is: " . $min ;

?>
</body>
</html>