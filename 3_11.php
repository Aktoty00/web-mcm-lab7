<!DOCTYPE html>
<html>
<head>
 <title>Lab 7 </title>
</head>
<body>
<?php 
$a17 = array(32,	16,	-99,	132,	-76,
36,	8,	40,	-41,	56,
15,	-45,	100,	61,	-31,
-53,	-71);

$max = max($a17);
$min = min($a17);
$max_index = array_search($max, $a17);
$min_index = array_search($min, $a17);
foreach($a17 as $i) {
    echo $i . " ";
}
echo "<br>";
echo "max is: "  .$max . " position: " .$max_index. "<br>";
echo "min is: " . $min . " position: " .$min_index. "<br>";

?>
</body>
</html>