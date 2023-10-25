<?php
// increment => menaikan data number sebanyak 1 angka
    // $a++ Post increment (setelah)
        // kembalikan $a lalu naikan 1 angka
    // ++$a Pre increment (sebelum)
        // naikan $a satu angka, lalu kembalikan $a

// decrement => menurunkan data number sebanyak 1 angka
    // $a-- Post increment (setelah)
    // ++$a Pre decrement (sebelum)
$a = 0;
$a++; // 1
$a++; // 2
var_dump($a);

$a = 10;
$b = ++$a; // 11 => $a nya ditaikan terlebih dahulu, lalu datanya di kembalikan ke $b
// a = a+1, lalu b = a
echo("\n");
var_dump($b);
var_dump($a);

$b = $a++; // 12 => nilai a dikembalikan ke $b, lalu $a ditaikan
// b = a, lalu a = a+1
echo("\n");
var_dump($b);
var_dump($a);