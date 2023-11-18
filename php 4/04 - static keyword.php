<?php
// static keyword => kata kunci static yang
    // digunakan untuk membuat propeties atau function di class
        // bisa di akses tanpa menginstasiasi class terlebih dahulu
    // namun saat kita buat static propeties atau function
        // secara otomatis hal itu tidak akan berhubungan dengan class instance yang kita buat
    // untuk cara mengakses constant, kita gunakan operator ::
    // static function tidak bisa mengakses function biasa, 
        // karena function biasa menempel pada class instance sedangkan static function tidak

// static propeties
    class MathHelper
    {
        static public string $name = "MathHelper"; // hanya bisa di akses dari class
    }

    echo MathHelper::$name . PHP_EOL;

    MathHelper::$name = "aria fatah ganteng";
    echo MathHelper::$name . PHP_EOL;

    // error karena propeties dari object ini tidak memilki $name propeties
    // echo $mathHelper->$name . PHP_EOL; 

// static function
    class MathHelperFunction
    {
        static public function sum(int ...$numbers): int {
            $total = 0;
            foreach ($numbers as $number) {
                $total += $number;
            };
            return $total;
        }
    }

    $result = MathHelperFunction::sum(10, 5, 5, 10); // 50
    echo "result : $result" . PHP_EOL;