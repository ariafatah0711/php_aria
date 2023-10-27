<?php
// goto operator => merupakan fitur dimana untuk loncat ke kode progam sesuatu dengan keinginan kita
    // defaultnya alur progamnya dari atas ke bawah
        // kalau goto bisa loncat loncat
        // namun ini jjarang digunakan karena dapat membingunkan progam
    // menggunakan nama label :(colon)
    goto a; // pergi ke a

    echo "hello a" . PHP_EOL; // progam ini di skip
    echo "hello a" . PHP_EOL; // progam ini di skip
    echo "hello a" . PHP_EOL; // progam ini di skip

    a: // label a
    echo "a" . PHP_EOL . PHP_EOL;

// goto di operator loop
    $counter = 1;
    while (true) {
        echo "perulangan ke $counter" . PHP_EOL;
        $counter++;

        if ($counter > 10) {
            goto end; // pergi ke label end;
        }
    }

    end: // label
    echo "end loop";