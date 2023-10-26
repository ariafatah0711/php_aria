<?php
// if statement => merupakan kata kunci untuk percabangan
    // percabangan =>  merupakan pengeksekuisan kode tertentu ketika kondisi terpenuhi
    /*
    if (expression)
        statement;
    
    if (expression) {
        statment1;
        statment2;
        }
    */

    // jika expression bernilai true maka kode statement nya akan di eksekusi
    $nilai = 80;
    $absen = 90;

    if ($nilai >= 75 && $absen >= 75) {
        echo "anda lulus" . PHP_EOL;
    };

// else statement => kadang kita ingin melakukan kondisi if bernilai false
    // hal ini bisa dilakukan menggunakan else statement
    /*
    if (expression)
        statement;
    else
        statement;
    
    if (expression) {
        statement1;
        statement2;
    } else {
        statement
    }
    */
    $umur = 17;

    if ($umur >= 18) {
        echo "anda boleh masuk" . PHP_EOL;
    } else {
        echo "anda tidak boleh masuk" . PHP_EOL;
    };
    
    