<?php
class Product {

  private string $name;

  private float $cost;

  /**
   * @param string $name
   * @param float $cost
   */
  public function __construct(string $name, float $cost) {
    $this->setName($name);
    $this->setCost($cost);
  }

  /**
   * @return string
   */
  public function getName(): string {
    return $this->name;
  }

  /**
   * @param string $name
   */
  private function setName(string $name): void {
    $this->name = $name;
  }

  /**
   * @return float
   */
  public function getCost(): float {
    return $this->cost;
  }

  /**
   * @param float $cost
   */
  private function setCost(float $cost): void {
    $this->cost = $cost;
  }
}