<?php
// constructor overiding => contructor sama seperti function
    // maka kita nisa deklarasikan ulang di class child nya
    // di PHP kita bisa mengoveride function dengan arguments yang berbeda namun sangat tidak disarankan
    // jika kita melakukan override dengan argument yang berbeda, maka PHP akan menamiplkan peringatan
    // namun berbeda dengan constructor overiding, kita boleh meng-override dengan mengubah argument nya.
        // namun di rekomendasikan untuk memanggil parent constructornya
    class Manager
    {
        var string $name;
        var string $title;

        public function __construct(?string $name = "", ?string $title = "Manager") {
            $this->name = $name;
            $this->title = $title;
        }

        function sayHello(string $name) {
            echo "Hi $name my name is Manager $this->name" . PHP_EOL;
        }
    }

    class vicePresident extends Manager
    {
        // function sayHello(string $name) {

        public function __construct(?string $name = "") { // override jadi cuma 1 argument
            // parent:: berfungsi agar function sebelumnya dapat di ambil

            // tidak wajib
            parent::__construct($name, "Vice President");
        }

        function sayHello(string $name) {
            echo "Hi $name my name is VP $this->name" . PHP_EOL;
        }
    }
    
    $manager = new Manager();
    $manager->name = "malik";
    $manager->sayHello("aria");
    
    $vp = new VicePresident();
    $vp->name = "aria";
    $vp->sayHello("malik");
