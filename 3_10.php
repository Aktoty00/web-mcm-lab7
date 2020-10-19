<!DOCTYPE html>
<html>
<head>
 <title>Lab 7 </title>
</head>
<body>
<?php 
$a14= array(49,	5,	-5,	28,	-36,
-41,	-41,	7,	-20,	-33,
98,	64,	32,	11);
$sum = 0;

foreach ($a14 as $key => $value) {
    echo $value . " ";
    if($value > 0) {
        $sum += $value;
    }
}
foreach ($a14 as $key => $value) {
    if($value == 7) {
        array_splice($a14,$key,1,$sum);
    }
}
echo "<br> Sum is: ".$sum."<br>";
foreach($a14 as $i) {
    echo $i . " ";
}
?>
</body>
</html>