<?php
// interface inheritance => di interface class bisa memilki lebih dari 1 interface
    // dan interface kita juga bisa bisa melakukan implementasi interface lainya
        // namun jika ingin melakukan itu kita perlu menggunakan extends dan bukan implementasi
    
    interface HasBrand
    {
        function getBrand(): string;
    }

    interface IsMaintenance
    {
        function isMaintenance(): bool;
    }

    interface Car extends HasBrand
    // ingat hanya bisa extends interface dan bukan class
    {
        function drive(): void;
        function getTire(): int;
    }

    class Avanza implements Car, isMaintenance
    {
        public function drive(): void {
            echo "Drive Avanza" . PHP_EOL;
        }

        public function getTire(): int {
            return 4;
        }

        public function getBrand(): string {
            return "Toyota";
        }

        public function isMaintenance(): bool {
            return false;
        }
    }

    $car = new Avanza();
    $car->drive();

    echo "getTire: {$car->getTire()}" . PHP_EOL;
    echo "getBrand: {$car->getBrand()}" . PHP_EOL;
    echo "isMaintenance: {$car->isMaintenance()}" . PHP_EOL;
    