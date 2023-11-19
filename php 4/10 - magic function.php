<?php
// magic function => merupakan function yang sudah di tentukan kegunaanya dan di awali __
    // kita tidak bisa membuat function tersebut, kecuali memang sudah ditetukan kegunaanya
        // __constructor() => sebagai consturctor(function yang akan di panggil setelah class dibuat)
        // __destruct() => sebagai destructor(function yang akan di panggil setelah progam selesai)
        // __clone() => sebagai object clone(function yang akan di panggil saat object di clone)
        // dll
    
// __toString() => membuat string dari object
    class Student
    {
        public string $id;
        public string $name;
        public int $value;

        // jika __toString dihapus itu tidak bisa
        public function __toString(): string
        {
            return "Student id:$this->id, Name:$this->name, Value:$this->value";
        }
    }

    $student1 = new Student();
    $student1->id = "1";
    $student1->name = "aria";
    $student1->value = 100;

    $string = (string) $student1; // yang akan di panggil adalah function __toString()
    echo $string . PHP_EOL;

    // atau bisa seperti ini

    echo $student1 . PHP_EOL;

// __invoke() => function yang di eksekusi ketika object yang kita buat di anggap funtcion
    // misal kita membuat object $student, lalu kita malikan $student()
        // maka secara otomatis function __invoke( lah yang akan di eksekusi)

    class Mahasiswa
    {
        public string $id;
        public string $name;
        public string $value;

        public function __invoke(...$arguments):void {
            $join = join(",", $arguments);
            echo "Invoke Student with arguments $join" . PHP_EOL;
        }
    }

    $mahasiswa1 = new Mahasiswa();
    $mahasiswa1("a", "b", "c", false, true);

// __debugInfo() => berisi debug info
    // sebenernya var_dump() merupakan function magic dari __debugInfo()

    class Murid
    {
        public string $id;
        public string $name;
        public int $value;

        private string $sample;
        public function setSample(string $sample) {
            $this->sample = $sample;
        }

        public function __debugInfo(): array {
            return ([
                "id" => $this->id,
                "name" => $this->name,
                "value" => $this->value,
                "author" => "ariafatah",
                "sample" => $this->sample, // error jika belum di inisialisai
                "version" => "1.0.0",
            ]);
        }
    }

    $murid1 = new Murid();
    $murid1->id = "1";
    $murid1->name = "aria";
    $murid1->value = 100;
    $murid1->setSample("sample");

    var_dump($murid1); // namun harus sudah di i