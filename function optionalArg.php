<?php
function printName(string $firstName, string $lastName = NULL): string {
  $name = $firstName;
  if (isset($lastName)) {
    $name .= ' ' . $lastName;
  }
  return $name;
}

echo printName('Ivan') . PHP_EOL;
echo printName('Nikolay', 'Petrov');