<?php
// regular expression => merupakan fitur yang digunakan untuk melakukan pencarian di string

    // preg_match($pattern, $subject) => digunakan untuk mencari match pattern(1 nilai pertama)
    // preg_match_all($pattern, $subject) => semua nilai

    // preg_replace($pattern, $replacement, $subject) => digunakan untuk
        // mereplace semua pattern dengan replacement

    // preg_split($pattern, $subject) => digunakan untuk memotong dengan pattern menjadi array

// preg_match
    // /.../i => begini
    // i => incane sensitif
    // | atau
    $matches = [];
    $result = (bool)preg_match_all("/aria|fa|nom/i", "aria fatah anomnom", $matches);
    // matches berfungsi untuk menyimpan data yang telah di cari
    
    var_dump($result); // akan menghasilkan boolean
    var_dump($matches); // data yang di simpan sebelumnya dijadikan array

    $result = preg_match_all("/aria|fa|nom/i", "aria fatah anomnom", $matches); // tanpa bool
    var_dump($result); // 4 => jika bool dihapus yang tampil adalah banyak data yang di temukan

// preg_replace
    $result = preg_replace("/anjing|babi/i", "******", "dasar lu anjing babi");
    var_dump($result); // kata yang ada anjing / babi akan di replace menjadi ******

// preg_split
    // [] => \s artinya jika ada spasi akan di split/ambil
    // . - => jika ada , dan - maka akan di split juga
    $result = preg_split("/[\s,-]/", "Aria Fatah Anom Ganteng, belajar-PHP-Dasar");
    var_dump($result);