<?php

class Student {
  private string $firstName;
  private string $lastName;
  private int $age;
  private string $city;

  public function setFirstName($firstName): void {
    $this->firstName = $firstName;
  }

  public function setLastName($lastName): void {
    $this->lastName = $lastName;
  }

  public function setAge($age): void {
    $this->age = $age;
  }

  public function setCity($city): void {
    $this->city = $city;
  }



  public function getFirstName(): string {
    return $this->firstName;
  }

  public function getLastName(): string {
    return $this->lastName;
  }

  public function getAge(): int {
    return $this->age;
  }
  public function getCity(): string {
    return $this->city;
  }
}


$input = readline();

$students = [];

while ($input !== 'end') {

  $fields = explode(' ', $input);
  $newStudent = new Student();

  $newStudent->setFirstName($fields[0]);
  $newStudent->setLastName($fields[1]);
  $newStudent->setAge($fields[2]);
  $newStudent->setCity($fields[3]);

  $students[] = $newStudent;

  $input = readline();
}


$city = readline();
foreach ($students as $student) {
  if ($city == $student->getCity()) {
    echo $student->getFirstName() . ' ' . $student->getLastName() . ' is ' . $student->getAge() . ' years old. ' . PHP_EOL;
  }
}

//print_r($students);