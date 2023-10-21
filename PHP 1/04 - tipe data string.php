<?php
// tipe data string => merupakan tipe data representasi dari teks
    // string bisa mengandung kosong atau banyak karakter

// single quote (kutip satu)
echo 'Name : ';
echo 'Aria Fatah Anom';
echo '  \n'; // tidak bisa gunain escape sequence

// Double Quote (kutip dua)
    // kelebihanya kita bisa menggunakan escape sequnece
    // seperti \n enter, \t TAB, ull
echo "\n"; // enter
echo "Nama \t: kelas \t: umur"; // tab
echo "\naria \t: 11 \t\t: 17";

// multiline string => data string lebih dari satu baris
    // tanpa menggunakan \n sebagai enter
    // namun php memilki fitur Heredoc dan Nowdoc(tidak ada parsing)

// Heredoc => membuat string yang panjang. seperti pre di html
echo <<<aria
\n\nSelamat belajar php
kita sekarang belajar tipe data string
ini addalah cara ketiga membuat string\n\n
aria;

// Nowdoc => seperti Heredic namun tidak memilki kemampuan parsing atau Double Quote
echo <<<'aria'
tidak memilki escape sequence
\n\n\n tidak bisa di enter
\t tidak bisa di tab
dan tidak memilki kemampuan parsing
aria;