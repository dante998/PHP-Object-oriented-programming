<?php
$names = ["Team", "Hello", "Building", "Name", "Logic",];

usort($names, function (string $a, string $b) {
  return strlen($a) - strlen($b);
});

echo implode(PHP_EOL, $names);