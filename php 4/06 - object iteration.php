<?php
// object iteration => iterasi ke setiap propeties yang terdapat di object tersebut 
    // menggunakan for each
    // hal ini mempermudah kita saat ingin mengakses semua propeties yang ada di object
    // secara default hanya propeties public yang hanya bisa di akses

    class Data1
    {
        var string $first = "first";
        public string $second = "second";
        private string $third = "third"; // tidak dapat di foreach
        protected string $fourth = "fourth"; // tidak dapat di foreach
    }

    $data1 = new Data1();

    foreach($data1 as $key => $value) {
        echo "$key : $value" . PHP_EOL; // hanya tampil yang propeties public saja
    }
    echo PHP_EOL;

// iterator => melakukan iterasi secara manual
    // iterator adalah interface yang digunakan untuk melakukan iterasi,
        // dengan menggunakan ArrayIterator => iterator yang menggunakan array sebagai data iterasinya
    // dan agar class bisa di iterasi secara manual kita bisa menggunakan interface iteratorAggregate
        // kita hanya butuh meng-override function getIterator() yang mengembalikan data iterator

    class Data2 implements IteratorAggregate // interface bawaan php
    {
        var string $first = "first";
        public string $second = "second";
        private string $third = "third";
        protected string $fourth = "fourth";

        public function getIterator(): Traversable {
            $array = [
                "first" => $this->first,
                "second" => $this->second,
                "third" => $this->third,
                "fourth" => $this->fourth,
            ];

            // $iterator = new ArrayIterator($array);
            // return $iterator;

            // disingkat jadi

            return new ArrayIterator($array);

            // atau langsung bisa

            // return new ArrayIterator([
            //     "first" => $this->first,
            //     "second" => $this->second,
            //     "third" => $this->third,
            //     "fourth" => $this->fourth,
            // ]);
        }
    }

    $data2 = new Data2();

    foreach($data2 as $key => $value) {
        echo "$key : $value" . PHP_EOL; // hanya tampil yang propeties public saja
    }