<?php

class Citizen implements Human {
  private string $name;
  private int $age;


  public function getName(): string {
    return $this->name;
  }

  public function getAge(): int {
    return $this->age;
  }


  public function __construct(string $name, int $age) {
    $this->setName($name);
    $this->setAge($age);
  }

  public function setName(string $name): void {
    $this->name = $name;
  }

  public function setAge(int $age): void {
    $this->age = $age;
  }

  public function __toString(): string {
   return "{$this->getName()}\n{$this->getAge()}";
  }
}