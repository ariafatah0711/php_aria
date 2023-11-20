<?php
// overloading => merupakan kemampuan secara dinamis membuat propeties atau function
    // ini mirip meta progamming di bahasa pemograman ruby
    // namun ini berbeda dengan function overloading di bahasa pemograman lain seperti java
    // overloading ini erat kaitanya dengan magic function yang sebelumnya

// propeties overloading => saat kita mengakses propeties
    // maka secara otomatis propeties akan di akses
    // namun jika propeties tersebut tidak tersedia di objectnya maka PHP tidak secara otomatis menjadikan itu error
    // PHP akan melakukan fallback ke magic function
        // dengan demikian kita bisa membuat propeties secara dynamis dengan memanfaatkan magic function
    
    /*
    magic function | keterangan
    __set($name, $value): void | di eksekusi ketika mengubah propeties yang tidak tersedia
    __get($name): mixed | di eksekusi ketika mengakses propeties yang tidak tersedia
    __isset($name): bool | di eksekusi ketika mengecek isset() atau empety() propeties yang tidak tersedia
    __unset($name): void | di eksekusi ketika menggunakan unset() propeties yang tidak tersedia
    */

    class Zero
    {
        private array $propeties = [];

        // di panggil ketika ingin mengakses propeties yang tidak ada
        public function __get($name) {
            echo "Access propety $name" . PHP_EOL;
            // return "contoh";
            return $this->propeties[$name];
        }

        // di panggil ketika set item
        public function __set($name, $value) {
            echo "Set propety $name with value $value" . PHP_EOL . PHP_EOL;
            $this->propeties[$name] = $value;
        }

        // mengecek apakah sudah di set berdasarkan propetiesnya
        public function __isset($name) {
            echo "isset($name) : ";
            return isset($this->propeties[$name]);
        }

        // menghapus propeties nya
        public function __unset($name) {
            echo "unset($name)" . PHP_EOL;
            unset($this->propeties[$name]);
        }
    }

    $zero = new Zero();

    // set => mengirim data
    $zero->firstName = "ariafatah";

    // get => mengambil data
    echo "firstName : $zero->firstName" . PHP_EOL . PHP_EOL; // akan error jika tidak menambahkan overloading/magic function

    // isset => mengecek data propetiesnya sudah ada atau belum
    echo isset($zero->firstName) . PHP_EOL; // 1 => true
    echo isset($zero->middleName) . PHP_EOL; // 0 => false
    echo isset($zero->lastName) . PHP_EOL . PHP_EOL; // 0
    var_dump($zero);

    // unset => menghapus propeties
    unset($zero->firstName); // data firstName

    var_dump($zero);