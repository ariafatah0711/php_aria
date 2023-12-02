<?php
// validation function overriding => validasi ketika mengimpletasikan abstrak function di class dari trait
    // jika di php 7 saat kita ubah paramter / return value hanya ada warning saja
    // namun di php 8 jika kita mengubah implementasi dari abstrak functionya
        // maka otomatis akan error

    trait SampleTrait
    {
        public abstract function sampleFunction(string $name): string;
    }

    class SampletraitImpl
    {
        use Sampletrait;

        // akan error karena trait / abstrak function parameternya harus string
            // karena kita ingin mengubah / overriding abstrak functionya akan mengalami error

        public function sampleFunction(string $name): string {} // tidak error

        // public function sampleFunction(int $name): int {} // error
    }

// contoh
    class ParentClass
    {
        public function method(array $a) {

        }
    }

    class Child extends ParentClass
    {
        // public function method(int $a) {} // error
    }

// private function overriding
    // di php 7 saat kita membuat function, tapi ternyata di parent
        // terdapat function dengan nama yang sama
        // walaupun private itu akan di anggap overriding
    // di php 8 sekarang private function tidak ada hubunganya dengan child class nya,
        // sehingga kita bebas membuat function dengan nama yang sama walupun di parent
        // sudah ada private function dengan nama yang sama

    class Manager
    {
        // public function test(): void {} // error
        // protected function test(): void {} // error
        private function test(): void {}
    }

    class VicePresident extends Manager
    {
        public function test(string $name): string {
            // tidak error karena dia private
                // kecuali public, protected tidak boleh
            return "Hello $name" . PHP_EOL;
        }
    }