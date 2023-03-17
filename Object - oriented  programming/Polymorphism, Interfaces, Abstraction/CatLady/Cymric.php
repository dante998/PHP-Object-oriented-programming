<?php

class Cymric extends Cat {

  private int $furLength;

  public function __construct(string $breed, string $name, int $furLength) {
    parent::__construct($breed, $name);
    $this->setFurLength($furLength);
  }


  public function getFurLength(): int {
    return $this->furLength;
  }


  protected function setFurLength(int $furLength): void {
    $this->furLength = $furLength;
  }

  public function __toString(): string {
    return parent::__toString() . " " . $this->getFurLength().PHP_EOL;
  }

}