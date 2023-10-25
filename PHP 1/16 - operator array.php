<?php
// opearator array
    // $a + $b (union) => menggabungkan array $a dan $b
    // $a == $b (equality) => true jika $a dan $b memilki key-value sama
    // $a === $b (identity) => true jika $a dan $b memilki key-value dan posisi sama
    // $a != $b (inequality) => true jika $a dan $b tidak sama
    // $a <> $b (inequality) => true jika $a dan $b tidak sama
    // $a !== $b (noneidentity) => true jika $a dan $b tidak identik

$first = [
    "first_name" => "aria" // data ini yang akan di ambil
];

$last = array(
    "first_name" => "eko", // yang awal akan di duluan
    "last_name" => "fatah"
);

$full = $first + $last;

var_dump($full);

// membandingkan data array
$a = [
    "first_name" => "aria",
    "last_name" => "fatah"
];

$b = [
    "last_name" => "fatah", // dibalik
    "first_name" => "aria"
];

echo("\n");
var_dump($a == $b); // true => key-value
var_dump($a === $b); // tru => key-value, posisi