<?php
class Person {

  private int $id;

  private string $name;

  private int $age;

  public function __construct($id, $name, $age) {
    $this->id = $id;
    $this->name = $name;
    $this->age = $age;
  }


  public function getId(): int {
    return $this->id;
  }
  public function setId($id): void {
    $this->id = $id;
  }
  public function getName(): string {
    return $this->name;
  }
  public function setName($name): void {
    $this->name = $name;
  }
  public function getAge(): int {
    return $this->age;
  }
  public function setAge($age): void {
    $this->age = $age;
  }
}

$people = [];

$input = readline();

while ($input !== "End") {

  $args = explode(" ", $input);
  $name = $args[0];
  $id = $args[1];
  $age = $args[2];

  $person = new Person($id, $name, $age);
  $people[] = $person;

  $input = readline();
}


usort($people, function (Person $p1, Person $p2) {
  $age1 = $p1->getAge();
  $age2 = $p2->getAge();
  return $age1 <=> $age2;
});


foreach ($people as $person) {
  $name = $person->getName();
  $id = $person->getId();
  $age = $person->getAge();

  echo "$name with ID: $id is  $age years old." . PHP_EOL;
}


/*
Georgi 123456 20
Pesho 78911 15
Stefan 524244 10
End
*/







