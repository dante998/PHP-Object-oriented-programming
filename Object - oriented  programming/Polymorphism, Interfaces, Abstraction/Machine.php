<?php


interface WriterInterface {

  /**
   * @param string $text
   *
   * @return void
   *
   * @throws \Exception
   */
  public function writeText(string $text): void;

  public function useInk(int $quantity): void;

  public function getInk(): int;

}

interface ElectricalDeviceInterface {

  public function getUsage(): int;

  public function isPlugged(): bool;

  public function plug(): void;

}

interface Consumable {

  public function isAvailable(): bool;

}

class Printer implements WriterInterface, ElectricalDeviceInterface {

  private int $ink;

  private bool $isPlugged;


  public function __construct($ink) {
    $this->ink = $ink;
    $this->isPlugged = TRUE;
  }

  public function writeText(string $text): void {

    if ($this->getInk() > 0) {
      $this->useInk(strlen($text) * 5);
      echo $text;
    }
    throw new Exception("Not enough ink.");
  }

  public function useInk(int $quantity): void {
    $this->ink -= $quantity;
  }

  public function getInk(): int {
    return $this->ink;
  }

  public function getUsage(): int {
    return 300;
  }

  public function isPlugged(): bool {
    return $this->isPlugged;
  }

  public function plug(): void {
    $this->isPlugged = TRUE;
  }

}

class Pen implements WriterInterface, Consumable {

  private int $ink;

  /**
   * @param $ink
   */

  public function __construct($ink) {
    $this->ink = $ink;
  }

  public function writeText(string $text): void {
    if ($this->getInk() > 0) {
      $this->useInk(strlen($text));
      echo $text;
    }
    throw new Exception("Not enough ink.");
  }

  public function useInk(int $quantity): void {
    $this->ink -= $quantity;
  }

  public function getInk(): int {
    return $this->ink;
  }

  public function isAvailable(): bool {
    return TRUE;
  }
}



function plug(ElectricalDeviceInterface $device):void {
  if (!$device->isPlugged()) {
    $device->plug();
  }
}

function rechargeInk(WriterInterface $writer):void {
  if ($writer->getInk() < 5) {
    $writer->useInk(-100);
  }
}


