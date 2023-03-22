<?php
// Define an interface for creating objects
interface AnimalFactory {
  public function createAnimal();
}

// Define a concrete factory that creates Dog objects
class DogFactory implements AnimalFactory {
  public function createAnimal() {
    return new Dog();
  }
}

// Define a concrete factory that creates Cat objects
class CatFactory implements AnimalFactory {
  public function createAnimal() {
    return new Cat();
  }
}

// Define an interface for the Animal objects
interface Animal {
  public function makeSound();
}

// Define a concrete Dog object
class Dog implements Animal {
  public function makeSound() {
    echo "Dog woof!\n";
  }
}

// Define a concrete Cat object
class Cat implements Animal {
  public function makeSound() {
    echo "Cat meow!\n";
  }
}

// Usage example
$dogFactory = new DogFactory();
$dog = $dogFactory->createAnimal();
$dog->makeSound();

$catFactory = new CatFactory();
$cat = $catFactory->createAnimal();
$cat->makeSound();