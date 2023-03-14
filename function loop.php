<?php

function loop($n, $customEcho): void {
  for ($i = 0; $i < $n; $i++) {
    echo $customEcho . $i . PHP_EOL;
  }
}
loop(5, 'My fav number is ');