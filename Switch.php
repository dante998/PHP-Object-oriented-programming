<?php
$country = readline();
$age = readline();

switch (TRUE) {
  case($country == 'Canada' && $age > 20):
    echo "English and French";
    break;

  case($country == 'Canada' && $age <= 20):
    echo "English";
    break;


  default:
    echo "Speechless";
    break;
}