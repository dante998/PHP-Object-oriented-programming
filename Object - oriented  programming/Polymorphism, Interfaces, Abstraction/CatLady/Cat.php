<?php



abstract class Cat{

  private string $breed;

  private string $name;


  protected function __construct(string $breed, string $name) {
    $this->setBreed($breed);
    $this->setName($name);
  }

  public function getBreed(): string {
    return $this->breed;
  }

  private function setBreed(string $breed): void {
    $this->breed = $breed;
  }

  public function getName(): string {
    return $this->name;
  }

  private function setName(string $name): void {
    $this->name = $name;
  }

  public function __toString(): string {
    return $this->getBreed() . " " . $this->getName() ;
  }

}