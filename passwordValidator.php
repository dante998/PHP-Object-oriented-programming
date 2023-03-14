<?php
$password = readline();

if (!hasValidLength($password)) {
  echo "Password must be between 6 and 10 characters!" . PHP_EOL;
}

if (!hasValidContent($password)) {
  echo "Password must consist only of letter and digits!" . PHP_EOL;
}

if (!hasEnoughDigits($password)) {
  echo "Password must have at least 2 digits!" . PHP_EOL;
}

if (hasValidLength($password) && hasValidContent($password) && hasEnoughDigits($password)) {
  echo "Password is valid!";
}

function hasValidLength(string $password): bool {
  if (strlen($password) < 6 || strlen($password) > 10) {

    return FALSE;
  }
  return TRUE;
}

function hasValidContent(string $password): bool {
  if (!ctype_alnum($password)) {

    return FALSE;
  }
  return TRUE;
}

function hasEnoughDigits(string $password): bool {
  $digits = 0;
  for ($i = 0; $i < strlen($password); $i++) {
    $current = $password[$i];
    if (ctype_digit($current)) {
      $digits++;
    }
  }
  if ($digits < 2) {
    return FALSE;
  }
  return TRUE;
}

