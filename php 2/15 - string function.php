<?php
// string function => function untuk memanipulasi data string
    // join() atau implode() => menggabungkan array menjadi string
    // explode() => memecah string menjadi array
    // strtolow() => mengubah string menjadi lowercase
    // strtoupper() => mengubah string menjadi uppercase
    // trim() => mengahpus karakter whitespace di depan dan di belakang
    // substr() => mengambil sebagian string

    var_dump(join(",", [10, 11, 12, 14, 15, 16])); // digabungin
    var_dump(explode(" ", "aria fatah anom")); // spasi dipecah menjadi array
    var_dump(strtolower("StrToLower"));
    var_dump(strtoupper("strtoupper"));
    var_dump(trim("     aria     ganteng       ")); // hanya depan dan di belakang
    var_dump(substr("aria fatah anom", 0, 3)); // ari => karakter 0 sampai ke 3