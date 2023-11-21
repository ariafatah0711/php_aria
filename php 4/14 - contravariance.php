<?php
// contravariance(kebalikan covariant) => memperbolehkan sebuah child class
    // untuk membuat function argument yang lebih spesifik
    // dibandingkan parentnya
    
// food
    class Food
    {

    }

    class AnimalFood extends Food
    {

    }

// data sebelumnya namun ditambahkan function eat
    abstract class Animal
    {
        public string $name;

        abstract public function run(): void;
        abstract public function eat(AnimalFood $animalFood): void;
    }

    class Cat extends Animal
    {
        public function run(): void {
            echo "Cat $this->name is Running" . PHP_EOL;
        }

        public function eat(AnimalFood $animalFood): void {
            echo "Cat is eating" . PHP_EOL;
        }
    }
    class Dog extends Animal
    {
        public function run(): void {
            echo "Dog $this->name is Running" . PHP_EOL;            
        }

        public function eat(Food $animalfood): void {
            echo "Dog is eating" . PHP_EOL;
        }
    }

    // require_once "./13 - covariance.php";
    // use Data\{AnimalShelter, CatShelter, DogShelter};

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

    $catShelter = new CatShelter();
    $cat = $catShelter->adopt("luna");
    $cat->eat(new AnimalFood());

    $dogShelter = new DogShelter();
    $dog = $dogShelter->adopt("luna");
    $dog->eat(new Food());