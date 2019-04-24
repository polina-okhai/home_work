<?php
$name = 'Polina Okhai';
$new_array = [];
$letters_range = range('a', 'h');
$assc_array = [];

$splited_name_array = str_split($name);

foreach($splited_name_array as $key => $value){
  if(isGap($value)){
    unset($splited_name_array[$key]);
  }
  else {
    $random_uc_letter = strtoupper(getArrayRandomElement($letters_range));

    array_push($new_array, $value . $random_uc_letter);
  }
}

$new_string = implode($new_array, ', ');

function getArrayRandomElement($array)
{
  $random_key = array_rand($array);
  return $array[$random_key];
}

function isGap($element){
  return $element == ' ';
}

$length_new_string = count($new_array);

$number_array = range(1, $length_new_string);

foreach ($new_array as $key => $value) {
  $assc_array[$value] = $number_array[$key];
}

$assc_array_lower= array_change_key_case($assc_array, CASE_LOWER);

foreach ($assc_array_lower as $key => $value) {
  $assc_array_lower[$key] = $value + rand(1, 10);
}

var_dump(array_keys($assc_array_lower));
var_dump(array_values($assc_array_lower));
 ?>



 <!-- $assc_array =  array_flip($new_array);  // меняет ключи массива со значением
 //var_dump($assc_array);

 var_dump($assc_array_lower); -->


 <!-- foreach ($number_array as $key => $value) {
   var_dump($key);

   // $key = $new_array;
   // var_dump($key);
   //$assc_array[$key] = $value;

   // array_push($assc_array, $value[$key]);
   //var_dump($assc_array);
 } -->
