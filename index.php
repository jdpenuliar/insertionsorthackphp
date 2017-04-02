<?php

function insert($array, $rightIndex, $value) {
  for($x = $rightIndex; $x >= 0 && $array[$x] > $value; $x--) {
    $array[$x+1] = $array[$x];
  }
  $array[$x + 1] = $value;
  return $array;
}
function insertionSort ($array) {
  for($x = 1; $x < count($array); $x++) {
    $array = insert($array, $x - 1, $array[$x]);
  }
  return $array;
}


$arr = array(22, 11, 99, 88, 9, 7, 42);
$result = insertionSort($arr);
echo(microtime());
echo "<br>";
var_dump($result);
?>
