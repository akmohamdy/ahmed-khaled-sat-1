<?php 

$x = 3 ; $y=$x++; //x=4 y=3
$y+= ++$x; // x=5 y-=8
 
if ($y == 7) {
 	$x++;
 	echo $x ."<br>";
 }
else if ($y == 8){ //y=8
 	$x--; //x=4
 	echo $x ."<br>";
	}
else if ($y == 9) {
	$x+=2;
	echo $x ."<br>";
}
else { 
	$x= 0;
	echo $x ."<br>"; }

//comment
?>