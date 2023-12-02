<?php
// mixed type v2 => 
    // di php 7 terdapat type data mixed(bisa menerima data apapun)
    // dan di php 8 terdapat union type(bisa memilih type data lebih dari 1 / bermacam macam)
        // di php 8 tipe data mixed diperbarui. karena sudah suport union type
        // dan sekarang mixed merupakan tipe data gabungan dari
    // array|bool|callable|int|float|null|object|resource|string

    function testMixed(mixed $param): mixed
    {
        if (is_array($param)) {
            return [];
        } else if (is_string($param)) {
            return "aria";
        // } else if (is_numeric($param)) {
        } else if (is_int($param)) {
            return 1;
        } else if (is_bool($param)) {
            return true; // true otomatis berubah menjadi 1
        } else {
            return null;
        }
    }

    var_dump(testMixed([]));
    var_dump(testMixed("aria"));
    var_dump(testMixed(1)); // 1
    var_dump(testMixed(true)); // otomatis berubah jadi 1
    var_dump(testMixed(null));
    var_dump(testMixed(new stdClass()));