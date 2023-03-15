<?php

$date = readline();
$myDate = new DateTime($date);
echo $myDate->format('l');