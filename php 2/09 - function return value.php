<?php
// secara default function tidak menghasilkan value apapun,
    // namun kita bisa membuat function mengembalikan sebuah nilai

// function return value => merupakan pengembalikan sebuah nilai
    // menggunakan kata kunci return di block function
    function kali(int $first, int $last) {
        echo "function kali dipanggil" . PHP_EOL; // saat membuat var return di var
            // echo juga akan ikut terpanggil

        return $first * $last; // disimpan disebuah variable bisa
        return "hanya bisa satu kali dan satu data"; // tidak dijalankan karena setelah return akan break
    }

    kali(10, 10); echo PHP_EOL; // tidak akan memanggil returnya
        // karena return hanya mengembalikan nilai ke sebuah variable

    $persegi10 = kali(10, 10);
    var_dump($persegi10); // persegi 10 hanya data returnya

    $persegi20 = kali(20, 20);
    var_dump($persegi20);

    echo "\n";

// function return value menggunakan percabangan
    function getFinalValue(int $value) {
        if ($value >= 90) {
            return "A";
        } else if ($value >= 80) {
            return "B";
        } else if ($value >= 70) {
            return "C";
        } else if ($value >= 60) {
            return "D";
        } else {
            return "E";
        }

        echo "Ups" .PHP_EOL; // tidak akan pernah di eksekusi karena
            // setelah sebuah return maka kode dibawahnya tidak akan di eksekusi
    }

    $aria = getFinalValue(88);
    $eko = getFinalValue(98);
    $fadly = getFinalValue(78);
    $vido = getFinalValue(68);

    echo "aria : $aria" . PHP_EOL;
    echo "eko : $eko" . PHP_EOL;
    echo "fadly : $fadly" . PHP_EOL;
    echo "vido : $vido" . PHP_EOL . PHP_EOL;

// return type declaration => mendeklarasikan tipe datanya pada return value
    // agar return / pengembalian datanya tetap terjaga tipe datanya
    // untuk mendeklarasikan tipe data kembalian function, setalh kurung (), kita menambahkan tipe data kembalianya
    function sum(int $first, int $second): int
    {
        return $first + $second;
    }

    function lulus(int $value): string {
        if ($value >= 90) {return "A";}
        else if($value >= 80) {return "B";}
        else if($value >= 80) {return "C";}
        else if($value >= 80) {return "D";}
        else {return "E";}
        echo "Ups" . PHP_EOL;
    }

    $tambah10 = sum(10, 10);
    echo "10 tambah 10 = $tambah10" . PHP_EOL;

    $aria = lulus(100);
    $fadly = lulus(88);
    echo "aria : $aria" . PHP_EOL;
    echo "fadly : $fadly" . PHP_EOL;