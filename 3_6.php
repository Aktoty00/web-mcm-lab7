<!DOCTYPE html>
<html>
<head>
 <title>Lab 7 </title>
</head>
<body>
<?php 
$a12 = array(49,	57,	-5,	28,	-36,
-41,	-41,	70,	-20,	-33,
98,	64);

$sum = 0;
foreach($a12 as $i) {
    echo $i . " ";
    if($i < 0) {
        $sum += $i;
    }
}
echo "<br>";
echo "sum is: "  .$sum . "<br>";
?>
</body>
</html>