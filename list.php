<?php
function smallNumbers(): array {
  return [10, 20, 30, 40, 50];
}

[$a, $b, $c, $d, $e] = smallNumbers();
echo "$a,$b,$c,$d,$e";
