<?php
function calcSum(...$params) {
  $sum = 0;
  foreach ($params as $arg) {
    $sum += $arg;
  }
  return $sum;
}

echo calcSum(10, 20, 30);