<?php
// data NULL => mereprentasikan sebuah variable tanpa nilai
    // saat kita membuat variable, lalu ingin mengahpus data yang terdapat di variable
    // kita bisa menggunakan NULL(mengkosongkan nilai)
    // membuat NULL menggunakan kata kunci null(case insensitive)
$name =" EKO";
$name = null; // variable name dihapus
$name = NULL;

$age = nUlL; // variable age bernilai kosong

echo "Name : ";
echo $name;
echo "\n";

echo "Age : ";
echo $age;
echo "\n";

// mengecek data NULL atau tidak
    // menggunakan function is_null($variable)
        // jika 1 berarti null
        // jika 0 berarti tidak null
    // dan tidak bisa mengecek null jika var belum di deklarasikan karena itu bukan cara mengecek varnya ada atau tidak
echo "Is Name Null? : ";
echo is_null($name);
var_dump($name);
echo "\n";

// menghapus variable => menggunakan function unset($variable)
$contoh = "eko";
unset($contoh);

    // echo $unset; // error karena variabllenya tidak ada
    // dan function is_null tidak dapat digunakan

// mengecek apakah variable ada atau tidak dan null atau bukan
    // jika false (variable tidak ada / variable ada namun tidak ada nilai)
    // jika true (variable ada dan bernilai (atau tidak null))

var_dump(isset($contoh)); // variable tidak ada

$contoh = null;
var_dump(isset($contoh)); // false => var ada, nilai null

$contoh = "contoh 123";
var_dump(isset($contoh)); // true => var ada, nilai ada