<?php
// inheritance(pewarisan) => merupakan kemampuan sebuah class ke class yang lainya
    // dalam artian kita bisa membuat class parent dan class child
        // class child hanya bisa 1 class parent
        // namun class parent dapat memilki banyak class child
    // saat sebuah class diturunkan, maka semua propeties dan function 
        // yang dimiliki class parent, secara otomatis akan di miliki oleh class child
    
    // menggunakan kata kunci extends lalu diikuti nama classnya
    class Manager
    {
        var string $name;

        // function sayHello(string $name): voip // voip => tidak mengembalikan value
        function sayHello(string $name)
        {
            echo "Hi $name, My name $this->name" . PHP_EOL;
        }
    }

    class VicePresident extends Manager
    {

    }

    $manager = new Manager();
    $manager->name = "ariafatah";
    $manager->sayHello("VicePresident");

    $vp = new VicePresident();
    $vp->name = "ir.soekarno";
    $manager->sayHello("ariafatah");