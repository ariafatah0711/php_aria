<?php
// costant => merupakan object/var di class yang tidak bisa diubah datanya
    // di php lama kita menggunakan define($namavar, value)
    // namun di php 7.4 kita bisa menggunakan kata kunci const
        // untuk membuat variable namun tidak perlu gunakan $
        // const APP_VERSION = value;
        /*
        define("APPLICATION", "belajar php");
        const APP_VERSiON = 1.0.15;
        
        echo APPLICATION . PHP_EOL;
        echo APP_VERSION . PHP_EOL;
        */

        class Person
        {
            // ke dalam class::
            const AUTHOR = "ariafatah";

            // ke dalam class->propeties
            var string $user;
            var ?int $age = null;
        }

        // mengakses const
        echo Person::AUTHOR . PHP_EOL;