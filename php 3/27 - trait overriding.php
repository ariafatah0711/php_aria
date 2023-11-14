<?php
// selain konkrit function di trait kita juga bisa menambahkan abtrak function
// trait overriding => jika terdapat abtrak function di trait, 
    // maka secara otomatis function tersebut harus di override di class yang menggunakan trait tersebut
    // overriding adalah sebuah mendeklarasikan function ulang(menimpa)
    require_once "./26 - trait.php";

    // use Data\Traits1\{SayHello, SayGoodBye};
    use Data\Traits2\{SayGoodBye, SayHello, HasName};

    trait CanRun
    {
        public abstract function run(): void;
    }

    class Person
    {
        use SayGoodBye, SayHello, HasName, CanRun;

        // public abstract function run(): void { // akan error
        public function run(): void {
            echo "Person {$this->name} is running" . PHP_EOL;
        }
    }

    echo PHP_EOL . PHP_EOL;
    $person = new Person();
    $person->hello("aria");
    $person->goodBye("aria");

    $person->name = "aria";
    var_dump($person);

    $person->run();
?>

<?php
// jika sebuah class memilki parent class yang memilki function yang sama dengan function di trait
    // maka secara otomatis akan meng-override function tersebut
    // namun jika kita membuat function yang sama di class nya, maka secara otomatis kita akan
        // meng-override function di trait
    // sehingga posisinya seperti ini parentClass = Override bye=>ChildClass

    class ParentPerson
    {
        public function goodBye(?string $name): void {
            echo "Good Bye In Person" . PHP_EOL;
        }
    }

    class PersonTwo extends ParentPerson
    {
        use SayGoodBye, SayHello, HasName, CanRun;

        public function run(): void {
            echo "Person {$this->name} is running" . PHP_EOL;
        }

        public function hello(?string $name): void {
            echo "Hello In Person" . PHP_EOL;
        }
    }

    echo PHP_EOL . PHP_EOL;
    $person = new PersonTwo();
    $person->hello("aria");
    $person->goodBye("aria");

    $person->name = "aria";
    var_dump($person);

    $person->run();
    // outputnya menjadi hello in person yang artinya jika kita nge include sebuah trait namun
    // di function memilki function tersebut maka dia akan mengoverride trait tersebut

    // namun jika class memilki parent dan functionya sama dengan si trait
        // function parent akan di override oleh trait

    // jadi class > trait > parent
        // paret class = override bye trait
        // trait = pverride bye childClass

    // karena saat class di buat dia meng extends terlebih dahulu
        // lalu dia memanggil si trait menggunakan use
        // dan classnya akan membuat function baru yang mengoveriding trait dan parentClass
?>

<?php
// selain itu di trait kita juga bisa melakukan override visibility function yang terdapat di trait
    // namun untuk melakukan ini tidak perlu membuat function baru di class, kita gunakan secara sederhana ketika menggunakan trait nya
    class PersonThree
    {
        use SayGoodBye, SayHello, HasName, CanRun {
            hello as private; // function hello akan di privat yang membuat tidak bisa dipanggil dengan object
            goodBye as private;
        }
        
        public function run(): void {
            echo "Person {$this->name} is running" . PHP_EOL;
        }

        // good bye tidak dapat di panggil karena dia ada di trait dan di buat secara private

        // hello akan bisa tetap di panggil karena dia di meng override trait
        public function hello(?string $name): void {
            echo "Hello In Person" . PHP_EOL;
        }
    }

    echo PHP_EOL . PHP_EOL;
    $person = new PersonThree();

    $person->hello("aria"); // bisa karena telah di ovverride(deklarasikan ulang)
    // $person->goodBye("aria"); // error