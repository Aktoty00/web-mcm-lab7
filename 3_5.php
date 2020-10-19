<!DOCTYPE html>
<html>
<head>
 <title>Lab 7 </title>
</head>
<body>
<?php 
$a15 = array(49,	5,	-5,	28,	-36,
-41,	-41,	70,	-20,	-33,
98,	64,	32,	11,	91);
$sum = 0;

foreach ($a15 as $key => $value) {
    echo $value . " ";
    if($value > 0) {
        $sum += $value;
    }
}
foreach ($a15 as $key => $value) {
    if($value == 5) {
        array_splice($a15,$key,1,$sum);
    }
}
echo "<br> Sum is: ".$sum."<br>";
foreach($a15 as $i) {
    echo $i . " ";
}
?>
</body>
</html>