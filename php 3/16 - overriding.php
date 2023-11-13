<?php
// function overriding => merupakan kemampuan mendeklarasikan ulang function yang sudah ada di parent class nya
    // saat kita membuat membuat object dari class child, function yang di class parent tidak bisa di akses lagi
    // atau disebut juga bikin ulang atau menimpa
    class Manager
    {
        var string $name;

        function sayHello(string $name) {
            echo "Hi $name my name is Manager $this->name" . PHP_EOL;
        }
    }

    class vicePresident extends Manager
    {
        function sayHello(string $name) {
            echo "Hi $name my name is VP $this->name" . PHP_EOL;
        }
        // saat propeties/function di ubah isinya maka otomatis function yang lama akan tidak akan terpanggil
    }

    $manager = new Manager();
    $manager->name = "malik";
    $manager->sayHello("aria");
    
    $vp = new VicePresident();
    $vp->name = "aria";
    $vp->sayHello("malik"); // dia akan mengambil function sayHello VicePresident