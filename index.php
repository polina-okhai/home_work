<?php
$random_number = rand(1, 10);
$number_array = range(1 , $random_number);
$name = 'Polina';
$random_number_2 = rand(10, 20);
$number_array_2 = range($random_number, $random_number_2);
// checkArrayLength($number_array, $name);

$similarity_for_number_array = array_intersect($number_array, $number_array_2);
$difference_for_number_array = array_diff($number_array, $number_array_2);

function checkArrayLength($array, $name) {
$array_length = count($array);
switch (true) {
  case $array_length <= 4:
    array_unshift($array, $name);
    var_dump($array);
    break;
  case $array_length > 7:
  array_push($array, $name);
  var_dump($array);
    break;
  case ($array_length > 4 && $array_length < 7):
  shuffle($array);
  var_dump($array);
    break;
  }
}

  //var_dump($random_number);
 ?>
