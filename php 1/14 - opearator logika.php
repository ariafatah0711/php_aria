<?php
// operator logika => opeartor untuk membandingkan dua nilai boolean
    // hasil dari operator logika adalah boolean lagi

    // $a && $b (AND) => kedua data true(true)
        // $a and $b => kedua data true(true)
    // $a || $b (OR) => jika salah satu data true(true) atau semua nya(true)
        // $a OR $b => jika semua data false(false)
    // !a (NOT) => kebalikan dari sebuah boolean true(false) false(true)
    // $a XOR $b (XOR) => salah satu data true(true) semua data true(false)
        // jika 1 0 (true) jika 1 1 (false)

    var_dump(true && true); // true
    var_dump(true && false); // false

    var_dump(true || false); // true
    var_dump(false || false); // false

    var_dump(true xor false); // true
    var_dump(true xor true); // false
    
    var_dump(!false); // true
    var_dump(!true || false); // false karena !true sama dengan false