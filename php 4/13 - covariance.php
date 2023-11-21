<?php
// convariance => memungkinkan kita meng override return function yang di parent
    // dengan return value yang spesifik
    namespace Data;
    abstract class Animal
    {
        public string $name;

        abstract public function run(): void;
    }

    class Cat extends Animal
    {
        public function run(): void {
            echo "Cat $this->name is Running" . PHP_EOL;
        }
    }
    class Dog extends Animal
    {
        public function run(): void {
            echo "Dog $this->name is Running" . PHP_EOL;            
        }
    }

// animal shelter
    interface AnimalShelter
    {
        function adopt(string $name): Animal;
    }

    class DogShelter implements AnimalShelter
    {
        // function adopt(string $name): Animal { // jika tanpa covariant
        function adopt(string $name): Dog { // jika pake covariant jadi lebih kompleks
            $dog = new Dog();
            $dog->name = $name;
            return $dog;
        }
    }

    class CatShelter implements AnimalShelter
    {
        function adopt(string $name): Cat
        {
            $cat = new Cat();
            $cat->name = $name;
            return $cat;
        }
    }

use Data\{Animal, Cat, Dog, AnimalShelter, CatShelter, DogShelter};

$catShelter = new CatShelter();
$cat = $catShelter->adopt("luna");
var_dump($catShelter);
var_dump($cat);

$dogShelter = new DogShelter();
$dog = $dogShelter->adopt("Doggy");
var_dump($dog);