<?php



class Siamese extends Cat {

  private int $earSize;

  public function __construct(string $breed, string $name, int $earSize) {
    parent::__construct($breed, $name);
    $this->setEarSize($earSize);
  }

  public function getEarSize(): int {
    return $this->earSize;
  }

  private function setEarSize(int $earSize): void {
    $this->earSize = $earSize;
  }
  public function __toString():string{
    return parent::__toString(). " " . $this->getEarSize() . PHP_EOL;
  }
}