<?php
// is function => merupakan function dengan prefix is
    // function ini rata rata digunakan untuk mengcek tipe data dari sebuah data
    // is_string(), is_bool(), is_int(), is_float()
    // is_array(), is_callable;
    $data = 100;

    var_dump(is_string($data));
    var_dump(is_bool($data));
    var_dump(is_int($data));
    var_dump(is_float($data));
    var_dump(is_array($data));
    var_dump(is_null($data));