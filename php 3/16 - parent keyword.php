<?php
// parent keyword => mengakses function class parent
    // yang sudah telanjut di overide di class child
    // menggunakan kata kunci parent
    class Shape
    {
        function getCorner(): int {
            return 0;
        }
    }

    class Rectangle extends Shape
    {
        public function getCorner(): int {
            return 4; // overide getCorner
        }

        public function getParentCorner(): int {
            // return $this->getCorner(); // jika kita coba ini dia akan memanggil function class kita sendiri
            return parent::getCorner(); // mengakses getcorner milik parent
        }
    }

    $shape = new Shape();
    echo $shape->getCorner() . PHP_EOL; // 0

    $rectangle = new Rectangle();
    echo $rectangle->getCorner() . PHP_EOL; // mengambil function kita

    echo $rectangle->getParentCorner() . PHP_EOL; // mengakses function parent