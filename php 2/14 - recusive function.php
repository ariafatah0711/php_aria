<?php
// recursive function => merupakan kemampuan sebuah function memanggil function diri sendiri
    // recursive function berguna saat seperti menggunakan factorial
    
// faktorial loop
    function factorialLoop(int $value): int {
        $total = 1;
        for ($i = 1; $i <= $value; $i++) {
            $total *= $i;
            // 1 * 2 * 3 * 4 * ...
        }
        return $total;
    }

    var_dump(factorialLoop(5));
    var_dump(1 * 2 * 3 * 4 * 5);

// rekursive funtcion
    function factorialRecursive(int $value): int {
        if ($value == 1) {
            return 1;
        } else {
            return $value * factorialRecursive($value -1);
            // 10 kali 9
            // 10*9 kali 8
            // 19*9*8 kali 7
            // ....
        }
    }

    var_dump(factorialRecursive(5));
    echo "\n";

// problem dengan recursive
    // jika recursive function terlalu dalam, maka ada kemungkinana terjadi memory overflow,
        // yaitu error dimana memory terlalu banyak
    // 
    // factorialRecursive(5) * factorialRecursive(4) * factorialRecursive(3); // dan seterusnya

    function loop(int $value) {
        if ($value == 0) {
            echo "selesai" . PHP_EOL;
        } else {
            echo "loop-$value" . PHP_EOL;
            loop($value - 1);
        }
    }
    
    loop(10);
    // loop(100); // php fatal error jika terlalu banyak/terlalu dalam