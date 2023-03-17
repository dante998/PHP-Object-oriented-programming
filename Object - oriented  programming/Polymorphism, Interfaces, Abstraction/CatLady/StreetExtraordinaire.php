<?php



class StreetExtraordinaire extends Cat {

  private int $decibelsOfMeows;

  public function __construct(string $breed, string $name, int $decibelsOfMeows) {
    parent::__construct($breed, $name);
    $this->setDecibelsOfMeows($decibelsOfMeows);
  }

  public function getDecibelsOfMeows(): int {
    return $this->decibelsOfMeows;
  }

  protected function setDecibelsOfMeows(int $decibelsOfMeows): void {
    $this->decibelsOfMeows = $decibelsOfMeows;
  }
public function __toString(): string {
  return parent::__toString() . " " . $this->getDecibelsOfMeows();
}
}