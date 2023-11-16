<?php
// jika kita menggunakan lebih dari 1 trait,
    // lalu ternyata terdapat function yang sama di trait dan akan terjadi conflict
    // maka hal ini kita bisa atasi menggunakan
    // insteadof => memilih function mana yang di ambil

    trait A // huruf kecil
    {
        function doA(): void {
            echo "a" . PHP_EOL;
        }

        function doB(): void {
            echo "b" . PHP_EOL;
        }
    }

    trait B // huruf besar
    {
        function doA(): void {
            echo "A" . PHP_EOL;
        }

        function doB(): void {
            echo "B" . PHP_EOL;
        }
    }

    class Sample {
        use A, B {
            A::doA insteadOf B; // mengambil doA milik trait A daripada trait B
            B::doB insteadOf A;
        }
    }

    $sample = new Sample();
    $sample->doA(); // a => memanggil trait A
    $sample->doB(); // B