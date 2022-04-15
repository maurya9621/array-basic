<?php
$a = array( '1', '2', '3', '4', '5' );
$new_item = '$';
$at = 3;
array_splice( $a, $at, 0, $new_item );
echo "After inserting $ in the array at position 3 is : ";
foreach ($a as $x)
{
echo "$x ";
}
?>
