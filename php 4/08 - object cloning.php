<?php
// object cloning => menduplikasi sebuah object
    // menggunakan kata kunci clone
    // secara otomatis semua propeties yang ada di object awal
        // akan di duplikasi di object baru
    class Student
    {
        public string $id;
        public string $name;
        public int $value;

        private string $sample;

        public function setSample(string $sample) {
            $this->sample = $sample;
        }
    }
    
    $student1 = new Student();
    $student1->id = "1";
    $student1->name = "aria";
    $student1->value = 100;
    $student1->setSample("abc");

    var_dump($student1);

    // clone
    $student2 = clone $student1; // semuanya akan di clone
    $student2->id = "2";
    
    var_dump($student2);
    echo PHP_EOL;

// __clone() function => menyalin beberapa propeties saja
    // jika kita ingin memodifikasi cara php melakukan clone
        // kita bisa membuat function di dalam class nya dengan nama __clone
    // function __clone() akan di panggil di object hasil duplikasi setelah proses selesai
    // jadi jika kita ingin menghapus beberap propeties, bisa kita lakukan function __clone()

    /*
    alurnya
    $student1 => clone $student2 => $student2->__clone;

    jadi clone akan di panggil setealh student2 di clone
    
    */

    class Mahasiswa
    {
        public string $id;
        public string $name;
        public int $value;
        private string $sample;
        public function setSample(string $sample) {
            $this->sample = $sample;
        }

        // fucntion ini hanya di panggil jika ada clone
        public function __clone() {
            unset($this->sample); // jadi data samplenya akan di hapus dari cloningnya
        }
    }

    $mahasiswa1 = new Mahasiswa();
    $mahasiswa1->id = "1";
    $mahasiswa1->name = "aria";
    $mahasiswa1->value = 100;
    $mahasiswa1->setSample("abc");

    var_dump($mahasiswa1);

    // clone
    $mahasiswa2 = clone $mahasiswa1; // semuanya akan di clone
    $mahasiswa2->id = "2";
    
    var_dump($mahasiswa2);
    // yang sample nya jadi uninitalized / valuenya sudah dihapus