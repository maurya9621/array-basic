<?php
function odd_one_out($var)
  {
  return($var & 1);
  }
$a1=array(1,3,2,3,4);
print_r(array_filter($a1,"odd_one_out"));
?>