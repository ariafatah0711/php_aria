<?php
// comparing object => membandingkan dua buah object
    // menggunakan operator == (equals) dan === (identity)
        // equals(==) => membandingkan semua propeties yang terdapat pada object tersebut
        // identity(===) => membandingkan apakah object identik (mengacu object yang sama)

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

    $student2 = new Student();
    $student2->id = "1";
    $student2->name = "aria";
    $student2->value = 100;

    var_dump($student1 == $student2); // true => propeties value harus sama
    var_dump($student1 === $student2); // false => dua object yang berbeda
    var_dump($student1 === $student1); // true => object yang sama 