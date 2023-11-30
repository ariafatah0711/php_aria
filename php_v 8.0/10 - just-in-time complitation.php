<?php
// just-in-time complitation => merupakan fitur yang akan
    // mempercepat proses eksekusi progam php yang kita buat

    /*
    cara php menjalankan kode progam php
              tokens   abtrak syntax tree   Opcodes
                |             |             |
    PHP CODE -> tokenize -> parse ->  compile -> excute -> CPU

    1. progam php nya di tokenize dulu (setelah dibaca)
    2. hasilnya akan berupa tokens tokens nya
    3. lalu di parse / parsing dan akan menjadi abstrak syntax tree
    4. lalu akan di compile dan akan menghasilkan Opcodes
    5. dan Opcodes nya yang akan di execute oleh CPU nya
    */

// secara default PHP akan selalu membaca kode PHP ketika menjalankan progam PHP
    // OPCache digunakan untuk meningkatkan perfomance PHP, dengan menyimpan hasil kompilasi kode PHP di memory
    // dengan demikian, PHP tidak perlu lagi membaca ulang kode progam PHP setiap kali progam dijalankan
    // PHP akan langsung membaca dari OPchache yang sudah disimpan di memory
    // fitur OPchache harus diaktifkan terlebih dahulu, sebelum kita bisa menggunakanya

    /*
                                        PHP code
                                           |
                                        OP chace
                           tdk ada  |      | ^       |
                                |          |simpan     |V
                            |v             |               |ada
                    tokenize -> parse ->  compile -> excute -> CPU                    
                |                 |         |
                tokens   abtrak...   Opcodes

    1. jadi saat php code dijalankan dia akan dibaca dari OPchace
    2. jika tidak ada data kode progam hasil compilasinya
       dia akan menjalankan kode seperti biasanya
    3. lalu akan disimpan saat compile ke memory
    4. jadi ketika kita ingin menjalankan kode progam kita lagi kita tidak perlu melkukan tokenize dan parse lagi
       akan langsung ke execute
    */

// untuk mengaktifkan ini
    // kita pergi ke php.ini di dalam file php kita disimpan
    // lalu cari teks [opchache]
    
    
    /*
    [opcache]
    ;zend_extension=opachace.so

    lalu hapus ; (comment ini) menjadi
    
    [opcache]
    zend_extension=opachace.so
    */

    // jika ingin tahu sudah aktif atau belum kita dapat menggunakan
    // php -version itu akan menampilkan versi dan juga keterangan fitur opcahcenya
        // jika sudah nyala akan memapilkan "witxh Zend OPchache"