<?php
// jikalau constructor adalah function yang akan dipanggil ketika object dibuat

// destructor => merupakan function yang akan di panggil ketika object dihapus dari memory
    // biasanya ketika object tersebut sudah tidak lagi digunakan, atau ketika apk akan mati
    // menggunakan namaFungsi __destruct()
    // khusus destructor kita tidak bisa menggunakan argument
    // sangat cocok digunakan saat menutup koneksi ke database/proses menulis file
    /*
    function __destruct() {
        echo "Object Person {$this->name} is destroyed" . PHP_EOL;
    }
    */

    class Person
    {
        // const
        const AUTHOR = "ariafatah";

        // var
        var string $name;
        var ?string $address = null;
        var ?string $country = "indonesia";

        // constructor
        public function __construct(string $name, ?string $address) {
            $this->name = $name;
            $this->address = $address;
        }

        // function
        function sayHello(?string $name) {
            if (is_null($name)) {
                echo "Hi My name is {$this->name}" . PHP_EOL;
            } else {
                echo "Hello $name My name is {$this->name}" . PHP_EOL;
            }
        }

        // destructor
        function __destruct() {
            echo "Object Person {$this->name} is destroyed" . PHP_EOL;
        }
    }

    $aria = new Person("aria", "jakarta");
    $malik = new Person("malik", "depok");

    echo "Progam selesai" . PHP_EOL . PHP_EOL;