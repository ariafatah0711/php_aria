<?php
// saat kita melakukan perbandingan number dan string
    // 0 == "aria" hasilnya adalah true
        // true dikarenakan PHP akan melakukan jugling da mengubah "aria" menjadi 0, sehingga hasilnya true
    // namun di PHP versi 8 diubah agar tidak membingungkan

// string to number comparison => 
    /*
    comparison | before | after
    0 == "0"   | true | true
    0 == "0.0  | true | true
    0 == "aria | true | false
    0 == ""    | true | false
    1 == "   1"| true | true
    1 == "1aria" | true | false
    */

    var_dump(0 == "0"); // true
    var_dump(0 == "0.0"); // true
    var_dump(0 == "aria"); // false
    var_dump(0 == ""); // false
    var_dump(1 == "   1"); // true karena terdapat angka 1
    var_dump(1 == "1aria"); // false