<?php
// function argument/paramter => mengirim sebuah informasi ke function yang ingin kita panggil
    // argument di tempatkan di dalam () function yang kita buat
    // membuatnya dengan cara
        // function namafungsi($parameter1, $paramter2) {}
    // argument dapat dibuat lebih dari satu
    function sayHello($name, $kelas) {
        echo "hello $name $kelas" . PHP_EOL; // name diambil dari value paramter saat dipanggil
    };

    sayHello("aria", "10.TKJ.4"); // maka nanti $name akan berisi data aria
    sayHello("eko", "11.TKJ.1");
    sayHello("fadly", "10.TKJ.2");
    echo "\n";
    
// default argument value => fitur ini memungkinkan kita saat memanggil tidak perlu memasukan datanya
    // kesalahan default argument value => jika argumentlebih dari satu
        // dan kita menyimpan value di paramter di awal maka itu kurang berguna
        // dan disarankan menaruhnya di belakang
    function sayHi($firstName = "Anonymous", $lastName = "Anonymous") {
        echo "hi $firstName $lastName" . PHP_EOL;
    }

    sayHi("aria");
    sayHi("aria", "fatah");
    echo "\n";

// type declaration => argument di php juga bisa dinamis(type apapaun bisa)
    // namun jika ingin kita membuat sebuah function yang boleh number
    // kita bisa menambahkan type di argumentya
        // jika tipe data tidak sesuai maka akan error
        // secara default php akan melakukan konversi tipe data secara otomatis,
            // misal jikakita menggunakan tipe int
            // tapi kita mengirim string maka php akan menkonversi ke int
    // valid type
    /*
    class/interface => paramter harus tipe class
    self => patamter harus sama dengan class dimana function ini dibuat
    array => parameter harus array
    callable => paramter harus callable
    bool => paramter harus boolean
    float => paramter harus float

    int => paramter harus integer number
    string => paramter harus string
    interable => parameter harus array atau tipe traversable
    object => paramter harus sebuah object
    */
    function sum(int $first, int $last) {
        $total = $first + $last;
        echo "total $first + $last = $total" . PHP_EOL;
    }

    sum("10", "10"); // dikonversi dari string menjadi int
    sum(10, 10);
    sum(true, false); // true = 1, false = 0
    // sum([], []); // error
    // sum("sepuluh", 10); // error
    echo "\n";

// variable-length argument list => merupakan kemampuan dimana kita bisa membuat sebuah parameter
    // yang menerima banyak value
    // variable-length argument list secara otomatis akan membuat sebuah argument menjadi array
        // namun kita tidak perlu manual mengirim array ke functionnya
    // variable-length list hanya bisa dilakukan di argument posisi terakhir
    // untuk membuat variable-length argument list kita bisa menggunakan ...(titik tiga kali)

    function sumAll(...$values) {
        $total = 0;
        foreach ($values as $value) {
            $total += $value;
        };
        // implode => merubah array menjadi string
        echo "total" . implode(",", $values) . " = $total" . PHP_EOL;
    };

    $angka = [2,2,2,2,2];

    sumAll(1,2,3,4,5);
    // sumAll($angka); // error
    sumAll(...$angka);