<?php
$num_dice = 1000;
$dice = array();
$i = 1;
while ( $i <= $num_dice) {
	$dice[] = random_int(1,6);
	$i++;
}

$bonus_dice = random_int(0,($num_dice-1));

foreach ($dice as $d => $value) {
	if($d==$bonus_dice){
		print "<img src='images/dieRed_".$value.".png'>";
	}else{
		print "<img src='images/dieWhite_".$value.".png'>";
	}
}