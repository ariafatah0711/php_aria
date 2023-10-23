<?php
// operator penugasan
    // menggunakan lambang =
    // operator penugasan digunakan untuk menambahkan data dan mengubah data
    // namun dapat di gunakan di aritmatika
        // $a += $b => $a = $a + $b
        // $a -= $b => $a = $a - $b
        // $a *= $b => $a = $a * $b
        // $a /= $b => $a = $a / $b
        // $a %= $b => $a = $a % $b

    $total = 0;

    $fruit = 10000;
    $chicken = 3500;
    $orangeJuice = 5000;

    // $total = $total + $fruit // sama aja kaya 
    $total += $fruit;
    $total += $chicken;
    $total += $orangeJuice;

    var_dump($total);
