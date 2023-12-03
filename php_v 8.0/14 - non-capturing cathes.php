<?php
// saat terjadi error di php kita menggunakan try catch
    // lalu dalam try catch kita akan menangkap error
    // dan menyimpan dalam variable exception
    // walaupun sebenernya tidak kita gunakan kita harus membuat variable exception nya

// non-capturing cathes => di php 8 kita dapat menggunakan try catch
    // tanpa perlu membuat variable exception nya jika memang tidak akan menggunakanya

    function validate(string $name) {
        if (trim($name) == "") {
            throw new Exception("Invalid Name");
        }
    }

// di php 7 harus membuat variable exceptionya
    try {
        validate("  ");
    } catch (Exception $error) {
        echo $error->getMessage() . PHP_EOL; // jika ingin mengambil message atau erronya
    }

// di php 8 tidak wajib
    try {
        validate("   ");
    } catch (Exception) { // jika tidak butuh variablenya exceptionya bisa di hapus variablenya
        echo "Invalid name" . PHP_EOL;
    }