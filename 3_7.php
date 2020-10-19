<!DOCTYPE html>
<html>
<head>
 <title>Lab 7 </title>
</head>
<body>
<?php 
$a20 = array(32,	16,	-99,	132,	-76,
36,	8,	40,	-41,	56,
15,	-45,	100,	61,	-31,
-53,	-71,	-13,	3,	21);

$max = max($a20);
$max_index = array_search($max, $a20);
foreach($a20 as $i) {
    echo $i . " ";
}
echo "<br>";
echo "max is: "  .$max . " position: " .$max_index. "<br>";

?>
</body>
</html>