<?php
// interface => kontrak untuk class child
    // interface di php tidak ada hubunganya sama user interface, gui atau lainya
    // interface mitip seperti abstrak class
        // yang membedakan adalah di interface, semua method otomatis abstrak
        // dan tidak memilki blok
        // dan memang berfungsi sebagai prototype
    // di interface kita tidak boleh memilki propeties dan hanya boleh constant
    // untuk mewariskan interface kita tidak pake etends melainkan implements

    // beda dengan class, kita bisa implements lebih dari satu interface
        // mirip seperti abstrak class namun tanpa perlu menulis abstrak
    interface Car
    {
        function drive(): void;
        function getTire(): int;
    }

    class Avanza implements Car
    {
        function drive(): void {
            echo "Drive Avanza" . PHP_EOL;
        }

        function getTire(): int {
            return 4;
        }
    }
    // bisa juga dilakukan dengan polymorphisme

    $car = new Avanza();
    $car->drive();
    $car->getTire();