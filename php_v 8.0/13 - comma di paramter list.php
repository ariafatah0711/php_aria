<?php
// comma di paramter list => menambahkam karakter comma di akhir paramter list
    // seperti kita memanggil function, membuat array dll
    function sayHello(string $first, string $last): void {
        
    }

    sayHello(
        "aria",
        "fatah", // ini berguna agar tidak perlu menghapus koma di akhirnya lagi jika misal lagi nylin gitu
    );

    // kalau di php sebelumnya tidak bisa ada comma di akhirnya
    sayHello("aria", "fatah",); // jika di php 7 ini error

// contoh comma di array
    $array = [
        "frist" => "aria",
        "middle" => "fatah",
        "last" => "anom", // comma di akhir
    ];