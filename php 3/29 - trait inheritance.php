<?php
// sebelumnya class dapat menggunakan banyak trait/ trait lebih dari satu

// trait inheritance => trait menggunakan trait lain (mirip interface)
    // namun trait tidak dapat mengambil class dan hanya bisa trait
    // untuk menggunakan trait di trait lain kita menggunakan use
        // seperti penggunaan trait di class
        
    require_once "./26 - trait.php";
    use Data\Traits2\{SayGoodBye, SayHello, HasName};
    
    require_once "./27 - trait overriding.php";
    use CanRun;
    echo "===================================" . PHP_EOL;
        
    trait ALL {
        use SayGoodBye, SayHello, HasName, CanRun {
        // bisa di override
            // hello as private;            
            // goodBye as private;            
        }
    }

    class user {
        use ALL;

        public function run(): void {
            echo "Person {$this->name} is running" . PHP_EOL;
        }
    }

    $person = new user();

    $person->hello("aria");
    $person->goodBye("aria");

    echo PHP_EOL;
    $person->name = "ariafatah ganteng";
    $person->run();