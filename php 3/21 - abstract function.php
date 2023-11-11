<?php
// abstract function => membuat abstract function yang harus di override di class child
    // kita tidak boleh membuat block di function untuk function abtract,
        // karena nantinya block functionya akan di buat di class turunanya
    // artinya function wajib di override di class child
    // dan abstract function tidak boleh memiliki access modifier private
    // dan juga abstract function class parentnya harus merupakan abstract juga

    namespace Data;
    abstract class Animal
    {
        public string $name;

        public abstract function run();
        // {
            // tidak boleh ada block function
        // }
    }
    
    class Cat extends Animal
    {
        // wajib jika tidak akan error
        public function run() {
            echo "Cat $this->name is running" . PHP_EOL;
        }
    }

    class Dog extends Animal
    {
        public function run(string $name = "cat") { // bisa menambahkan arguement
            echo "Dog $this->name is running with $name" . PHP_EOL;
        }
    }

    use Data\{Animal, Cat, Dog};
    $cat = new Cat();
    $cat->name = "lena";
    $cat->run();
    
    $dog = new Dog();
    $dog->name = "dogy";
    $dog->run("lena"); // bisa menambahkan argument