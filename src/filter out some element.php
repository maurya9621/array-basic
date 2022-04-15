<?php
    $array = array('c1' => 'Red', 'c2' => 'Green', 'c3' => 'White', 'c4' => 'Black');
     $disallowed = array('c2' ,'c4');
  foreach($disallowed as $key)
{
    unset($array[$key]);   
}
   print_r($array);
?>


