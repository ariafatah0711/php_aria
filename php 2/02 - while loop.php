<?php
// while loop => merupakan versi perulangan yang lebih sederhana dibandingkan foor loop
    // hanya terdapat kondisi perulangan,
    // tanpa init statment dan post statement
    $counter = 1;

    while ($counter <= 10) {
        echo "perulangan while ke-$counter" . PHP_EOL;
        $counter++;
    };
    echo "\n";

// syntax alternnatif
    $counter = 10;

    while ($counter >= 1) :
        echo "perulangan while ke-$counter" . PHP_EOL;
        $counter--;
    endwhile;