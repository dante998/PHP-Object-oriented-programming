<?php

spl_autoload_register(function ($class) {
  require_once $class . ".php";
});


class Main {
  public function run(): void {
    $this->readData();
  }


  public function readData(): void {
    $name = readline();
    $age = intval(readline());

    $citizen = new Citizen($name, $age);
    echo $citizen;
  }
}

$main = new Main();
$main->run();