<?php
// saat kita membuat function, dan ketika kita mengirim argument dengan tipe data ayng salah,
    // maka akan berakhir TypeError dan sebelum versi 8 hanya menampilkan warning saja
    // berbeda dengan v 8 yang akan diberitahui error

// consistent type error => saat kita mengirim argument dengan tipe data yanng salah akan menampilkan error
    strlen("aria"); // untuk mengecek panjang string

    strlen([]); // error => karena parameter nya harus string