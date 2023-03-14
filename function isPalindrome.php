<?php
function isPalindrome($str): bool {
  for ($i = 0; $i < strlen($str) / 2; $i++)
    if ($str[$i] != $str[strlen($str) - $i - 1])
      return FALSE;
  return TRUE;
}

echo isPalindrome("fgf");