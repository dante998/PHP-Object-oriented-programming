<?php
$input = readline();

while ($input !== "END") {
  $isPalindrome = isPalindrome($input);
  $input = readline();
}

function isPalindrome($input): void {
  if ($input === strrev($input)) {
    echo "true" . PHP_EOL;
  }
  else {
    echo "false" . PHP_EOL;
  }
}