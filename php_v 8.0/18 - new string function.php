<?php
// new string function => funtcion baru untuk memanipulasi string
    // str_contains($string, $contains): bool
        // => mengecek apakah $string mengandung $contains

    // str_starts_with($string, $value): bool
        // => mengecek apakah $string memiliki awal $value

    // str_ends_with(4string, $value): bool
        // => mengecek apakah $string memiliki akhir $value

    var_dump(str_contains("aria fatah anom", "aria"));
    var_dump(str_contains("aria fatah anom", "ganteng"));
    echo PHP_EOL;
    
    var_dump(str_starts_with("aria fatah anom", "aria"));
    var_dump(str_starts_with("aria fatah anom", "anom"));
    var_dump(str_starts_with("../image.png", "../"));
    echo PHP_EOL;
    
    var_dump(str_ends_with("aria fatah anom", "aria"));
    var_dump(str_ends_with("aria fatah anom", "anom"));
    var_dump(str_ends_with("../image.jpg", "jpg"));
    var_dump(str_ends_with("../image.jpg", "jpge"));