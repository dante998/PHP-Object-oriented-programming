<?php
class Person {

  private string $name;

  private float $money;

  private array $products;

  /**
   * @throws \Exception
   */
  public function __construct(string $name, float $money) {
    $this->setName($name);
    $this->setMoney($money);
    $this->products = [];
  }

  /**
   * @throws \Exception
   */
  private function setName($name): void {
    if (empty($name)) {
      throw new Exception("Name cannot be empty.");
    }
    $this->name = $name;
  }
/*
 * @return string
 */
  public function getName(): string {
    return $this->name;
  }

  /**
   * @throws \Exception
   */
  private function setMoney($money): void {
    if ($money < 0) {
      throw new Exception("Money cannot be negative.");
    }
    $this->money = $money;
  }

  /**
   * @return float
   */
  public function getMoney(): float {
    return $this->money;
  }

  /**
   * @return array
   */
  public function getProducts(): array {
    return $this->products;
  }

  private function addProduct(Product $product): void {
    $this->products[] = $product;
  }


  private function canAffordAProduct(Product $product): bool {
    return $product->getCost() > $this->getMoney();
  }

  /**
   * @throws \Exception
   */
  public function buyProduct(Product $product):void {
    if ($this->canAffordAProduct($product)) {
      throw new Exception("{$this->getName()} can`t afford {$product->getName()}".PHP_EOL);
    }
    $this->setMoney($this->getMoney() - $product->getCost());
    $this->addProduct($product);
    echo "{$this->getName()} bought {$product->getName()}".PHP_EOL;
  }


}