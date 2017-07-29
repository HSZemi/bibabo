<?php 
// bridge.php?date=2017-01-01

function validateDate($date)
{
    $d = DateTime::createFromFormat('Y-m-d', $date);
    return $d && $d->format('Y-m-d') === $date;
}

if(isset($_GET['day']) && validateDate($_GET['day'])){
	print(file_get_contents("https://temilun.ulb.uni-bonn.de/ws/apVIZ/_wlanapdata.php?day=".$_GET['day']));
} else {
	print("null");
}
?>