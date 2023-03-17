<?php

spl_autoload_register(function ($class) {
  require_once $class . ".php";
});


class Main {

  /**
   * @var array
   */
  private array $cats;

  public function run(): void {
    $this->readData();
  }

  public function findCatByName(string $name): ?Cat {
    if (array_key_exists($name, $this->cats)) {
      return $this->cats[$name];
    }
    return null;
  }


  const PATTERN = "/\\s+/";

  const INPUT_END_COMMAND = "End";


  private function readData(): void {
    $input = readline();
    while ($input !== self::INPUT_END_COMMAND) {
      $data = preg_split(self::PATTERN, $input, -1, PREG_SPLIT_NO_EMPTY);

      $breed = $data[0];
      $name = $data[1];
      $param = intval($data[2]);

      $cat = NULL;

      try {
        $this->cats[$name] = CatFactory::create($breed, $name, $param);
      } catch (\Exception $ex) {
        echo $ex->getMessage();
      }


      $input = readline();
    }

$searchingName = readline();
$cat =  $this->findCatByName($searchingName);
    echo  $cat;
  }
}

$main = new Main();
$main ->run();




/*
A cat class that shares characteristics with its descendants from the cat genus, namely cat breed classes
that inherit the abstract cat class and add one
additional characteristic each.
 */

