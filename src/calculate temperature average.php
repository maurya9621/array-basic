<?php
$a=array(78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75,
 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73);
$sum= array_sum($a);
 $arrlength = count($a);
 $avg =($sum/$arrlength);
echo "averager of temperature is: ". round($avg) ;
echo "<br><br>" ;
sort($a);
echo " List of seven lowest temperatures: ";
echo "<br>";
for($x = 0; $x < 7; $x++) {
    echo  $a[$x];
    echo "<br>";
  }
  echo "<br>";
  rsort($a);
  echo " List of seven heighest temperatures: ";
  echo "<br>";
  for($x =0; $x<7; $x++){
    echo  $a[$x]." ";
    echo "<br>";

  }
?>